<?php

namespace App\Http\Controllers\Admin;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Request\DocumentsRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\User;
use App\Models\Department;
use Auth;
use File;
use Validator;
class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents=Document::latest()->paginate(5);
        return view('Admin.Documents.index',compact('documents'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        $departments=Department::all();
        return view('Admin.Documents.create')->with([
            'users'=>$users,
            'departments'=>$departments,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $image_name='doc-'.time().'.'.$request->docFile->extension();;
            $request->docFile->storeAs('public/Documents',$image_name);    
           $Document=Document::create([
           'name'=>$request->name,
           'docTypes' =>$request->docType,
           'docDate'=>Carbon::now(),
           'description'=>$request->description,
           'fileIcon'=>'null',
         //  'type_id'=>$request->type_id,
           'user_id'=>$request->user_id,
           'department_id'=>$request->department_id,
           'docFile'=>$image_name,
        ]);
    return redirect()
    ->route('documents.index')
    ->with('success', 'Document added succesfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        $document=Document::get('document');
        return view('Admin.Documents.show',compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        return view('Admin.Documents.edit',compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentsRequest $request, Document $document)
    {
        $validated = $request->validated();
        $document=Document::find($document->id)->get();
        
        if($request->hasFile('docFile'))
        {
            if($document->docFile)
            {
                $old_path=public_path().'uploads/Documents/'.$document->docFile;
                if(File::exists($old_path))
                {
                    File::delete($old_path);
                }
                $doc=$request->docFile;
            
            $file_name=$doc->getClientOriginalName().'_'.$request->name.'.'.$doc->extension();
            $doc->move(public_path('uploads/Documents'),$file_name);
            }

        else
        {
            $file_name=$document->DocFile;
        }
    }


        $document->update([
            'name'=>$request->name,
            'docTypes' =>$request->docType,
            'docDate'=>Carbon::now(),
            'description'=>$request->description,
            'type_id'=>$request->type_id,
            'user_id'=>$request->user_id,
            'department_id'=>$request->department_id,
            'docFile'=>$file_name,
         ]);
         return redirect()->route('documents.index')->with([
            'message' => 'Document update successfully',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
   //     $document=Document::findOrFail($document->id);
        $document->delete();
        return redirect()->route('documents.index')->with([
            'message' => 'Document delete successfully',
            'alert-type' => 'success',
        ]);
    }

    public function ShowActDoc()
    {
        $documents=Document::where('forpublish','1')->get();
        return view('Admin.Documents.actived',compact('document'));
    }
    public function showDisDoc()
    {
        $documents=Document::where('forpublish','1')->get();
        return view('Admin.Documents.disabled',compact('document'));
    }
    public function DisDoc($id)
    {
        $documents=Document::findOrFail($id)->update(['forpublish'=>'0']);
        return redirect()->route('ShowDisDoc')
        ->with('success', 'Document disabled!');
    }
    public function ActDoc($id)
    {
        $documentts=Document::findOrFail($id)->update(['forpublish'=>'1']);
        return redirect()->route('ShowActDoc')
        ->with('success', 'Document actived!');
    }
    public function downFile($id)
    {
        $file_name=Document::select('docFile')->where('id',$id)->get();
        foreach($file_name as $file)
        {
            $path=public_path().'/storage/Documents/'.$file->docFile;
        }
        
         return Response::download($path);
    }

}
