<?php

namespace App\Http\Controllers;
use App\Models\AboutUs;
use App\Models\Activity;
use App\Models\Partner;
use App\Models\Contact;
use App\Models\Program;
use App\Models\Course; 
use App\Models\Team;
use App\Models\News;
use App\Models\Identifier;
use App\Models\Image;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    { 
      $aboutUs=AboutUs::first();
      $partners=Partner::select('id','logoUrl')->latest()->paginate(5);
      $programs=Program::where('active','1')->select('id','name','goals','audince','topics','imageUrl','active','note','cat_id','created_at')->with('cats')->take(3)->get();
      $activities=Activity::select('name','pubDate', 'imageUrl','published','note','created_at','program_id')->with('programs')->take(3)->get();
      $courses=Course::select('coache_id','type_id','desc','note','imageUrl','created_at')->with('Coach','types')->with('Coach')->take(3)->get();
      $identifiers=Identifier::select('id','name','email','image','role')->latest()->paginate(5);
      $contacts=Contact::first();
      $images=Image::all();
      $news=News::select('id','content','created_at')->take(6)->get();
      $media1=Image::where('id','1');
      $media2=Image::where('id','2');
      $media3=Image::where('id','3');
      $media4=Image::where('id','4');
      $media5=Image::where('id','5');
      $media6=Image::where('id','6');
      $media7=Image::where('id','7');
      $media8=Image::where('id','8');
      $array=[$media1,$media2,$media3,$media4,$media5,$media6,$media7,$media8];
      
      
        //$activities=Activity::where('active','1')->get();
        return view('welcome')
        ->with([            //compact error
          'aboutUs'=>$aboutUs,
          'programs'=>$programs,
          'activities'=>$activities,
          'courses'=>$courses,
          'partners'=>$partners,
          'identifiers'=>$identifiers,
          'contacts'=>$contacts,
          'news'=>$news,
          'media'=>$array,
          'images'=>$images,
        ]);
        
    }
    
    
}
