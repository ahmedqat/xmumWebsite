<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    //Show the login page

    public function show()
    {
        return view('auth.login');
    }


    //LDAP LOGIN
    private function ldapLogIn($session, $campusIDField, $passwordField)
    {

        try {

            $campusID = request($campusIDField);
            $password = request($passwordField);

            //ldap creds

            $credentials = [
                'uid' => $campusID,
                'password' => $password,
            ];


            //Attempt to login

            if (Auth::attempt($credentials)) {
                $user = Auth::user();




                if ($user instanceof \LdapRecord\Models\Model) {

                    //extracr user info
                    $userName = $user->cn[0];
                    $userId = $user->uid[0];


                    //store to session

                    $session->put('user.name', $userName);
                    $session->put('user.id',$userId);


                    $session->save();

                    return true;
                }
            }

            return false;
        } catch (\Exception $e) {
            return false;
        }
    }




    //Authenticate the user.
    public function authenticate(Request $request)
    {


        $request->validate([
            'campus_id' => 'required',
            'campus_password' => 'required',
        ], [
            'campus_id.required' => 'Campus ID is Required.',
            'campus_password.required' => 'Password is Required.',

        ]);

        $campusIDField = 'campus_id';
        $passwordField = 'campus_password';


        //Login with LDAP;

        if ($this->ldapLogIn($request->session(), $campusIDField, $passwordField)) {
            return redirect('/');
        }





        return back();
    }


    public function logout(){

        Auth::logout();


        return redirect('/');


    }
}
