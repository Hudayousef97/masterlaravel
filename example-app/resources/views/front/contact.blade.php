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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class=""style="display:flex;font-size:30px">
                    <li class="breadcrumb-item"><a class="text-black" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-black" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Contact Us</h1>
                        </div>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done </p>
                        <form class="main-form" action="{{url('contact')}}" method="POST">

                            @csrf

                              <div class="row mt-5 ">
                                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                    <input type="text" name="name" class="form-control" placeholder="Name address..">
                                  </div>
                                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                  <input type="text" name="email" class="form-control" placeholder="Email address..">
                                </div>
                                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject..">
                                  </div>

                                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                                  <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                                </div>
                              </div>

                              <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="color:rgb(18, 18, 18);font-weight:bolder;border:5px rgb(17, 16, 16) solid">Submit Request</button>
                            </form>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6573.174914791978!2d35.0056412024948!3d29.563660869676127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sjo!4v1693315748753!5m2!1sar!2sjo"
                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    @include('include.footer')

    <!-- Footer End -->


{{-- Bottom --}}
@include('include.bottom')
{{-- Bottom --}}
