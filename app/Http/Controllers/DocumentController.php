<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Document;
use Illuminate\Validation\Rule as ValidationRule;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    //

    //shows the documents and takes two variable the current department and its documents.

    public function show(Department $department){
        $documents = $department->documents()->paginate(10);

        return view('departments.index',compact('documents','department'));
    }

    public function upload(Department $department, Request $request){

        //dd($department);

        $formFields = $request->validate([

            'title' => ['required',ValidationRule::unique('documents','title')],
            'department_id' => 'required',
            'description' => 'required',
            'path' => ['required',ValidationRule::unique('documents','path')],

        ]);


        // $formFields['path'] = $request->file('path')->store('docs','public');


        //Append with original file name

        $file = $request->file('path');
        $originalFileName = $file->getClientOriginalName();

        $newFileName = uniqid() . '.' . $file->getClientOriginalExtension();

        $formFields['path'] = $file->storeAs('docs', $newFileName,'public');

        $formFields['file_name'] = $originalFileName;

        Document::create($formFields);



        return redirect()->back();

    }



}
