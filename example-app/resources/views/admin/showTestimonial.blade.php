<!DOCTYPE html>
<html lang="en">
  <head>
@include ('admin.css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include ('admin.sidebar')


      @include ('admin.navbar')

        <!-- partial -->
        <div class="container mt-5">
            <div>
                <h1 class="fs-1 text-black font-weight-bold" style="margin-top:3%;margin-right:2%" >feedback </h1>

</div>
<br>
<hr>

@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">
        x
    </button>
    {{ session()->get('message') }}
</div>
@endif
            <div align="center" style="padding:100px;color:black">
                <table style="border: 1px black solid" id="myDataTable">
                    <thead>
                    <tr style="background: linear-gradient(rgba(216, 170, 218, 0.7),rgba(53, 53, 53, .7));color:whitesmoke;">
                        <th style="padding: 10px;font-size:20px;text-align:center">Customer Name  </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Email </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Service </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Doctor </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Date </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Time </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Message </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Status  </th>

                        <th style="padding: 10px;font-size:20px;text-align:center"> Status Accept </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Status Reject </th>



                    </tr>
                    </thead>
                    <tbody>
               @foreach($data as $testimonial)

                    <tr style="background-color:rgb(245,245,245) ;color:black;"  align="center">
                        <td style="padding: 10px;">{{ $testimonial->name}}</td>
                        <td style="padding: 10px;">{{ $testimonial->email}}</td>
                        <td style="padding: 10px;">{{ $testimonial->service}}</td>
                        <td style="padding: 10px;">{{ $testimonial->doctor}}</td>
                        <td style="padding: 10px;">{{ $testimonial->date}}</td>
                        <td style="padding: 10px;">{{ $testimonial->time}}</td>
                        <td style="padding: 10px;">{{ $testimonial->message}}</td>
                        <td style="padding: 10px;">{{ $testimonial->status}}</td>

                        <td> <a onclick="return confirm('Are you sure to accept this feedback ?') " class="btn btn-success" href="{{url('accept',$testimonial->id)}}">Accept</a></td>
                        <td> <a onclick="return confirm('Are you sure to reject this feedback ?')" class="btn btn-secondary" href="{{url('reject',$testimonial->id)}}">Reject</a></td>



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
