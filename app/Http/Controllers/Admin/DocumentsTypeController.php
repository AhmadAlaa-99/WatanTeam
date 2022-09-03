<?php

namespace App\Http\Controllers\Admin;

use App\Models\DocumentsType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DocumentsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=DocumentsType::select('name')->latest()->paginate(5);
        return view('Admin.Documents.Types.index',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Documents.Types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|string']);
            $type=DocumentsType::create(['name'=>$request->name]);
            return redirect()->route('DocumentsType.index')->with([
                'message' => 'Type created successfully',
                'alert-type' => 'success',
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DocumentsType  $documentsType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentsType $documentsType)
    {
        $type=DocumentsType::findOrFail($documentsType->id);
        $type->delete();
        //$documentsType->delete();
        return redirect()->route('DocumentsType.index')->with([
            'message' => 'type delete successfully',
            'alert-type' => 'success',
        ]);
    }
}
