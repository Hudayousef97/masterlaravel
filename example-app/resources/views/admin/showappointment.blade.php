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
                    <h1 class="fs-1 text-black font-weight-bold" style="margin-top:3%;margin-right:2%" >Appointment </h1>
</div>
<br>
<hr>


            <div align="center" style="padding:100px;color:black;">
                <table style="border: 1px black solid" id="myDataTable">
                    <thead>
                    <tr style="background: linear-gradient(rgba(216, 170, 218, 0.7),rgba(53, 53, 53, .7));color:whitesmoke;">
                        <th style="padding: 10px;font-size:20px;text-align:center">Customer Name  </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Email </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Phone </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Doctor Name </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Date </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Time </th>

                        <th style="padding: 10px;font-size:20px;text-align:center"> Message </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Status </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Approved </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Canceled </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Send Mail </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Update </th>



                    </tr>
                    </thead>
                    <tbody>
               @foreach($data as $appoint)

                    <tr style="background-color:rgb(245,245,245) ;color:black;"  align="center">
                        <td style="padding: 10px;">{{$appoint->name}}</td>
                        <td style="padding: 10px;">{{$appoint->email}}</td>
                        <td style="padding: 10px;">{{$appoint->phone}}</td>
                        <td style="padding: 10px;">{{$appoint->doctor}}</td>
                        <td style="padding: 10px;">{{$appoint->date}}</td>
                        <td style="padding: 10px;">{{$appoint->time}}</td>

                        <td style="padding: 10px;">{{$appoint->message}}</td>
                        <td style="padding: 10px;">{{$appoint->status}}</td>
                        <td> <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
                        <td> <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a></td>
                        <td> <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a></td>
                        <td> <a class="btn btn-primary" href="{{url('updateappoint',$appoint->id)}}">Update</a> </td>


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
