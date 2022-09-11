<?php

namespace App\Http\Controllers\Admin;

use App\Models\Activity;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActivitiesRequest;
use Illuminate\Support\Facades\Storage;
use Validator;
class ActivityController extends Controller
{
    /** 
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
        //حتى تقدر تعرض البرامج يكفي ارسال العلاقة مع الايدي في جدول الانشطة لا داعي لتعريف متغير جديدي للبرامج كلها 
        $activities=Activity::select('id','name','pubDate', 'imageUrl','published','note','program_id')->with('programs')->latest()->paginate(5);
        return view('Admin.Activities.index',compact('activities'));
        //->with(['activities'=>$activities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs=Program::all();
        return view('Admin.Activities.create',compact('programs'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ActivitiesRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    { 
        if($request->hasFile('imageUrl'))
        {
            $image_name='activities-'.time().'.'.$request->imageUrl->extension();
            $request->imageUrl->storeAs('public/Activities',$image_name);
            $input['imageUrl']=$image_name;
        }
          else
          {
              $image_name='null';      
          }
       // return $k=json_encode($data);
        $Activity=Activity::create([
            'name'=>$request->name, 
            'pubDate'=>$request->pubDate,
            'note'=>$request->note,
            'program_id'=>$request->program_id,
            'imageUrl'=>$image_name,
        ]);

        return redirect()->route('activities.index')->with([
            'message' => 'Activity created successfully',
            'alert-type' => 'success',
        ]);
        }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        $cats=Cats::all();
        $program=Program::where('id',$program->id)->first();
        return view('Admin.Programs.edit')->with(['program'=>$program,
        'cats'=>$cats]);
        $programs=Program::all();

        $activity=Activity::find($activity);
        return view('Admin.Activities.show')->with('activity',$activity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        
        $programs=Program::all();
        $activity=Activity::where('id',$activity->id)->first();
       // return $activity;
        return view('Admin.Activities.edit')->with(['activity'=>$activity,'programs'=>$programs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $activity=Activity::where('id',$activity->id)->first();
        if($request->hasFile('imageUrl'))
        {
            $image_name='activities-'.time().'.'.$request->imageUrl->extension();
            $request->imageUrl->storeAs('public/Activities',$image_name);
            if($activity->imageUrl)
            {
                Storage::delete('public/Activities'.$activity->imageUrl);
            }
            else
            {
                $image_name=$activity->imageUrl;
            }
        }
        $activity->update([
            'name'=>$request->name,
            'pubDate'=>$request->pubDate,
            'note'=>$request->note,
            'program_id'=>$request->program_id,
            'imageUrl'=>$image_name,
        ]);
    return redirect()->route('activities.index')->with([
        'message' => 'Activite update successfully',
        'alert-type' => 'success',
    ]);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity $activity
     */
    public function destroy(Request $request)
    { 
       return $request->activity_id;
        $activity=Activity::where('id',$request->activity_id)->first();
        $activity->delete();
        return redirect()->route('activities.index')->with([
            'message' => 'Acivity delete successfully',
            'alert-type' => 'success',
        ]);
    } 
    

}
