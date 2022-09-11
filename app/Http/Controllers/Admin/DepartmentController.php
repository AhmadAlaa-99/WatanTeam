<?php

namespace App\Http\Controllers\Admin;

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
        $departments=Department::select('id','name','email','tasks')->latest()->paginate(5);
        return view('Admin.Departments.index')->with([
            'departments'=>$departments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //  $types=DocumentsType::all();
        //$departments=Department::all();
        //$users=User::all();
        return view('Admin.Departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  $validated = $request->validated();
        $Department=Department::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'tasks'=>$request->tasks,
        ]);
    return redirect()
    ->route('departments.index')
    ->with('success', 'Department added succesfull');
    
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
        return view('Admin.Departments.show',compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('Admin.Departments.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
     //   $validated = $request->validated();
        $department=Department::where('id',$department->id)->first();
        $department->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'tasks'=>$request->tasks,
        ]);
        return redirect()->route('departments.index')->with([
            'message' => 'Department update successfully',
            'alert-type' => 'success',
        ]);
    
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department,Request $request)
    {
        $department=Department::where('id',$request->department_id)->first();
        $department->delete();
        return redirect()->route('departments.index')->with([
            'message' => 'Department update successfully',
            'alert-type' => 'success',
        ]);
    }
}
