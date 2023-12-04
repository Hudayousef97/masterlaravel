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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Service</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class=""style="display:flex;font-size:30px">
                    <li class="breadcrumb-item"><a class="text-black" href="home">Home/</a></li>
                    <li class="breadcrumb-item"><a class="text-black" href="#">Pages/</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
                            <img class="img-fluid" style="height: 300px !important;width:95% !important ;" src="serviceimage/{{$services->image}}" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">{{$services->names}}</h4>
                            <p>{{$services->discreption}}</p>
                            <p><b>{{$services->price}}</b></p>
                            <!-- <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                @endforeach



                {{-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/هيدرافيشل-للحبوب.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">HydraFacial</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <p><b>Price: 30JD</b></p>
                            <!-- <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/download.jpeg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Botox and Filler</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <p><b>Price: 30JD</b></p>
                            <!-- <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/6f8132_c6e611baac9e4396b071d82e6b2995c7~mv2.jpg" height="50px"  alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Lash Lifting</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <p><b>Price: 30JD</b></p>
                            <!-- <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/microblading-678x446.jpeg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Microblading</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <p><b>Price: 30JD</b></p>
                            <!-- <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/pngtree-skin-care-products-beautiful-plant-background-picture-image_2252500.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Lip Augmentation</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <p><b>Price: 30JD</b></p>
                            <!-- <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Testimonial</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Dana</h5>
                        <span class="fst-italic">Perfect</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/Mental-Strong-Women-min.jpg" style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Sara</h5>
                        <span class="fst-italic">Amazing</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/images.jpeg" style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Leen</h5>
                        <span class="fst-italic">Very good


                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('include.footer')

    <!-- Footer End -->


{{-- Bottom --}}
@include('include.bottom')
{{-- Bottom --}}
