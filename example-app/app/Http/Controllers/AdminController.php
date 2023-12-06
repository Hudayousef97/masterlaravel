<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Notification;


use App\Notifications\MyFirstNotification;
use App\Notifications\MySecondNotification;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\User;

use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function addview()
  {
if(Auth::id())
{
    if(Auth::user()->usertype==1)
    {
        return view('admin.add_doctor');

    }
    else{
        return redirect()->back();
    }
}
else{
    return redirect('login');
}
  }


public function upload(Request $request){
    $doctor = new Doctor;

    if ($request->hasFile('file')) {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('doctorimage', $imageName);
        $doctor->image = $imageName;
    }

    $doctor->name = $request->input('name');
    $doctor->phone = $request->input('number');
    $doctor->room = $request->input('room');
    $doctor->speciality = $request->input('speciality');

    $doctor->save();

    return redirect()->back()->with('message', 'Doctor Added Successfully');
}

public function showappointment(){
    if(Auth::id())
    {
        if(Auth::user()->usertype==1)
        {
$data=appointment::all();

    return view('admin.showappointment',compact('data')) ;
}
else
{
    return redirect()->back();
}
    }
    else
    {
return redirect('login');
    }
}


public function approved($id) {

    $data=appointment::find($id);
    $data->status='Approved';
    $data->save();
    return redirect()->back();

}

public function approvedfeedback($id) {

    $data=Testimonial::find($id);
    $data->status='Approved';
    $data->save();
    return redirect()->back();

}

public function canceled($id) {

    $data=appointment::find($id);
    $data->status='Canceled';
    $data->save();
    return redirect()->back();


}
public function updateappoint($id){

    $data=Appointment::find($id);

    return view('admin.updateappoint',compact('data'));
}

public function editappoint (Request $request,$id){

    $appoint=Appointment::find($id);

    $appoint->name=$request->name;
    $appoint->email=$request->email;


    $appoint->phone=$request->phone;

    $appoint->doctor=$request->doctor;

    $appoint->date=$request->date;

    $appoint->time=$request->time;




    $appoint->save();
    return redirect()->back()->with('message', 'Appointment Details Updated Successfully');
}


public function showdoctor(){

$data=doctor::all();


return view('admin.showdoctor', compact('data')) ;

}


public function deletedoctor($id) {

    $data=doctor::find($id);
    $data->delete();

    return redirect()->back()->with('message','Email send is successful');


}

public function updatedoctor($id){

    $data=doctor::find($id);

    return view('admin.update_doctor',compact('data'));
}

public function editdoctor (Request $request,$id){

    $doctor=doctor::find($id);

    $doctor->name=$request->name;

    $doctor->phone=$request->phone;

    $doctor->speciality=$request->speciality;

    $doctor->room=$request->room;

     $image=$request->file;

     if($image){

    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->file->move('doctorimage',$imagename);
    $doctor->image=$imagename;
     }

    $doctor->save();
    return redirect()->back()->with('message', 'Doctor Details Updated Successfully');
}

public function emailview($id){

    $data=appointment::find($id);

    return view('admin.email_view',compact('data'));
}


public function sendemail(Request $request,$id) {
    $data = appointment::find($id);
   $details=[
    'greeting' => $request->greeting,
    'body'=> $request->body,
    'actiontext'=> $request->actiontext,
    'actionurl'=> $request->actionurl,
    'endpart'=> $request->endpart


   ];
   Notification::send($data,new MyFirstNotification($details));

return redirect()->back();

}


public function addservice()
  {
if(Auth::id())
{
    if(Auth::user()->usertype==1)
    {
        return view('admin.add_service');

    }
    else{
        return redirect()->back();
    }
}
else{
    return redirect('login');
}
  }



  public function uploadservice(Request $request){
    $sevice = new Service;

    if ($request->hasFile('file')) {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('serviceimage', $imageName);
        $sevice->image = $imageName;
    }

    $sevice->names = $request->input('names');
    $sevice->discreption  = $request->input('discreption');
    $sevice->price = $request->input('price');

    $sevice->save();

    return redirect()->back()->with('message', 'Service Added Successfully');
}
public function showservice(){

    $data=Service::all();


    return view('admin.showservice', compact('data')) ;

    }

    public function deleteservice($id) {

        $data=Service::find($id);
        $data->delete();

        return redirect()->back()->with('message','Email send is successful');


    }

    public function updateservice($id){

        $data=Service::find($id);

        return view('admin.update_service',compact('data'));
    }

    public function editservice (Request $request,$id){

        $service=Service::find($id);

        $service->names=$request->names;

        $service->discreption=$request->discreption;

        $service->price=$request->price;


         $image=$request->file;

         if($image){

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('serviceimage',$imagename);
        $service->image=$imagename;
         }

        $service->save();
        return redirect()->back()->with('message', 'Service Details Updated Successfully');
    }


public function userindex(){
    $data=User::all();


    return view('admin.user', compact('data')) ;


}
public function userindexhome(){
    $data=User::all();


    return view('admin.body', compact('data')) ;


}


public function deleteUser($id) {

    $data=User::find($id);
    $data->delete();

    return redirect()->back()->with('message','Delete User is successfully');


}


public function updateUser($id){

    $data=User::find($id);

    return view('admin.updateUser',compact('data'));
}

public function editUser (Request $request,$id){

    $data=User::find($id);

    $data->name=$request->name;

    $data->email=$request->email;

    $data->phone=$request->phone;

    $data->address=$request->address;
    $data->usertype=$request->usertype;




    $data->save();
    return redirect()->back()->with('message', 'User Details Updated Successfully');
}


public function showcontact(){

    $data=Contact::all();


    return view('admin.showcontact', compact('data')) ;

    }

    public function emailview2($id){

        $data=Contact::find($id);

        return view('admin.email_view2',compact('data'));
    }
    public function sendemail2(Request $request,$id) {
        $data = Contact::find($id);
       $details=[
        'greeting' => $request->greeting,
        'body'=> $request->body,
        'actiontext'=> $request->actiontext,
        'actionurl'=> $request->actionurl,
        'endpart'=> $request->endpart


       ];
       Notification::send($data,new MySecondNotification($details));

    return redirect()->back();

    }

    public function deleteContact($id) {

        $data=Contact::find($id);
        $data->delete();

        return redirect()->back()->with('message','Delete Contact is successfully');


    }

    public function showtestimonial(){

        $data=Testimonial::all();


        return view('admin.showTestimonial', compact('data')) ;

        }


        public function accept($id){

            $data=Testimonial::find($id);
            $data->status='active';
            $data->save();
            return redirect()->back()->with('message', 'Status Changed To Active ');
        }


        public function reject($id){

            $data=Testimonial::find($id);
            $data->status='reject';
            $data->save();
            return redirect()->back()->with('message', 'Status Changed To Reject ');
        }


}
