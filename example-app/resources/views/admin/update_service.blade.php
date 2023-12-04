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

        <!-- partial -->
        <div class="container mt-5">

            <div>
                <h1 class="fs-1 text-black font-weight-bold" style="margin-top:3%;margin-right:2%" >Update Service </h1>
    </div>
    <br>
    <hr>
    <br>



            <div class="container" align="center" style="padding-top:100px;">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif

              <form action="{{url('editservice',$data->id)}}" method="POST" enctype="multipart/form-data">

                @csrf
                 <div style="padding: 15px">
                    <label>Service Name</label>
                    <input type="text"style="color:black;" name="names" value="{{$data->names}}" placeholder="Write the name" required="">
                 </div>

                 <div style="padding: 15px">
                    <label>Discreption</label>
                    <input type="text"style="color:black;" name="discreption" value="{{$data->discreption}}" placeholder="Write the name" required="">
                </div>

                <div style="padding: 15px">
                    <label>Price</label>
                    <input type="text"style="color:black;" name="price" value="{{$data->price}}" placeholder="Write the name" required="">
                </div>



                 <div style="padding: 15px">
                    <label>Old Image</label>
                    <img height="150" width="150" src="serviceimage/{{$data->image}}">

                 </div>

                 <div style="padding:15px">
                    <label>Change Image</label>
                    <input type="file" name="file" >

                    </div>

                    <div style="padding:15px">
                        <input type="submit" class="btn btn-primary" >

                        </div>

              </form>

            </div>


        </div>

    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>
