<!DOCTYPE html>
<html lang="en">

{{-- Head --}}
@include('include.top')
{{-- Head --}}

<body>
     <!-- Spinner Start -->
     @include('include.spinner')
     <!-- Spinner End -->


     <!-- Top + Nav bar Start -->
     @include('include.bar')
     <!-- Top + Nav bar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol style="display:flex;font-size:30px">
                    <li class="breadcrumb-item"><a class="text-black" href="home">Home/</a></li>
                    <li class="breadcrumb-item"><a class="text-black" href="#">Pages/</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Feedback</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Feedback Customer</h1>
            </div>
            <br>
            <div class="owl-carousel testimonial-carousel">
                @foreach($testimonial as $testimonials)
                <div class="testimonial-item text-center" >
                    <p  class="display-6 mb-3" style="color:rgb(161, 99, 129)">{{$testimonials->name}}</p><br>
                    <div class="testimonial-text text-center p-4" >
                        <h5 class=" mb-3 " style="font-size:xx-large; font-weight:bold"> Service : {{$testimonials->service}}</h5>
                        <h5 class="  mb-3"style="font-size:xx-large; font-weight:bold"> Doctor Name: {{$testimonials->doctor}}</h5>

                        <p class="  mb-3" style="font-size:xx-large; font-weight:bold">  {{$testimonials->message}}</p>

                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>




    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/R.png" width="50%" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Send Feedback</h1>
                        </div>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <form class="main-form" action="{{url('testimonial')}}" method="POST">

                          @csrf

                            <div class="row mt-5 ">


                              <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                <input type="text" name="name" class="form-control" placeholder="Full name">
                              </div>

                              <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                <input type="text" name="email" class="form-control" placeholder="Email address..">
                              </div>







                               <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                                <select name="service" id="departement" class="custom-select">
                                    <option>---Select Service---</option>

                                    @foreach($service as $services)
                                    <option value="{{$services->names}}">{{$services->names}}</option>
                                    @endforeach


                                </select>
                               </div>

                                 <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                    <select name="doctor"  class="custom-select">



                                        <option>---Select Doctor---</option>

                                      @foreach($doctor as $doctors)
                                        <option value="{{$doctors->name}}">{{$doctors->name}}</option>
                                        @endforeach

                                    </select>
                                  </div>

                              <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                                <input type="date" name="date" class="form-control">
                              </div>

                              <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                                <input type="time" name="time" class="form-control">
                              </div>

                              <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                                <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter Your Feedback.."></textarea>
                              </div>


                            </div>


                            <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="color:rgb(18, 18, 18);font-weight:bolder;border:5px rgb(17, 16, 16) solid">Submit Request</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('include.footer')
    <!-- Footer End -->


{{-- Bottom --}}
    @include('include.bottom')
{{-- Bottom --}}
