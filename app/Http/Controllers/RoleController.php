<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function index(){
        $roles = Role::all();

        return view('roles.show', compact('roles'));
    }


    public function upload(AddRoleRequest $request){


        // $formFields = $request->validateWithBag('role_upload',[


        //     'name' => 'required',
        //     'role_description' => 'required',



        // ]);

        $formFields = $request->validated();

        Role::create($formFields);

        return  redirect()->back();






    }
}
