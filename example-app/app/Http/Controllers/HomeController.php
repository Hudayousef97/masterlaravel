<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Service;

use App\Models\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function redirect(){

        if (Auth::id())
        {
            if(Auth::user()->usertype=='0'){

                $doctor = Doctor::all();
                $service = Service::all();


                return view('user.home',compact('doctor'),compact('service'));
            } else{
                return view('admin.home');
            }

        } else {
                return redirect()->back();
            }
        }

    public function index()  {

        if (Auth::id())
        {
            return redirect('home');
        }
else{


      $doctor = Doctor::all();
      $service = Service::all();

        return view('user.home',compact('doctor'),compact('service'));
}}

    public function getTeam()  {
        $doctor = Doctor::all();

        return view('front.team',compact('doctor'));

    }
    public function getService()  {
        $service = Service::all();

        return view('front.service',compact('service'));

    }

    public function getQuote()  {
        $doctor = Doctor::all();

        return view('front.quote',compact('doctor'));

    }

    public function appointment(REQUEST $request){

        $data= new appointment ;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';
           if( Auth::id()){
        $data->user_id=Auth::user()->id;
           }
               $data->save();

               return redirect('home')->with('message','Appointment Request Successfully. We Will Contact With You Soon ');

    }



    public function myappointment(){

        if( Auth::id())
        {
            if(Auth::user()->usertype==0)
            {
                $userid=Auth::user()->id;
                $appoint=appointment::where('user_id',$userid)->get();

                return view('user.my_appointment',compact('appoint')) ;

            }




        }

        else
        {
        return redirect()->back() ;
    }}



public function cancel_appoint($id) {

$data=appointment::find($id);
$data->delete();
return redirect()->back();


}




}
