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
                        <th style="padding: 10px;font-size:20px;">Customer Name  </th>
                        <th style="padding: 10px;font-size:20px;"> Email </th>
                        <th style="padding: 10px;font-size:20px;"> Phone </th>
                        <th style="padding: 10px;font-size:20px;"> Doctor Name </th>
                        <th style="padding: 10px;font-size:20px;"> Date </th>
                        <th style="padding: 10px;font-size:20px;"> Message </th>
                        <th style="padding: 10px;font-size:20px;"> Status </th>
                        <th style="padding: 10px;font-size:20px;"> Approved </th>
                        <th style="padding: 10px;font-size:20px;"> Canceled </th>
                        <th style="padding: 10px;font-size:20px;"> Send Mail </th>



                    </tr>

               @foreach($data as $appoint)

                    <tr style="background-color:rgb(245,245,245) ;color:black;"  align="center">
                        <td style="padding: 10px;">{{$appoint->name}}</td>
                        <td style="padding: 10px;">{{$appoint->email}}</td>
                        <td style="padding: 10px;">{{$appoint->phone}}</td>
                        <td style="padding: 10px;">{{$appoint->doctor}}</td>
                        <td style="padding: 10px;">{{$appoint->date}}</td>
                        <td style="padding: 10px;">{{$appoint->message}}</td>
                        <td style="padding: 10px;">{{$appoint->status}}</td>
                        <td> <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
                        <td> <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a></td>
                        <td> <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a></td>


                    </tr>
                @endforeach

                </table>

            </div>


        </div>

    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>
