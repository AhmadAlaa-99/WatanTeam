<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProgramCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProgramCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        $cats=ProgramCat::select('name')->latest()->paginate(5);
        return view('Admin.Cats.index',compact('cats'));
     }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Cats.create');
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
            $cat=Cat::create(['name'=>$request->name]);
            return redirect()->route('cats.index')->with([
                'message' => 'Cat created successfully',
                'alert-type' => 'success',
            ]);
        }
        
    public function destroy(Cat $cat)
    {
        $cat=Cat::findOrFail('cat');
        $cat->delete();
        return redirect()->route('cats.index')->with([
            'message' => 'Cat delete successfully',
            'alert-type' => 'success',
        ]);
    }
}
