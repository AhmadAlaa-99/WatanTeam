<?php

namespace App\Http\Controllers\UserManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Identifier;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class IdentifierController extends Controller
{
    public function index()
    {
        $identifiers=Identifier::select('id','name','email','image','role')->latest()->paginate(5);
        return view('Admin.Identifier.index',compact('identifiers'));
    }

    public function store(Request $request)
    {
        try {
       
                $image_name='Identifiers-'.time().'.'.$request->image->extension();
                $request->image->storeAs('public/Identifiers',$image_name);         
    
            //$Program->imageUrl=implode('|',$multiple);
            $Identifier=Identifier::create([ 
                'name'=>$request->name,
                'email'=>$request->email, 
                'image'=>$image_name,
                'role'=>$request->role,
            
            ]);

             return $this->index();
            } 
            catch (\Exception $e)
            {
             return redirect()->back()->withErrors(['error' => $e->firstMessage()->first()]);  
            }  
         
    }
    public function update(Request $request,Identifier $identifier)
    {
        
        //$validated = $request->validated();
        $identifier=Identifier::where('id',$identifier->id)->first();
        if($request->hasFile('image'))
        {
            $image_name='Identifiers-'.time().'.'.$request->image->extension();
            $request->image->storeAs('public/Identifiers',$image_name);   
            if($identifier->image)
            {
                Storage::delete('public/Identifiers'.$identifier->image);
            }
            else
            {
                $image_name=$identifier->image;
            }
            
        }
        $identifier->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$image_name,
            'role'=>$request->role,
            ]); 

            return $this->index();
    }
    public function destroy(Request $request,Identifier $identifier)
    {
        //  return $program->id;
        $identifier=Identifier::where('id',$identifier->id)->first();
        //return $program;
        $identifier->delete();
        return redirect()->route('ShowActPro')->with([
            'message' => 'Program delete successfully',
            'alert-type' => 'success',
        ]);
        return $this->index();

    }

}
