<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Add these links to your HTML -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<base href="/public">

<style type="text/css">
    label{
        display:inline-block;
        width: 250px;
    }


        </style>


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
                <h1 class="fs-1 text-black font-weight-bold" style="margin-top:3%;margin-right:2%" >Update Doctor </h1>
    </div>
    <br>
    <hr>



            <div class="container" align="center" style="padding-top:100px;font-size:x-large">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif

              <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">

                @csrf
                 <div style="padding: 10px">
                    <label>Doctor Name :</label>
                    <input type="text"style="color:black;" name="name" value="{{$data->name}}" placeholder="Write the name" required="">
                 </div>

                 <div style="padding: 10px">
                    <label>Doctor Phone :</label>
                    <input type="number"style="color:black;" name="phone" value="{{$data->phone}}" placeholder="Write the name" required="">
                </div>

                {{-- <div style="padding: 10px">
                    <label>Speciality :</label>
                    <input type="text"style="color:black;" name="speciality" value="{{$data->speciality}}" placeholder="Write the name" required="">
                </div>

                    <div style="padding: 10px">
                    <label>Room :</label>
                    <input type="text"style="color:black;" name="room" value="{{$data->room}}" placeholder="Write the name" required="">

                 </div> --}}

                 <div style="padding: 10px">
                    <label>Old Image :</label>
                    <img height="100" width="150" src="doctorimage/{{$data->image}}">

                 </div>

                 <div style="padding:10px">
                    <label>Change Image :</label>
                    <input type="file" name="file" >

                    </div>

                    <div style="padding:10px">
                        <input type="submit" class="btn btn-primary" >

                        </div>

              </form>

            </div>


        </div>

    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>
