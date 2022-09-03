<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course as course;
use App\Models\CourseType;
use App\Models\Coach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use File;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function store(Request $request)
      { 
        if($request->hasFile('imageUrl'))
        {
            $image_name='courses-'.time().'.'.$request->imageUrl->extension();
            $request->imageUrl->storeAs('public/Courses',$image_name);
            $input['imageUrl']=$image_name;            
        }
          else
          {
              $image_name='null';      
          }

   
        $Courses=Course::create([
            'coache_id'=>$request->coache_id,
            'type_id'=>$request->type_id,
            'note'=>$request->note,
            'desc'=>$request->desc,
            'program_id'=>$request->program_id,
            'pubDate'=>Carbon::now(),
            'imageUrl'=>$image_name,
        ]);
    
    return redirect()
    ->route('courses.index')
    ->with('success', 'Course added succesfull');

      }
      public function index()
      { 
          $courses=Course::select('id','coache_id','type_id','desc','note','imageUrl')->with('Coach','types')->latest()->paginate(5);
          return view('Admin.Courses.index')->with(['courses'=>$courses]);
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types=CourseType::all();
        $coaches=Coach::all();
        return view('Admin.Courses.create',compact('types','coaches'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    
    public function edit(course $course)
    {
        $types=CourseType::all();
        $coaches=Coach::all();
        $course=Course::where('id',$course->id)->first();
        return view('Admin.Courses.edit')->with([
            'types'=>$types,
            'coaches'=>$coaches,
            'course'=>$course,
        ]);
    }
    public function update(Request $request,Course $course)
    {
       //$validated = $request->validated();
       $course=Course::where('id',$course->id)->first();
       if($request->hasFile('imageUrl'))
       {
           $image_name='courses-'.time().'.'.$request->imageUrl->extension();
           $request->imageUrl->storeAs('public/Courses',$image_name);
           if($course->imageUrl)
           {
               Storage::delete('public/Courses'.$course->imageUrl);
           }
           else
           {
               $image_name=$course->imageUrl;
           }
           
       }
       $course->update([
        'coache_id'=>$request->coache_id,
        'type_id'=>$request->type_id,
        'note'=>$request->note,
        'desc'=>$request->desc,
        'program_id'=>$request->program_id,
        'pubDate'=>Carbon::now(),
        'imageUrl'=>$image_name,
        ]); 
        return redirect()->route('courses.index')->with([
            'message' => 'Course Edit successfully',
            'alert-type' => 'success',
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $Course=Course::where('id',$course->id)->first();
        $Course->delete();
        return redirect()
        ->route('courses.index')
        ->with('success', 'Course deleted');
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $Course=Course::find($course->id)->get();
        return view('Admin.Cources.show',compact('course'));
    }
}
