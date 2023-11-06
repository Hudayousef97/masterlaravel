<?php

namespace App\Http\Controllers;
use Notification;
use App\Notifications\MyFirstNotification;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Appointment;
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

//   public function upload(Request $request){

// $doctor= new doctor;
// $image= $request->file;
// $imagename=time().'.'.$image->getClientOriginalExtension();

// $request->file->move('doctorimage',$imagename);
// $doctor->image=$imagename;
// $doctor->name =$request->name;
// $doctor->phone =$request->number;
// $doctor->room =$request->room;
// $doctor->speciality =$request->speciality;

// $doctor->save();
// return redirect()->back()->with('message','Doctor Add Successfully');

//   }
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

public function canceled($id) {

    $data=appointment::find($id);
    $data->status='Canceled';
    $data->save();
    return redirect()->back();


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

    return redirect()->back()->with('message', 'Doctor Added Successfully');
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

}
