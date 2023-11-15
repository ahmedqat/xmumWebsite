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


    //Upload a new Document

    public function upload(Department $department, Request $request){



        $formFields = $request->validateWithBag('upload',[

            'title' => ['required',ValidationRule::unique('documents','title')],
            'department_id' => 'required',
            'description' => 'required',
            'path' => ['required',ValidationRule::unique('documents','path')],

        ]);





        //Append with original file name

        $file = $request->file('path');
        $originalFileName = $file->getClientOriginalName();

        $newFileName = uniqid() . '.' . $file->getClientOriginalExtension();

        $formFields['path'] = $file->storeAs('docs', $newFileName,'public');

        $formFields['file_name'] = $originalFileName;






        Document::create($formFields);



        return redirect()->back();

    }



    //Update document info

    public function update(Request $request, Document $document){

        $formFields = $request->validateWithBag('update',[

            'edit_title' => 'required',
            'edit_department_id' => 'required',
            'edit_description' => 'required',

        ]);


        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $originalFileName = $file->getClientOriginalName();
            $newFileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $formFields['path'] = $file->storeAs('docs', $newFileName, 'public');
            $formFields['file_name'] = $originalFileName;
        }



        $columnMapping = [
            'edit_title' => 'title',
            'edit_department_id' => 'department_id',
            'edit_description' => 'description',
        ];

        $mappedFields = [];
        foreach ($columnMapping as $formField => $dbColumn) {
            $mappedFields[$dbColumn] = $formFields[$formField];
        }





        $document->update($mappedFields);


        return redirect()->back();



    }



    //Delete Document

    public function delete(Document $document){


        $document->delete();

        return redirect()->back();


    }



}
