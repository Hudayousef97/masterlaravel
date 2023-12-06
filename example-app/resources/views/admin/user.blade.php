<!DOCTYPE html>
<html lang="en">
  <head>
@include ('admin.css')

    </head>
  <body >
    <div class="container-scroller" >

      <!-- partial:partials/_sidebar.html -->
      @include ('admin.sidebar')


      @include ('admin.navbar')

        <!-- partial -->
        <div>
            <h1 class="fs-1 text-black font-weight-bold" style="margin-top:3%;margin-right:2%" >Appointment </h1>
</div>
<br>
<hr>
            <div align="center" style="padding:200px;color:black;font-size:large">
                <table  style="border: 1px black solid" id="myDataTable" >
                    <thead>
                    <tr style="background: linear-gradient(rgba(216, 170, 218, 0.7),rgba(53, 53, 53, .7));color:whitesmoke;">
                        <th style="padding: 10px;font-size:20px;">User Name  </th>
                        <th style="padding: 10px;font-size:20px;"> Email</th>
                        <th style="padding: 10px;font-size:20px;">Phone </th>
                        <th style="padding: 10px;font-size:20px;"> Address </th>
                        <th style="padding: 10px;font-size:20px;"> User-type </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Delete </th>
                        <th style="padding: 10px;font-size:20px;"> Update </th>



                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $User)

                    <tr style="background-color:rgb(245,245,245) ;color:black;"  align="center">
                        <td style="padding: 10px;">{{ $User->name}}</td>
                        <td style="padding: 10px;">{{ $User->email}}</td>
                        <td style="padding: 10px;">{{ $User->phone}}</td>
                        <td style="padding: 10px;">{{ $User->address}}</td>
                        <td style="padding: 10px;">{{ $User->usertype}}</td>
                        <td> <a class="btn btn-danger" onclick="return confirm('are you sure to delete this')"  href="{{url('deleteUser',$User->id)}}">Delete</a> </td>
                        <td> <a class="btn btn-primary" href="{{url('updateUser',$User->id)}}">Update</a> </td>



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
