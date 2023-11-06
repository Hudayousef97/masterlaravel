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

      <div class="container-fluid page-body-wrapper">


<div class="container" align="center" style="padding-top:100px;">

    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            x
        </button>
        {{ session()->get('message') }}
    </div>
@endif


    <form action="{{url('upload_service')}}" method="POST" enctype="multipart/form-data">
    @csrf
   <div style="padding:15px">
<label>Service Name</label>
<input type="text"style="color:black;" name="names" placeholder="Write the name" required="">

</div>


<div style="padding:15px">
    <label>Discreption</label>
    <input type="text"style="color:black;" name="discreption" placeholder="Write the number"required="">

    </div>



<div style="padding:15px">
    <label>Price</label>
    <input type="text"style="color:black;" name="price" placeholder="Write the speciality"required="">

    </div>


            <div style="padding:15px">
                <label>Service Image</label>
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
