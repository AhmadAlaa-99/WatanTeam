<?php

namespace App\Http\Controllers\User;

use App\Models\Number;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // cources partners activities programs 
         $numbers=DB::table('numbers')->select('name','value');
         return view('User.index',compact('numbers'));
    }
}
