<?php

namespace App\Http\Controllers\User;

use App\Models\Partner;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\PartCourses;
use App\Http\Controllers\Controller;
use App\Models\PartnerCoursesOrder;
use App\Models\PartnerCourses;
use App\Models\Contact;
use App\Models\AboutUs;
use App\Models\Course;
use App\Models\User;
use Auth;
class PartnerController extends Controller
{
    public function request()
    {
        return view('User.Orders.requestformPartner');
    }
    public function sendrequest(Request $request)
    {
        //problem in form enctype="multipart/form-data">
      //  $input = $request->all();
      //  $validated =$PartnersRequest->validated();
      $image_name='TeamLogo'.'.'.$request->logoUrl->getClientOriginalExtension();

          $image_name='partner_logo-'.time().'.'.$request->logoUrl->getClientOriginalExtension();
          $request->logoUrl->storeAs('public/Partners',$image_name);
    
        $Partner=Partner::create([
            'name'=>$request->name,
            'desc'=>$request->desc,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'logoUrl'=>$image_name,
            'request_date'=>carbon::now(), 
        ]);
        
        return redirect()->route('welcome')->with([
            'message' => 'Request send successfully',
            'alert-type' => 'success',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $partners=Partner::where('status','1')->latest()->paginate(5);
        return view('User.Partners.index',compact('partners'));
    }

    public function requestCourse(Request $request)
    {
            $user=Auth::user();
            PartnerCoursesOrder::create([
                'PartnerName'=>$user->username,
                'CourseDesc'=>$request->course_id,
                'note'=>$request->note,
            ]);
            return redirect()->route('welcome')->with([
                'message' => 'RequestCourse send successfully',
                'alert-type' => 'success',
            ]);
    }
    public function DetailsPartner()
    {
        
        $user=Auth::user(); 
        $contacts=Contact::first();
        $courses=Course::all();
        $aboutUs=AboutUs::first();
        $PartnerCourses=PartnerCourses::where('PartnerName',$user->username)->select('CourseDesc','created_at')->latest()->paginate(5);
        return view('PartnerDetails',compact('PartnerCourses','user','aboutUs','contacts','courses'));
    }
   
}
