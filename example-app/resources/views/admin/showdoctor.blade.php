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
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding:100px;">
                <table style="border: 1px black solid">
                    <tr style="background: linear-gradient(rgba(216, 170, 218, 0.7),rgba(53, 53, 53, .7));color:whitesmoke;">
                        <th style="padding: 10px;font-size:20px;">Doctor Name  </th>
                        <th style="padding: 10px;font-size:20px;"> Phone </th>
                        <th style="padding: 10px;font-size:20px;"> Speciality </th>
                        <th style="padding: 10px;font-size:20px;"> Room No </th>
                        <th style="padding: 10px;font-size:20px;"> Image </th>
                        <th style="padding: 10px;font-size:20px;"> Delete </th>
                        <th style="padding: 10px;font-size:20px;"> Update </th>



                    </tr>

                    @foreach($data as $doctor)

                    <tr style="background-color:rgb(245,245,245) ;color:black;"  align="center">
                        <td style="padding: 10px;">{{$doctor->name}}</td>
                        <td style="padding: 10px;">{{$doctor->phone}}</td>
                        <td style="padding: 10px;">{{$doctor->speciality}}</td>
                        <td style="padding: 10px;">{{$doctor->room}}</td>
                        <td style="padding: 10px;"><img width="100" height="100" src="doctorimage/{{$doctor->image}}" > </td>
                        <td> <a class="btn btn-danger" onclick="return confirm('are you sure to delete this')"  href="{{url('deletedoctor',$doctor->id)}}">Delete</a> </td>
                        <td> <a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a> </td>


                    </tr>
                @endforeach



                </table>








            </div>



        </div>

    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>
