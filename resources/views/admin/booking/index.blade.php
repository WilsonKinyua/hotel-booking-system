
@section('title')
    <title>Book for :  {{ $room->name }}</title>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    {{-- <title>Hotel Booking</title> --}}
     @yield('title')

    <!-- Favicon -->
    {{-- <link rel="icon" href="{{asset('assets/img/core-img/favicon.png')}}"> --}}

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
  
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>(254) 717-255-460</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>info.starfive@gmail.com</span></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href="https://www.facebook.com/ilson.kiny/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="http://twitter.com/code_the_guy"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/code_the_guy/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                    <a class="nav-brand" href="{{route('welcome')}}"><img src="{{asset('assets/img/core-img/logo.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                                    <li><a href="{{route('rooms')}}">Rooms</a></li>
                                    <li><a href="{{route('about-us')}}">About Us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('welcome')}}">- Home</a></li>
                                            <li><a href="{{route('rooms')}}">- Rooms</a></li>
                                            <li><a href="./single-room.html">- Single Rooms</a></li>
                                            <li><a href="{{route('about-us')}}">- About Us</a></li>
                                            <li><a href="./blog.html">- Blog</a></li>
                                            <li><a href="./single-blog.html">- Single Blog</a></li>
                                            <li><a href="{{route('contact')}}">- Contact</a></li>
                                            <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('blog')}}">News</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form class="text-center border border-light p-5" action="{{route('booking.store')}}" method="POST">
                    @csrf
                    <p class="h3 mb-4">Welcome to Star Hotel</p>
                    <p class="h6 mb-4">Book for  <span style="font-weight: 900">{{ $room->name }}</span></p>
                        @include('partials.errors')
                        @include('partials.flash-messages') 
                            {{-- {{ isset($unique_id) ? $unique_id : '' }} --}}
                        <div class="row form-group">
                            <div class="col-lg-6 col-md-2 col-lg-3">
                                <input type="hidden" name="unique_id" value="{{ $random }}">
                                <input type="hidden" name="room_id" value="{{ $room->id }}">
                                <input type="text" name="first_name" id="defaultContactFormName" class="form-control mb-4" value="{{old('first_name')}}" placeholder="First name*" required>
                            </div>
                            <div class="col-lg-6 col-md-2 col-lg-3">
                                <input type="text" name="last_name" id="defaultContactFormName" class="form-control mb-4" value="{{old('last_name')}}" placeholder="Last name*" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="defaultContactFormEmail" class="form-control mb-4" value="{{old('femail')}}" placeholder="Email" required>
                        </div>
                    <div class="row form-group">
                        <div class="col-lg-6 col-md-2 col-lg-3">
                            <label for="checkIn">Check In <span style="color: red">*</span></label>
                            <input type="date" name="check_in" class="form-control" id="checkIn" name="checkin-date">
                        </div>
                        <div class="col-lg-6 col-md-2 col-lg-3">
                            <label for="checkOut">Check Out <span style="color: red">*</span></label>
                            <input type="date" name="check_out" class="form-control" id="checkOut" name="checkout-date">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4 col-md-1">
                            <label for="room">Room <span style="color: red">*</span></label>
                            <select name="rooms" id="room" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-1">
                            <label for="adults">Adult <span style="color: red">*</span></label>
                            <select name="adults" id="adults" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-2 col-lg-1">
                            <label for="children">Children <span style="color: red">*</span></label>
                            <select name="children" id="children" class="form-control">
                                <option value="00">00</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="number" name="phone" value="{{old('phone')}}" id="defaultContactFormName" class="form-control mb-4" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <p class="info-text">Please describe your needs e.g. Extra beds, children's cots. If none leave blank</p>
                        <textarea class="form-control rounded-0"  name="body" id="exampleFormControlTextarea2" rows="3" placeholder="Message">{{old('body')}}</textarea>
                    </div>
                    <button class="btn btn-info btn-block" type="submit">Book Now</button>
            </form>

        </div>
    </div>
</div>


<!-- Footer Area Start -->
<footer class="footer-area section-padding-80-0">

    <!-- Copywrite Area -->
    <div class="container">
        <div class="copywrite-content">
            <div class="row align-items-center">
                <div class="col-12 col-md-8">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text">
                        <p>
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by code the guy</a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <!-- Social Info -->
                    <div class="social-info">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- **** All JS Files ***** -->
<!-- jQuery 2.2.4 -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Popper -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- All Plugins -->
<script src="{{asset('assets/js/roberto.bundle.js')}}"></script>
<!-- Active -->
<script src="{{asset('assets/js/default-assets/active.js')}}"></script>

</body>

</html>

