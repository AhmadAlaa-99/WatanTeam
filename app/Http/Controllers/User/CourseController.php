<?php

namespace App\Http\Controllers\User;

use App\Models\Course;
use App\Models\Contact;
use App\Models\aboutUs;
use App\Models\Coach;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CourseController extends Controller
{
    public function index()
    { 
        $aboutUs=AboutUs::first();
        $courses=Course::select('coache_id','type_id','desc','note','imageUrl','created_at')->with('Coach','types')->with('Coach')->latest()->paginate(3);
        $contacts=Contact::first();
        return view('CourseDetails',compact('courses','contacts','aboutUs'));
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
        return view('User.Courses.show',compact('course'));
    }
}
