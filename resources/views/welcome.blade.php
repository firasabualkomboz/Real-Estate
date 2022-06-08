<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitara - Bootstrap Real Estate template </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/bootstrap.min.css" type="text/css"/><!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/fonts/font-awesome/css/font-awesome.min.css"
          type="text/css"/><!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/fonts/themify-icons/themify-icons.css" type="text/css"/>
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/owl.carousel.css" type="text/css"/><!-- Owl Carousal-->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/price-range.css" type="text/css"/><!-- Owl Carousal -->

    <link rel="stylesheet" href="{{asset('assets_front')}}/css/style.css" type="text/css"/><!-- Style -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/responsive.css" type="text/css"/><!-- Responsive -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/colors.css" type="text/css"/><!-- color -->

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css">

</head>
<body>
<!-- /.preloader -->
{{--<div id="preloader"></div>--}}
<div class="theme-layout">


    <div class="account-popup-sec">
        <div class="account-popup-area">
            <div class="account-popup">
                <div class="row">
                    <div class="col-md-6">
                        <div class="account-user">
                            <div class="logo">
                                <a href="#" title="">
                                    <i class="fa fa-get-pocket"></i>
                                    <span>Estate </span>
                                    <strong>RENT PROPERTIES</strong>
                                </a>
                            </div><!-- LOGO -->
                            <form>
                                <h4>Login Form</h4>
                                <div class="field">
                                    <input type="text" placeholder="Username"/>
                                </div>
                                <div class="field">
                                    <input type="password" placeholder="Password"/>
                                </div>
                                <div class="field">
                                    <input type="submit" value="SEND NOW" class="flat-btn"/>
                                </div>
                            </form>
                            <i>OR</i>
                            <span>LOGIN WITH</span>
                            <ul class="social-btns">
                                <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="registration-sec">
                            <h3>SIGNUP Form</h3>
                            <form>
                                <div class="field">
                                    <input type="text" placeholder="Your Name"/>
                                </div>
                                <div class="field">
                                    <input type="text" placeholder="Your Email"/>
                                </div>
                                <div class="field">
                                    <input type="password" placeholder="Type Password"/>
                                </div>
                                <div class="field">
                                    <input type="password" placeholder="Retype Password"/>
                                </div>
                                <label>
                                    <input type="checkbox"/> By Clicking on this You are agree with our <a href="#"
                                                                                                           title="">Terms
                                        & Condition</a>
                                </label>
                                <input type="submit" value="Singup Now" class="flat-btn"/>
                            </form>
                        </div><!-- Registration sec -->
                    </div>
                </div>
                <span class="close-popup"><i class="fa fa-close"></i></span>
            </div>
        </div>
    </div><!-- Account Popup Sec -->

    <header class="simple-header for-sticky white">

        <div class="menu">
            <div class="container">
                <div class="logo">
                    <a href="index.html" title="">
                        <i class="fa fa-get-pocket"></i>
                        <span>Kwitara</span>
                        <strong>RENT PROPERTIES</strong>
                    </a>
                </div><!-- LOGO -->
                <div class="popup-client">
                    <span><i class="fa fa-user"></i> /  Signup</span>
                </div>
                <span class="menu-toggle"><i class="fa fa-bars"></i></span>
                <nav>
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#" title="">HOME</a>
                            <ul>
                                <li><a href="index.html" title="">Home v1</a></li>
                                <li><a href="index2.html" title="">Home v2</a></li>
                                <li><a href="index3.html" title="">Home v3</a></li>
                                <li><a href="index4.html" title="">Home v4</a></li>
                                <li><a href="index5.html" title="">Home v5</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" title="">PROPERTIES</a>
                            <ul>
                                <li><a href="properties3.html" title="">Properties- Super </a></li>
                                <li><a href="properties.html" title="">Properties- List</a></li>
                                <li><a href="properties2.html" title="">Properties- Grid</a></li>
                                <li><a href="property.html" title="">Property details</a></li>
                            </ul>
                        </li>
                        <li><a href="property.html" title="">PROPERTY</a></li>



                        <li><a href="contact.html" title="">CONTACT</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>

    <section>
        <div id="map_canvas"></div>
    </section>

    <section class="horizontal-search">
        <div class="container">
            <div class="">
                <div class="search-form">
                    <form action="{{route('welcome')}}" method="get" enctype="multipart/form-data" class="form-inline">
                     @csrf
                        <div class="search-form-content">
                            <div class="search-form-field">
                                <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                    <div class="label-select">
                                        <select class="form-control" name="s_location">
                                            <option>All Locations</option>
                                            <option>Tokyo</option>
                                            <option>New Jersey</option>
                                            <option>New York</option>
                                            <option>Paris</option>
                                            <option>Marrakech</option>
                                            <option>lille</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                    <div class="label-select">
                                        {!! Form::select('property_id',$properties,request('property_id'), array('placeholder' => 'Property Type','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-sm-3 col-md-3">
                                    <div class="label-select">
                                        <select name="bedrooms" class="form-control">
                                            <option>No. of 	Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group col-xs-12 col-sm-3 col-md-3">

                                <div class="label-select">
                                        <select class="form-control">
                                            <option>No. of Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="search-form-submit">
                            <button type="submit" class="btn-search">Search</button>
                        </div>
                    </form>
                </div><!-- Services Sec -->

            </div>
        </div>
    </section>

    <section class="block">
        <div class="container">
            <div class="heading4">
                <h2>FEATURED Estates</h2>
                <span>{{$estates->count()}} For You </span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="properties-sec">
                        <div class="row">
                            @foreach($estates as $estate)
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <?php foreach (json_decode($estate->images)as $picture) { ?>
                                            <img src="{{ asset('/uploads/'.$picture) }}" />

                                            <?php } ?>


                                            <span class="spn-status"> For Rent </span>

                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa fa-home"> </i> <span> {{$estate->rooms}} </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span> {{$estate->bedrooms}}  </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i> <span>{{$estate->on_floor}}   </span>
                                                </li>
                                            </ul>

                                            <a class="proeprty-sh-more" href="{{route('showEstate' , $estate->id)}}"><i
                                                    class="ti ti-eye"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="">{{$estate->name}}</a></h3>
                                        <span class="price">$ {{$estate->rent}}  <small style="color: #000">  /  month</small> </span>

                                    </div><!-- prop Box -->
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








@if(isset($appointments))

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="agents-carousal-sec">
                            <div class="heading4">
                                <h2>Book a Appointment </h2>
                                <span>Click To appointment</span>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="our-clients-sec">
                                <ul class="carousel-client">


                                    @forelse($todayAppointments as $appointment)
                                        Today's appointments
                                        {{\Carbon\Carbon::today()}}
                                        <li>
                                            <span>{{$appointment->date}}</span>
                                            <br>
                                            <span>{{\Carbon\Carbon::createFromFormat('H:i:s',$appointment->start_at)->format('h:i')}} To {{\Carbon\Carbon::createFromFormat('H:i:s',$appointment->end_at)->format('h:i')}}</span>
                                            <br>
                                            <br>

                                            <form action="{{route('tenant.appointments.update',$appointment->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="tenant_id" value="{{auth()->id()}}">
                                                <input type="hidden" name="status" value="booked">
                                                <button type="submit" class="btn btn-sm btn-danger">Book Now</button>
                                            </form>
                                        </li>
                                    @empty
                                        <li style="border: solid 1px #d9534f;
    border-radius: 4px;
    padding-top: 57px;
    color: #d9534f;
}"> No appointments available today
                                        </li>
                                    @endforelse


                                    @foreach($appointments as $appointment)
                                        <li style="border: solid 1px #f8f8f8; border-radius: 4px ">
                                            <span>{{$appointment->date}}</span>
                                            <br>
                                            <span>{{\Carbon\Carbon::createFromFormat('H:i:s',$appointment->start_at)->format('h:i')}} To {{\Carbon\Carbon::createFromFormat('H:i:s',$appointment->end_at)->format('h:i')}}</span>
                                            <br>
                                            <br>

                                            <form action="{{route('tenant.appointments.update',$appointment->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="tenant_id" value="{{auth()->id()}}">
                                                <input type="hidden" name="status" value="booked">
                                                <button type="submit" class="btn btn-sm btn-danger">Book Now</button>
                                            </form>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <footer class="light-footer">
        <section class="top-line">
            <div style="background: url(img/footer.jpg) repeat scroll 50% 422.28px transparent;"
                 class="parallax scrolly-invisible no-parallax whitish"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 column">
                        <div class="about_widget widget">
                            <div class="heading1">
                                <h2><span>Useful</span> links</h2>
                            </div><!-- heading -->

                            <span><i class="fa fa-envelope"></i>yourcompany@gmail.com</span>
                            <span><i class="fa fa-phone"></i>0888 (29999996)</span>
                            <span><i class="fa fa-location-arrow"></i>1234 Tokyo shibuia , WI 54115</span>
                            <ul class="social-btns">
                                <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 column">
                        <div class="links_widget widget">
                            <div class="heading1">
                                <h2><span>Useful</span> links</h2>
                            </div><!-- heading -->
                            <ul>
                                <li><a href="#" title=""><i class="fa fa-angle-right"></i> Home</a></li>
                                <li><a href="#" title=""><i class="fa fa-angle-right"></i> About us</a></li>
                                <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li>
                                <li><a href="#" title=""><i class="fa fa-angle-right"></i> Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 column">
                        <div class="links_widget widget">
                            <div class="heading1">
                                <h2><span>Useful</span> links</h2>
                            </div><!-- heading -->
                            <ul>
                                <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem ipsum </a></li>
                                <li><a href="#" title=""><i class="fa fa-angle-right"></i> Closest ipsum </a></li>
                                <li><a href="#" title=""><i class="fa fa-angle-right"></i> Lorem dolom </a></li>
                                <li><a href="#" title=""><i class="fa fa-angle-right"></i> Positioned ipl</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 column">
                        <div class="subscribe_widget widget">
                            <div class="heading1">
                                <h2><span>Subscribe</span> Us</h2>
                            </div><!-- heading -->
                            <p>Positioning the closest positioned for abs positioning</p>
                            <form>
                                <label><input type="text" placeholder="TYPE YOUR EMAIL"/></label>
                                <button type="submit" class="flat-btn"><i class="ti ti-email"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bottom-line">
            <div class="container">
                <span>Copyright All Right Reserved 2016 <a href="#" title="">KimaroTec</a></span>
                <ul>
                    <li><a title="" href="#">HOME</a></li>
                    <li><a title="" href="#">ABOUT</a></li>
                    <li><a title="" href="#">PROPERTIES</a></li>
                    <li><a title="" href="#">BLOG</a></li>
                    <li><a title="" href="#">CONTACT</a></li>
                </ul>
            </div>
        </div>
        <a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
    </footer>

</div>

<!-- Script -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/modernizr.js"></script><!-- Modernizer -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/jquery-1.10.2.min.js"></script><!-- Jquery -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/owl.carousel.min.js"></script><!-- Owl Carousal -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/html5lightbox.js"></script><!-- HTML -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/scrolly.js"></script><!-- Parallax -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/price-range.js"></script><!-- Parallax -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/script.js"></script><!-- Script -->

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="{{asset('assets_front')}}/js/infobox.js"></script><!-- Parallax -->
<script src="{{asset('assets_front')}}/js/data.json"></script>
<script src="{{asset('assets_front')}}/js/markerclusterer.js"></script>
<script src="{{asset('assets_front')}}/js/markers-map.js"></script>

<script>
    google.maps.event.addDomListener(window, 'load', speedTest.init);
</script>


<script type="text/javascript">
    $(document).ready(function () {
        "use strict";

        $(".carousel-prop").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: true,
            dots: true,
            nav: false,
            items: 4,
            itemsCustom: false,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [980, 2],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 1],
            itemsScaleUp: false

        });


        $(".carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 0,
            items: 3
        });

        $(".carousel-client").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            items: 5,
            itemsCustom: false,
            itemsDesktop: [1199, 5],
            itemsDesktopSmall: [980, 3],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 1],
            itemsScaleUp: false
        });

    });
</script>
</body>
</html>
