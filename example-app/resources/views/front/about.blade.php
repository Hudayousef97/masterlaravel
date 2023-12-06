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
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Me</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class=""style="display:flex;font-size:30px">
                    <li class="breadcrumb-item"><a class="text-black" href="home">Home/</a></li>
                    <li class="breadcrumb-item"><a class="text-black" href="#">Pages/</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->





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
                            Proudly, I hold numerous recognized certifications in the field of skincare from reputable institutions. What sets me apart is my profound passion for helping people achieve healthy and beautiful skin. I am always delighted to witness the happiness and confidence that radiate from the faces of those who visit my clinic. At [ Baby Skin], you will find a place where expertise and personal care come together to meet your needs and achieve the best results for your skin.
                       <br>
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



    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Why Choose Us</h1>
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

    <!-- Footer Start -->
    @include('include.footer')

    <!-- Footer End -->

{{-- Bottom --}}
@include('include.bottom')
{{-- Bottom --}}
