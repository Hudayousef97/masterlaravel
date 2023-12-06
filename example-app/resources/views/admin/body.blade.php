<div class="main-panel" >
    <div class="content-wrapper" >
      <div class="row">
          <div class ="col-md-12 grid-margin">

              <div class;="me-md-3 me-xl-5">

                      <h1 class="fs-1 text-black font-weight-bold" >Dashboard </h1>

              </div>
         </div>
      </div>
      <hr>
    <br>
     {{-- admin.home.blade.php --}}



    <div class="container">
        <div class="row">

            <div class="col-sm-3 grid-margin ">
                <div class="card card-body mb-2"  style="background: linear-gradient(rgba(97, 50, 98, 0.7),rgba(165, 133, 133, 0.7));color:whitesmoke;">
                    <p class="fs-2" >Total User : {{ $totaluser }} </p>
                    <button type="button" class="btn btn-info btn-sm">   <a href="{{url('user')}}" class="text-white fs-3" >View</a></button>
                </div>
            </div>



            <div class="col-sm-3 grid-margin">
                <div class="card card-body mb-2"   style="background: linear-gradient(rgba(97, 50, 98, 0.7),rgba(165, 133, 133, 0.7));color:whitesmoke;">
                    <p class="fs-2">Total Doctors : {{ $totaldoctor }} </p>
                    <button type="button" class="btn btn-info btn-sm">   <a href="{{url('showdoctor')}}" class="text-white fs-3" >View</a></button>
                </div>
            </div>



            <div class="col-sm-3 grid-margin">
                <div class="card card-body mb-2"  style="background: linear-gradient(rgba(97, 50, 98, 0.7),rgba(165, 133, 133, 0.7));color:whitesmoke;">
                    <p class="fs-2">Total Service : {{ $totalservice }} </p>
                    <button type="button" class="btn btn-info btn-sm"> <a href="{{ url('showservice') }}" class="text-white fs-3" >View</a></button>
                </div>
            </div>

            <div class="col-sm-3 grid-margin">
                <div class="card card-body mb-2"   style="background: linear-gradient(rgba(97, 50, 98, 0.7),rgba(165, 133, 133, 0.7));color:whitesmoke;">
                    <p class="fs-2">Total Contact : {{ $totalcontact }} </p>
                    <button type="button" class="btn btn-info btn-sm">  <a href="{{url('showcontact')}}" class="text-white  fs-3">View</a></button>

                </div>
            </div>


            <div class="col-sm-3 grid-margin">

                <div class="card card-body   mb-2"  style="background: linear-gradient(rgba(97, 50, 98, 0.7),rgba(165, 133, 133, 0.7));color:whitesmoke;">
                    <p class="fs-2">Total Approved Appointment :{ {{ $totalappoint }} }</p>
                    <button type="button" class="btn btn-info btn-sm"> <a href="{{url('showappointment')}}" class="text-white  fs-3">View</a></button>
                </div>
            </div>


            <div class="col-sm-3 grid-margin">

                <div class="card card-body mb-2"  style="background: linear-gradient(rgba(97, 50, 98, 0.7),rgba(165, 133, 133, 0.7));color:whitesmoke;">
                    <p class="fs-2">Total Canceled Appointment :{ {{ $totalappointcanceled }} }</p>
                    <button type="button" class="btn btn-info btn-sm">  <a href="{{url('showappointment')}}" class="text-white  fs-3" >View</a></button>
                </div>
            </div>

            <div class="col-sm-3 grid-margin">

                <div class="card card-body mb-2"  style="background: linear-gradient(rgba(97, 50, 98, 0.7),rgba(165, 133, 133, 0.7));color:whitesmoke;">
                    <p class="fs-2">Total In Progress Appointment :{ {{ $totalappointprogress}} }</p>
                    <button type="button" class="btn btn-info btn-sm"> <a href="{{url('showappointment')}}" class="text-white  fs-3">View </a></button>
                </div>
            </div>


        </div>
        {{-- Add other content or sections as needed --}}
    </div>



      </div>






   



