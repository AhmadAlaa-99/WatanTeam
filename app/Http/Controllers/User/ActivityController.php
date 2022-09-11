<?php

namespace App\Http\Controllers\User;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Course;
use App\Models\AboutUs;
use App\Http\Controllers\Controller;
class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $contacts=Contact::first();
        $courses=Course::all();
        $aboutUs=AboutUs::first();
        $activities=Activity::select('name','pubDate', 'imageUrl','published','note','program_id')->with('programs')->latest()->paginate(3);
         return view('ActivitiesDetails',compact('activities','contacts','aboutUs','courses'));
   }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        $activity=Activity::where('id',$activity->id)->
        with(['program'=>function($query)
        {
            $query->with('cats');
        }])->get();
        return $activity;
        return view('User.Activities.show')->with('activity',$activity);
    }
    

}
