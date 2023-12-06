 <!-- Topbar Start -->
 <div class="container-fluid "style="background-color:white;border:1px solid black">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>10th, Aqaba, Jordan</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Sat - Thr : 09.00 AM - 07.00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+962975844098</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->


<nav class="navbar navbar-expand-lg navbar-light sticky-top p-0" style="background: linear-gradient(rgba(216, 170, 218, 0.7),rgba(53, 53, 53, .7)); color: white;">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0" style="background: linear-gradient(rgba(216, 170, 218, 0.7),rgba(53, 53, 53, .7)); color: white; font-size: 50px;">Baby Skin</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse Collapse " id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}" style="font-size:20px">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}" style="font-size:20px">About</a>
            <a href="{{ url('service') }}" class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}" style="font-size:20px">Service</a>
            <a href="{{ route('getTeam') }}" class="nav-item nav-link {{ request()->routeIs('getTeam') ? 'active' : '' }}" style="font-size:20px">Doctors</a>
            <a href="{{ route('getTestimonial') }}" class="nav-item nav-link {{ request()->routeIs('getTestimonial') ? 'active' : '' }}" style="font-size:20px">Feedback</a>
            <a href="{{ route('contact.show') }}" class="nav-item nav-link {{ request()->routeIs('contact.show') ? 'active' : '' }}" style="font-size:20px">Contact</a>
            <a href="{{ route('getQuote') }}" class="nav-item nav-link {{ request()->routeIs('getQuote') ? 'active' : '' }}" style="font-size:20px">Book Now</a>
            @if (Route::has('login'))
                    @auth
                    <a href="{{ url('myappointment') }}" class="nav-item nav-link my-appointment" style="background-color:gray;color:whitesmoke;font-size:20px">My Appointment</a>

                        <x-app-layout>
                        </x-app-layout>

                        @else

                        <a href="{{ route('register') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-inline-block" style="background: linear-gradient(rgba(216, 170, 218, 0.7), rgba(53, 53, 53, .7)); border: 1px solid white; font-size: 20px">
                            Sign Up Now
                            <i class="fa fa-arrow-right ms-3"></i>
                        </a>

                    @endauth
                @endif
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
