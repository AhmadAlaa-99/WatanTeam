<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;
use App\Models\Course;
use App\Models\User;
use Carbon\Carbon;
use Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\RequestPartnerNotify;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\PartCourses;
use App\Models\PartnerCoursesOrder;
use App\Models\PartnerCourses;
class PartnerController extends Controller
{
    public function show()
    {
        return 'k';
    }
    public function PartnersOrder()
    {
        $partner=Partner::where('status','0')->select('id','name','desc','email','phone','logoUrl','request_date')->latest()->paginate(5);
        return view('Admin.partners.orders')->with('partners',$partner);
    } 
    public function AcceptRequest($id)
    {
        $partner=Partner::find($id)->update(['status'=>'1','accept_date'=>carbon::now()]);
        $partner=Partner::where('id',$id)->first();
        $pass='partner'.random_int(1999999999,9999999999);
        $user=User::create([
        'username'=>$partner->name,
        'role'=> '3', 
        'email'=>$partner->email,
        'password'=> bcrypt($pass),
        'c_password'=>bcrypt($pass),
        ]); 
        $user=User::where('email',$partner->email)->first();
       $user->notify(new RequestPartnerNotify($user,$pass));
          $role=Role::where('name','Partner')->first();
          $user->assignRole([$role->id]);
          return redirect()->route('partners.orders')->with([
            'message' => 'Request Accept successfully and send notify',
            'alert-type' => 'success',
        ]);
    }
    public function RefuseRequest($id)
    {
        $partner=Partner::findOrFail('id');
        $partner->delete();
    }
    public function index()
    {
        $partners=Partner::where('status','1')->select('id','name','desc','email','phone','logoUrl','accept_date')->latest()->paginate(5);
        return view('Admin.Partners.index')->with([
            'partners'=>$partners,
        ]);
    }
    public function destroy(Partner $partner)
    {
        $partner=Partner::where('id',$partner->id)->first();
        if($partner->status='0')
        {
            $partner->delete();
            return $this->PartnersOrder();
        }
        else
        {
            $partner->delete();
            return $this->index();
        }
    }
    public function CoursesPartnerOrders()
    {
        // name partner    name course    accept    refuse
     //   return 'عرض الطلبات كالتالي : اسم الشركة - اسم الكورس - تاريخ الطلب - العمليات  قبول او رفض ';
       $PartnerCoursesOrder=PartnerCoursesOrder::select('id','PartnerName','CourseDesc','created_at')->latest()->paginate(5);
       return view('Admin.Partners.courseOrder')->with([
        'PartnerCoursesOrder'=>$PartnerCoursesOrder,
    ]);
   }
    public function AcceptCourse($id)
    {
        // name partner    name course    accept    refuse
       $partCourse=PartCourses::where('id',$id)->update(['accept_date'=>Carbon::now(),'accept'=>'1']);
      $PartnerName=Partner::where('id',$partCourse->pluck('partner_id'))->pluck('name');
      $CourseDesc=Course::where('id',$partCourse->pluck('course_id'))->pluck('desc');
      PartnerCourses::create(['PartnerName'=>$PartnerName,'$CourseDesc'=>$CourseDesc]);
       return $this->CoursesPartnerOrders();
    }

    public function RefuseCourse($id)
    {
        // name partner    name course    accept    refuse
       $partCourse=PartCourses::where('id',$id)->delete();
       return $this->CoursesPartnerOrders();

    }
    public function DetailsPartner($id)
    {
        // تاريخ قبول الشركة اي بداية العقد - اسم الشركة 
        // قائمة بالكورسات المستفاد منها :
        // قائمة بطلبات الشركة : 
        // اسم الكورس   تاريخ القبول او الطلب 
        $user=User::where('id',$id)->first();
        $partner=Partner::where('email',$user->email)->select('name','accept_date')->latest()->paginate(5);
        $PartnerCourses=PartnerCourses::where('PartnerName',$user->username)->select('CourseDesc','created_at')->latest()->paginate(5);
        $PartnerCoursesOrder=PartnerCoursesOrder::where('PartnerName',$user->username)->select('CourseDesc','created_at')->latest()->paginate(5);
        return view('Admin.Partners.Details')->with([
            'partner'=>$partner,
            'PartnerCourses'=> $PartnerCourses,
            'PartnerCoursesOrder'=>$PartnerCoursesOrder,
        ]);
    }
}
