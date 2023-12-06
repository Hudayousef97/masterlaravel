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

     @if(session()->has('message'))
     <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">
             x
         </button>
         {{ session()->get('message') }}
     </div>
 @endif
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">

            <div class="owl-carousel-item position-relative">
                <img src="img/view-from-rejuvenation-beautiful-woman-enjoying-cosmetology-procedures-beauty-salon-dermatology-hands-blue-glows-healthcare-therapy-botox.jpg" alt="gg" height="50%">

                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Baby Skin</h5>

                                <h1 class="display-3 text-white animated slideInDown mb-4">Radiant and Vibrant Skin Perpetually</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">HydraFacial is a non-invasive skincare treatment that combines exfoliation, hydration, and serums to improve skin texture and radiance. It addresses various concerns like fine lines, clogged pores, and uneven tone. Suitable for all skin types, it offers quick and noticeable results.</p>
                                <a href="./service" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="./quote" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/serum-bottles-jar-with-pebbles.jpg" alt="hh" >
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcom To Baby skin</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Radiant and Vibrant Skin Perpetually</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Mesotherapy is a cosmetic procedure involving injections of vitamins and substances into the skin's middle layer for skin improvement. It addresses issues like wrinkles, pigmentation, and cellulite. Common for facial rejuvenation and body contouring.</p>
                                <a href="./service" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="./quote" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/a58596a0df363975309fe93396bacbfb.jpg" alt="hh" height="200px">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg- text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Baby Skin</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Radiant and Vibrant Skin Perpetually</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Pico laser is advanced laser tech with ultra-short pulses for skin issues like pigmentation, tattoos, and scars. Its quick bursts reduce heat damage, offering precise and efficient results. Used in dermatology and aesthetics.]</p>
                                <a href="./service" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="./quote" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-between mb-2">

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center justify-content-between mb-2">

                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center justify-content-between mb-2">

                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center justify-content-between mb-2">

                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->


 <!-- About Start -->
 <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    {{-- <img class="position-absolute img-fluid " src="img/WhatsApp Image 2023-09-14 at 09.21.07 2.jpg" width="100%" alt=""> --}}

                    <img class="position-absolute img-fluid w-100 h-100" src="img/WhatsApp Image 2023-12-06 at 02.46.28_86bcf54f.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">About Me</h1>
                        <h2 class="display-5 mb-4">Doaa Alkhawaldeh</h2>

                    </div>
                    <p class="mb-4 pb-2"> My name is Duaa, and I have been working as a skin specialist since 2019. With several years of experience in the field, I am dedicated to providing the best care and solutions for all your skincare needs.<br>
                    </p>
                    <div class="row g-4 mb-4 pb-2">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-users fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="fw-medium mb-0">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="fw-medium mb-0">Appointment Done </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="about" class="btn btn-primary py-3 px-5"style="background: linear-gradient(rgba(200, 171, 201, .7), rgba(53, 53, 53, .7));border:1px solid white">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Services</h1>
            </div>
            <div class="row g-4">

                @foreach($service as $services)

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" style="height: 300px !important;width:95% !important " src="serviceimage/{{$services->image}}" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">{{$services->names}}</h4>
                            <p>{{$services->discreption}}</p>
                            <p><b>{{$services->price}}</b></p>

                         <a class="fw-medium" style="color: deeppink" href="service">Read More<i class="fa fa-arrow-right ms-2"></i></a><br>
                         <a class="fw-medium" style="color: deeppink" href="quote">Book Now<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>

                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>

    <!-- Service End -->
    <!-- doctor start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Team Members</h1>
            </div>
            <div class="row g-10">

                    @foreach($doctor as $doctors)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" >

                    <div class="team-item"  >
                        <div class="overflow-hidden position-relative" >
                            <img class="img-fluid" style="height: 300px !important;width:95% !important " src="doctorimage/{{$doctors->image}}" alt="" >
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">{{$doctors->name}}</h5>
                            <small>{{$doctors->speciality}}</small>
                        </div>
                    </div>
                </div>


                @endforeach
            </div></div></div>
    <!-- doctor End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">  Why Choose Us</h1>
                        </div>
                        <p class="mb-4 pb-2"> Choosing our skin care clinic means choosing a dedicated and knowledgeable team that prioritizes your skin health and beauty.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Expertise and Experience</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-user-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Certified Professionals</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Client Satisfaction</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-headphones fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Transparent Communication</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/3b33d0dc6ed56e42cbe9ceb01c472b6d.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


   <br><br>


    <!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/a64ef8f652920242b02d020c50fa9410.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Book Now</h1>
                        </div>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <form class="main-form" action="{{url('quote')}}" method="POST">

                          @csrf

                            <div class="row mt-5 ">
                              <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                <input type="text" name="name" class="form-control" placeholder="Full name">
                              </div>
                              <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                <input type="text" name="email" class="form-control" placeholder="Email address..">
                              </div>
                              <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                                <input type="date" name="date" class="form-control">
                              </div>

                              <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                                <input type="time" name="time" class="form-control">
                              </div>


                              <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">

                                <select name="speciality" id="departement" class="custom-select">
                                    <option>---Select Service---</option>

                                    @foreach($service as $services)
                                    <option value="{{$services->names}}">{{$services->names}}</option>
                                    @endforeach


                                </select>

                            </div>

                            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">

                                <select name="doctor" id="departement" class="custom-select">



                                    <option>---Select Doctor---</option>

                                  @foreach($doctor as $doctors)
                                    <option value="{{$doctors->name}}">{{$doctors->name}}</option>
                                    @endforeach

                                </select>
                              </div>



                              <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                                <input type="text" name="number" class="form-control" placeholder="Number..">
                              </div>
                              <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                                <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                              </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="color:rgb(18, 18, 18);font-weight:bolder;border:5px rgb(17, 16, 16) solid">Submit Request</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->






<!--contact end-->
    <!-- Team Start -->



    <!-- Team End -->


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- Footer Start -->

<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"  >
    <div class="container py-5 ">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>10th, Aqaba, Jordan</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>00962795844698</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Services</h4>
                <a class="btn btn-link" href="">HydraFacial</a>
                <a class="btn btn-link" href="">Dermaben</a>
                <a class="btn btn-link" href="">LVL</a>
                <a class="btn btn-link" href="">Microblending</a>
                <a class="btn btn-link" href="">Mesotherapy</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="about">About Us</a>
                <a class="btn btn-link" href="contact">Contact Us</a>
                <a class="btn btn-link" href="service">Our Services</a>

            </div>
            <div class="col-lg-3 col-md-6">

                <div class="position-relative mx-auto" >
                    <!-- <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email"> -->
                    <a href="{{ route('register') }}">   <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"style="background:white;border:1px solid white;font-weight: bold; color:black ">  SignUp</button></a>
                </div>
            </div>
        </div>
    </div>

</div>

    <!-- Footer End -->


{{-- Head --}}
@include('include.bottom')
{{-- Head --}}
