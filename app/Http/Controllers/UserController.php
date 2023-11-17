<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserRequest;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){


        $users = User::all();


        return view('users.show',compact('users'));
    }


    public function upload(AddUserRequest $request){


       // dd($request->all());

        // $formFields = $request->validateWithBag('user_upload',[

        //     'id' => 'required',
        //     'name' => 'required',
        //     'email' => ['required','email'],
        //     'role_id' => 'required',



        // ]);

        $formFields = $request->validated();



        User::create($formFields);

        return  redirect()->back();

    }
}
