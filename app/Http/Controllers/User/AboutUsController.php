<?php

namespace App\Http\Controllers\User;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $about=AboutUs::get();
    return view('User.Aboutus.index');
    //   return $about;
    }
}