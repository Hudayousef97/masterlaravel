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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Our Team</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class=""style="display:flex;font-size:30px">
                    <li class="breadcrumb-item"><a class="text-black" href="home">Home/</a></li>
                    <li class="breadcrumb-item"><a class="text-black" href="#">Pages/</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Our Team</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Team Members</h1>
            </div>
            <div class="row g-10">

                    @foreach($doctor as $doctors)

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" hight: 200px>

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

                {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Baidaa Mohammad</h5>
                            <small>Injection</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Atika Yosef</h5>
                            <small>Mesotherapy</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Manal Falah</h5>
                            <small>HydraFacial</small>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    @include('include.footer')

    <!-- Footer End -->


{{-- Bottom --}}
@include('include.bottom')
{{-- Bottom --}}
