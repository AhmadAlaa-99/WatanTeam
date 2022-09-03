<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseTrain;
use Auth;
use Validator;
use App\Http\Controllers\Controller;
class CoTrainController extends Controller
{ 

    public function TrainerOrder()
    {
        $CoTrain=DB::table('course_trains')->where('accept','0')->select('user_id','course_id');
        $trainers=User::whereHas('Course')->get();
        //get all traines and course every them 
        return view('Admin.Orders.trainers')->with(['Trainers',$trainers]);
    }

    public function AcceptRequest($id)
    {
        $CoTrain=DB::table('course_trains')->where('id',$id)->update(['accept'=>'1','date_accept'=>carbon::now()]);
        $user=User::where('id',$CoTrain->get('user_id'))->get();
        $course=Course::where('id',$CoTrain->get('course_id'))->get();
        //send notify to mail
        $user->notify(new RequestTrainerNotify($course));
        return redirect()->route('Admin.Orders.trainers')->with([
            'message' => 'Request Accept successfully and send notify',
            'alert-type' => 'success',
        ]);
    }
        public function RefuseRequest($id)
        {
            $CoTrain=DB::table('course_trains')->where('id',$id)->delete();
            return redirect()->route('Admin.Orders.trainers')->with([
                'message' => 'Request Refuse successfully',
                'alert-type' => 'success',
            ]);
        }
        //show every course with trainer
    public function index()
    {
        $Courses=Course::load('Users')->get();
      //  $trainers=DB::table('course_trains')->where('accept','1')->get();
        return view('Admin.Trainers.index',compact('Courses'));
    }
}
