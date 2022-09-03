<?php

namespace App\Http\Controllers\User;

use App\Models\Coach;
use App\Models\User;
use App\Models\Contact;
use App\Models\AboutUs;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\CoachRequest;
use Carbon\Carbon;
use App\Models\proposal;
use Illuminate\Support\Facades\Storage;
use File;
use Auth;
use Validator;
class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 

    public function index()
    {
        $coaches=Coach::where('aprove','1')->latest()->paginate(5);
        return view('User.Coaches.index',compact('coaches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        $partner=Partner::find('coach')->get();
        return view('User.Coaches.show',compact('coach'));
    }

    public function request()
    {
        return view('User.Orders.requestformCoach');
    }
    public function sendrequest(Request $request)
    {     
        try{
        if($request->hasFile('cvFile'))
      {
          
          $cv_name='coaches_cv-'.time().'.'.$request->cvFile->extension();
          $request->cvFile->storeAs('public/CoachesCV',$cv_name);
          $input['cvFile']=$cv_name;
      }
        else
        {  
            $cv_name='null';      
        }


       $coach=Coach::create([
        'username'=>$request->username,
        'job'=>$request->job, 
        'address'=>$request->address,
        'gender'=>$request->gender,
        'email'=>$request->email,
        'request_date'=>Carbon::now(),
        'accept_date'=>Carbon::now(),
        'note'=>$request->note,
        'qualification'=>$request->qualification,
        'cvFile'=>$cv_name,
       ]);
    }
    catch (\Exception $e){
      //  return $e->firstMessage();
     return redirect()->back()->withErrors(['error' => $e->firstMessage()->first()]);  
    }
        //   UPLOAD cv
        return redirect()->route('welcome')->with([
            'message' => 'Request send successfully',
            'alert-type' => 'success',
        ]);
    }
    public function Register($coach)
    {
        $user=User::create([
            'email'=>$coach->email,
            'username'=>$request->username,
            'password'=>$request->password,
            'c_password'=>$request->c_password,
            'role'=>'2']);
            return redirect()->route('welcome')->with([
                'message' => 'you Coach',
                'alert-type' => 'success',
            ]);

    }
    //private Coach User 2
    protected function MyCoursesCo()
    {
        $user=User::Auth()->get('email');;
        $courses=Coach::where('email',$user->email)->with('Courses');
        return view('User.Coaches.index',compact('courses'));
    }
    public function proposal(Request $request)
    {
       $user=Auth::user();
       $proposal=Proposal::create([
        'content'=>$request->content,
        'username'=>$user->username,
       ]);
       return redirect()->route('welcome')->with([
        'message' => 'done proposal',
        'alert-type' => 'success',
    ]);
    }
    protected function CoacheDetails()
    {
        
        
        $user=Auth::user();
        $coach=Coach::where('email',$user->email)->select('id','username','accept_date')->with('Courses')->first();
        $contacts=Contact::first();
        $courses=Course::all();
        $aboutUs=AboutUs::first();
         return view('CoacheDetails',compact('user','coach','contacts','aboutUs','courses'));
    }
    
}
