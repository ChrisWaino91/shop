<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departments;
use App\Product;

class DepartmentsController extends Controller
{

    public function index(Departments $departments, $id){

        $department = Departments::Find($id);

        return view('admin.edit_department', compact('department'));

    }


    public function show(Departments $departments, $id)
    {
        
        $department = Departments::Find($id);
        $products = $department->product;

        return view('department', compact('department', 'products'));
    }




    public function edit(Departments $departments){

        $departments = $departments->all();

        return view ('admin.departments', compact('departments'));
    }


    public function store(Request $request){

        $department = new Departments;
        
        // Try to turn this into a compact request when refactoring
        $department->name = $request->department_title;
        $department->description = $request->department_description;
        
        $department->save();
        
        return redirect('/admin/departments');

    }


    public function create(Departments $departments){

        $departments = $departments->all();
        
        return view('admin.create_departments', compact('departments'));

    }


    public function update(Departments $departments, Request $request, $id){

        $department = Departments::Find($id);

        // Refactor this
        $department->name = $request->department_title;
        $department->description = $request->department_description;

        $department->save();

        return redirect ('/admin/departments');

    }

    public function destroy (Departments $departments, $id){

        Departments::find($id)->delete();
        
        return redirect ('/admin/departments');
         
    }

}
