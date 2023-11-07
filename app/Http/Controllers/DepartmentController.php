<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{



    // public function library(){
    //     return view('index',[
    //         'departments' => Department::all()
    //     ]);
    // }

    // public function it(){
    //     return view('index',[
    //         'departments' => Department::all()
    //     ]);
    // }
    // public function admin(){
    //     return view('index',[
    //         'departments' => Department::all()
    //     ]);
    // }
    // public function finance(){
    //     return view('index',[
    //         'departments' => Department::all()
    //     ]);
    // }
    // public function research(){
    //     return view('index',[
    //         'departments' => Department::all()
    //     ]);
    // }
    // public function hr(){
    //     return view('index',[
    //         'departments' => Department::all()
    //     ]);
    // }
    // public function asset(){
    //     return view('index',[
    //         'departments' => Department::all()
    //     ]);
    // }
    // public function academic_affairs(){
    //     return view('index',[
    //         'departments' => Department::all()
    //     ]);
    // }

    // public function quality_assurance(){
    //     return view('index',[
    //         'departments' => Department::all()
    //     ]);
    // }


    public function deb()
    {

        return view('index');
    }
}
