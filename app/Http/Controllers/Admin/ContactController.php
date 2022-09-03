<?php

namespace App\Http\Controllers\Admin;
use App\Models\Contant;
USE App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use File;

class ContactController extends Controller
{
   

    public function index()
    {
                $contact= Contact::first();
                return view('Admin.Contacts.index',compact('contact'));
    }
    public function edit()
    {
        $contact=Contact::first();
        return view('Admin.Contacts.edit')->with([
            'contact'=>$contact,
        ]); 
    }


    public function update(Request $request)
    {
        $contact=Contact::first();        
        
            $validator=Validator::make($request->all(),
            [ 
            'email'=>'required',
            'phone'=>'required',
            'facebook'=>'required',
            'insta'=>'required',
            'twitter'=>'required',
            'youtube'=>'required',
            'telegram'=>'required',
            'skype'=>'required',
            'linkedin'=>'required',
           ]);
            if ($validator->fails())
             {
                return $this->sendError('validation error', $validator->errors());
              }          
                $contact->update([
                    'email'=>$request->email,
                    'facebook'=>$request->facebook,
                    'insta'=>$request->insta,
                    'twitter'=>$request->twitter,
                    'youtube'=>$request->youtube,
                    'telegram'=>$request->telegram,
                    'skype'=>$request->skype,
                    'linkedin'=>$request->linkedin,
                ]);
                $contact->save();
                return $this->index();
            }
        
}
 