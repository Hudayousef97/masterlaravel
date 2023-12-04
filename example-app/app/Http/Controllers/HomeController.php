<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Contact;
use App\Models\Testimonial;

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
                $testimonial=Testimonial::where('status', '=','active')->get();


                return view('user.home',compact('doctor'),compact('service'),compact('testimonial'));
            } else{
                $data = User::all();

                $totaldoctor=Doctor::all()->count();

                $totalappoint=Appointment::where('status', 'Approved')->count();
                $totalappointcanceled=Appointment::where('status', 'Canceled')->count();
                $totalappointprogress=Appointment::where('status', 'In progress')->count();

                $totalservice=Service::all()->count();

                $totalcontact=Contact::all()->count();

                $totaluser=User::all()->count();
                return view('admin.home',compact('data','totaldoctor','totalappoint','totalservice','totalcontact','totaluser','totalappointcanceled','totalappointprogress'));
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
      $testimonial=Testimonial::where('status', '=','active')->get();

        return view('user.home',compact('doctor'),compact('service'),compact('testimonial'));
 }

  }



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
        $service = Service::all();

        return view('front.quote',compact('doctor','service',));

    }
    public function getTestimonial ()  {
        $doctor = Doctor::all();
        $service = Service::all();
        $testimonial=Testimonial::where('status', '=','active')->get();
        return view('front.testimonial',compact('doctor','service','testimonial'));

    }

    public function appointment(REQUEST $request){

        $data= new appointment ;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->time=$request->time;

        $data->phone=$request->number;
        $data->speciality=$request->speciality;

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


public function showContactForm()
{
    return view('front.contact');
}


public function submitContactForm(Request $request)
{

    $data= new contact ;

    $data->name=$request->name;
    $data->email=$request->email;
    $data->subject=$request->subject;
    $data->message=$request->message;

    $data->save();

           return redirect('home')->with('message','Message Request Successfully. We Will Contact With You Soon ');



}




public function Testimonial(REQUEST $request){

    $data= new Testimonial() ;

    $data->name=$request->name;
    $data->email=$request->email;
    $data->service=$request->service;
    $data->doctor=$request->doctor;
    $data->date=$request->date;
    $data->time=$request->time;
    $data->message=$request->message;
    $data->status='In progress';
    $data->save();

           return redirect('home')->with('message','Thank you for providing feedback. We appreciate your efforts in sharing your thoughts and helping us improve our services.');

}

}
