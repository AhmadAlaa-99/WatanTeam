<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutUs;
use Illuminate\Http\Request; 
use App\Http\Requests\AboutUsRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use File;
class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        
        $aboutus=AboutUs::select('id','name','about','mession','vision','values','logoUrl','teamLeader')->first();
        //return $aboutus->name;  true but in view index get error ttempt to read property "name" on boo
        return view('Admin.Aboutus.index')->with([
            'aboutus'=>$aboutus,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit()
    {
        $aboutus=AboutUs::first();
        return view('Admin.Aboutus.edit')->with([
            'aboutus'=>$aboutus,
        ]); 
    }
    public function update(Request $request)
    {     

        $data=AboutUs::first();
        if($request->hasFile('logoUrl'))
        {
            $image_name='TeamLogo'.'.'.$request->logoUrl->getClientOriginalExtension();
            $request->logoUrl->storeAs('public/watanTeam',$image_name);
            if($data->logoUrl)
            {
                Storage::delete('public/watanTeam'.$data->logoUrl);
            }
            else
            {
                $image_name=$data->logoUrl;
            }   
          }
        $data->update([
            'name'=>$request->name,
            'about'=>$request->about,
            'mession'=>$request->mession,
            'vision'=>$request->vision,
            'values'=>$request->values,
            'teamLeader'=>$request->teamLeader,
            'logoUrl'=>$image_name,
        ]);
    return redirect()->route('aboutus.index')->with([
        'message' => 'Added Information successfully',
        'alert-type' => 'success',
    ]);
    
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $aboutus=AboutUs::findOrFail('id')->delete();
        return redirect()->route('aboutus.index')->with([
            'message' => 'Information delete successfully',
            'alert-type' => 'success',
        ]);
    }
}
