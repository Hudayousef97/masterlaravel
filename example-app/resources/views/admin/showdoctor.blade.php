<!DOCTYPE html>
<html lang="en">
  <head>
@include ('admin.css')

    </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include ('admin.sidebar')


      @include ('admin.navbar')

        <!-- partial -->
        <div class="container mt-5">
            <div>
                <h1 class="fs-1 text-black font-weight-bold" style="margin-top:3%;margin-right:2%" >Doctors </h1>
</div>
<br>
<hr>
            <div align="center" style="padding:100px;color:black">
                <table style="border: 1px black solid" id="myDataTable">
                    <thead>
                    <tr style="background: linear-gradient(rgba(216, 170, 218, 0.7),rgba(53, 53, 53, .7));color:whitesmoke;">
                        <th style="padding: 10px;font-size:20px;text-align:center">Doctor Name  </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Phone </th>
                        {{-- <th style="padding: 10px;font-size:20px;"> Speciality </th>
                        <th style="padding: 10px;font-size:20px;"> Room No </th> --}}
                        <th style="padding: 10px;font-size:20px;text-align:center"> Image </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Delete </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Update </th>



                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $doctor)

                    <tr style="background-color:rgb(245,245,245) ;color:black;"  align="center">
                        <td style="padding: 10px;">{{$doctor->name}}</td>
                        <td style="padding: 10px;">{{$doctor->phone}}</td>
                        {{-- <td style="padding: 10px;">{{$doctor->speciality}}</td>
                        <td style="padding: 10px;">{{$doctor->room}}</td> --}}
                        <td style="padding: 10px;"><img width="100" height="100" src="doctorimage/{{$doctor->image}}" > </td>
                        <td> <a class="btn btn-danger" onclick="return confirm('are you sure to delete this')"  href="{{url('deletedoctor',$doctor->id)}}">Delete</a> </td>
                        <td> <a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a> </td>


                    </tr>
                @endforeach


                    </tbody>
                </table>








            </div>



        </div>

    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>
