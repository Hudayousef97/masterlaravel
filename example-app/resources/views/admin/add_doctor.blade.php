<!DOCTYPE html>
<html lang="en">
  <head>
<!-- Add these links to your HTML -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style type="text/css">
label{
    display:inline-block;
    width: 200px;
}


    </style>
@include ('admin.css')

    </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include ('admin.sidebar')


      @include ('admin.navbar')

      <div class="container mt-5">

        <div>
            <h1 class="fs-1 text-black font-weight-bold" style="margin-top:3%;margin-right:2%" >Add Doctor </h1>
</div>
<br>
<hr>
<br>

<div class="container" align="center" style="padding-top:100px;color:black;font-size:x-large">

    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            x
        </button>
        {{ session()->get('message') }}
    </div>
@endif


    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
    @csrf
   <div style="padding:15px">
<label>Doctor Name</label>
<input type="text"style="color:black;" name="name" placeholder="Write the name" required="">

</div>


<div style="padding:15px">
    <label>phone</label>
    <input type="number"style="color:black;" name="number" placeholder="Write the number"required="">

    </div>



{{-- <div style="padding:15px">
    <label>Speciality</label>
    <input type="text"style="color:black;" name="speciality" placeholder="Write the speciality"required="">

    </div>

        <div style="padding:15px">
            <label>Room No.</label>
            <input type="text"style="color:black;" name="room" placeholder="Write the room number">

            </div> --}}

            <div style="padding:15px">
                <label>Doctor Image</label>
                <input type="file" name="file" required="">

                </div>


            <div style="padding:15px">
                <input type="submit" class="btn btn-success" >

                </div>


</form>


</div>
      </div>

        <!-- partial -->
    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>
