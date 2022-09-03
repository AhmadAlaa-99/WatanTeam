<?php

namespace App\Http\Controllers\Admin;

use App\Models\Program;
use App\Models\Cats;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProgramRequest;
use Validator;
use Auth;
use File;
use Carbon\Carbon;
class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index()
     { 

     }
     

     public function ShowActPro()
    {
        $programs=Program::where('active','1')->select('id','name','goals','audince','topics','imageUrl','active','note','cat_id')->with('cats')->latest()->paginate(5);
       // return $programs->imageUrl;
     /*   ->with(['cats'=>function($query)
        {
            $query->select(['name']);
        }])->latest()->paginate(5);
        */
      //  return $programs;
   //   return dd($programs);
        return view('Admin.Programs.actived',compact('programs'));
    }
    public function showDisPro()
    {
        $programs=Program::where('active','0')->select('id','name','goals','audince','topics','imageUrl','active','note','cat_id')->with('cats')->latest()->paginate(5);
        return view('Admin.Programs.disabled',compact('programs'));

    }
    public function DisPro(program $program)
    {
        $programs=Program::where('id',$program->id)->update(['active'=>'0']);
        return redirect()->route('ShowActPro')->with([
            'message' => 'Program Disabled successfully',
            'alert-type' => 'success',
        ]);
    }
    public function ActPro(program $program)
    {
        $programs=Program::where('id',$program->id)->update(['active'=>'1','created_at'=>Carbon::now()]);
        return redirect()->route('ShowActPro')->with([
            'message' => 'Program Actived successfully',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function create()
    {
        $cats=Cats::all();
        return view('Admin.Programs.create',compact('cats'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
      try {
       
        if($request->hasFile('imageUrl'))
        {
            $image_name='programs-'.time().'.'.$request->imageUrl->extension();
            $request->imageUrl->storeAs('public/Programs',$image_name);
            $input['imageUrl']=$image_name;            
        }
          else
          {
              $image_name='null';      
          }

        //$Program->imageUrl=implode('|',$multiple);
        $Program=Program::create([ 
            'name'=>$request->name,
            'goals'=>$request->goals,
            'topics'=>$request->topics,
            'audince'=>$request->audince,
            'cat_id'=>$request->cat_id,
            'note'=>$request->note,
            'imageUrl'=>$image_name,
        ]);

      //  return $Program;
       /*
        return redirect()->route('ShowActPro')->with([
            'message' => 'Program created successfully',
            'alert-type' => 'success',
        ]);
        */
        session()->flash('Add', 'تم اضافة البرنامج بنجاح');
        return back();
        }
        catch (\Exception $e){
           
         return redirect()->back()->withErrors(['error' => $e]);  
        }  
        
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        $program=Program::where('id',$program->id)->first();
        return view('Admin.Programs.show')->with('program',$program);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(program $program)
    {
        $cats=Cats::all();
        $program=Program::where('id',$program->id)->first();
        return view('Admin.Programs.edit')->with(['program'=>$program,
        'cats'=>$cats]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,program $program)
    {
        
        //$validated = $request->validated();
        $program=Program::where('id',$program->id)->first();
        if($request->hasFile('imageUrl'))
        {
            $image_name='programs-'.time().'.'.$request->imageUrl->extension();
            $request->imageUrl->storeAs('public/Programs',$image_name);
            if($program->imageUrl)
            {
                Storage::delete('public/Programs'.$program->imageUrl);
            }
            else
            {
                $image_name=$program->imageUrl;
            }
            
        }
        $program->update([
                'name'=>$request->name,
                'goals'=>$request->goals,
                'topics'=>$request->topics,
                'audince'=>$request->audince,
                'cat_id'=>$request->cat_id,
                'note'=>$request->note,
                'imageUrl'=>$image_name,
            ]); 
       // return $this->showDisPro();
      // return $program->active;
     
       if($program->active='1')
       {
        return $this->showActPro();
       }

       if($program->active='0')
       {
        return $this->showDisPro();
       }
            /*
       return $program->active;
        return redirect()->back()->with([
            'message' => 'Program update successfully',
            'alert-type' => 'success',
        ]);
        */
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(program $program)
    {
      //  return $program->id;
        $program=Program::where('id',$program->id)->first();
        //return $program;
        $program->delete();
        return redirect()->route('ShowActPro')->with([
            'message' => 'Program delete successfully',
            'alert-type' => 'success',
        ]);
    }

    
    public function showImage($id)
     {
        
      $program=Program::where('id',$id)->get();
      //return $program;
      foreach($program as $pro)
        {
            $path=public_path().'/upload/Programs/'.$pro->imageUrl;
            
            return Response::make($path);
        }
     }

    

}
