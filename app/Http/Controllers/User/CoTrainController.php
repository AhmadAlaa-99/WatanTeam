<?php

namespace App\Http\Controllers\User;

use App\Models\User; 
use App\Models\Course;
use App\Models\CourseTrain;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Http\Controllers\Controller;
class CoTrainController extends Controller
{
    
    //PRIVATE User or trainer :4 5
    public function sendrequest($CourseID)
    { 
        $user=Auth::User();
        $user->update(['role'=>'4']);
        $course=Course::where('id',$CourseID)->get();
        $Co_Train=CourseTrain::create(['user_id'=>$user->id,'course_id'=>$CourseID]);
        return redirect()->route('welcome')->with([
            'message' => 'Request send successfully',
            'alert-type' => 'success',
        ]);
    }
    //PRIVATE TRAINER ROLE:4
    public function MyTnCources()
    {
        $user=Auth::user();
        $Courses=User::find($user->id)->with('courses');
        return view('User.Cources.index',compact('Courses'));

    }
}
