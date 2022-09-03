<?php

namespace App\Http\Controllers\User;

use App\Models\Program;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ProgramController extends Controller
{
   

     public function index()
    {
        $aboutUs=AboutUs::first();
$contacts=Contact::first();
$programs=Program::where('active','1')->select('id','name','goals','audince','topics','imageUrl','active','note','cat_id','created_at')->with('cats')->latest()->paginate(3);
$courses=Course::all();
        return view('ProgramsDetals',compact('programs','contacts','aboutUs','courses'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prorgrm  $prorgrm
     * @return \Illuminate\Http\Response
     */
    public function show(Prorgrm $prorgrm)
    {
        $program=Program::find($prorgrm->id)->get();
        return view('User.Programs.show')->with('program',$program);
    }
    

}
