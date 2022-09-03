<?php

namespace App\Http\Controllers\Admin;
use App\Models\Image;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use File;

class MediaController extends Controller
{
   

    public function index()
    {
                $media= Image::select('id','desc','imageUrl')->latest()->paginate(8);
                return view('Admin.Contacts.media',compact('media'));
    }
    public function store(Request $request)
    {
        try {

                $image_name='Media-'.time().'.'.$request->imageUrl->extension();
                $request->imageUrl->storeAs('public/Media',$image_name);        
            
            $media=Image::create([ 
                'desc'=>$request->desc,
                'imageUrl'=>$image_name,
            ]);
            return back();
            }
            catch (\Exception $e){
               
             return redirect()->back()->withErrors(['error' => $e]);  
            }  
            
        }
        public function destroy($id)
        {
            $image=Image::where('id',$id)->first();
            $image->delete();
            return back();
        }
        public function show($id)
        {
            $image=Image::select('imageUrl')->where('id',$id)->get();
       
        foreach($images as $img)
        {
            $path=public_path().'/storage/Media/'.$image_name;
            return Response::download($path);
        }
        }
   
        
}
 