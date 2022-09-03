<?php

namespace App\Http\Controllers\User;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DepartmentController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments=Department::latest()->paginate(5);
        return view('User.Departments.index',compact('departments'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        $department=Department::find($department->id)->get();
        return view('User.Departments.show',compact('department'));
    }

}
