<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coach;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Course;
use App\Notifications\RequestCoachNotify;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Proposal;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class CoachController extends Controller 
{
    public function CoachesOrder()
    {
        $coaches=Coach::where('trainAuthorized','0')->latest()->paginate(5);
        //return $coach;u
        return view('Admin.Coaches.orders')->with('coaches',$coaches);
    }
    public function index()
    {

        $coaches=Coach::where('trainAuthorized','1')->latest()->paginate(5);   //desc
        //return $coach;
        return view('Admin.Coaches.index')->with('coaches',$coaches);
    }

    public function destroy(Coach $coach)
    {
        
        $coach=Coach::where('id',$coach->id)->first();
        if($coach->trainAuthorized='0')
        {
            $coach->delete();
            return $this->orders();
        }
        else
        {
            $coach->delete();
            return $this->index();
        }
     
        return redirect()->route('coaches.index')->with([
            'message' => 'Coach delete successfully',
            'alert-type' => 'success',
        ]); 
    }
    public function AcceptRequest($id)
    {  
         $coach=Coach::find($id)->update(['trainAuthorized'=>'1','accept_date'=>carbon::now()]);
          $coach=Coach::where('id',$id)->first();
           $pass='coach'.random_int(1999999999,9999999999);
           $user=User::create([
            'username'=> $coach->username,
            'role'=> '2', 
            'email'=>$coach->email,
            'password'=> bcrypt($pass),
            'c_password'=>bcrypt($pass),
        ]);
        $user=User::where('email',$coach->email)->first();
        $user->notify(new RequestCoachNotify($user,$pass));
        $role=Role::where('name','Coache')->first();
        $user->assignRole([$role->id]);
         return redirect()->route('Orders.coach')->with([
            'message' => 'Request Accept successfully and send notify',
            'alert-type' => 'success',
        ]);

    }
    public function ConfirmRequest(Request $request,Coach $coach)
    {
        $user=User::create([
            'email'=>$coach->email,
            'username'=>$request->username,
            'password'=>$request->password,
            'c_password'=>$request->c_password,
            'role'=>'2']);
            return redirect()->route('Courses.index')->with([
                'message' => 'Confirmed Coaches',
                'alert-type' => 'success',
            ]);
    }
    public function RefuseRequest($id)
    {
        $coach=Coach::findOrFail($id);
        $coach->delete();
    }
    
    public function show(Coach $coach)
    {
        $coach=Coach::where('id',$coach->id)->get();
        return $coach;
        return view('Admin.Coaches.show',compact('coach'));
    }
    public function showCV($id)
    {
        
        $coach=Coach::select('cvFile')->where('id',$id)->get();
        foreach($coach as $cv)
        {
        $path='storage/CoachesCV/'.$cv->cvFile;
        return Response::download($path);
        }
     
    }
    public function downCV($id)
    {
        $file_name=Coach::select('cvFile')->where('id',$id)->get();
        foreach($file_name as $file)
        {
            $path=public_path().'/storage/CoachesCV/'.$file->cvFile;
        }
         return Response::download($path);
    }
    public function proposal()
    {
        $proposals=proposal::select('id','content','username','created_at')->latest()->paginate(5);
        return view('Admin.Coaches.proposals')->with('proposals',$proposals);

    }
    public function DetailsCoach($id)
    {
        // اسم المدرب - تاريخ قبوله - تقييمه
        //اسم الكورس التابع لهذا المدرب وتاريخ اضافة هذا الكورس 
       
       $coach=Coach::where('id',$id)->select('id','username','accept_date')->first();
      // return $coach->id;
       $courses=Course::where('coache_id',$id)->paginate(5);
     //  return dd($coach->Courses);
       return View('Admin.Coaches.Details')->with([
        'coach'=>$coach,
        'courses'=>$courses
       ]);

    }
}
