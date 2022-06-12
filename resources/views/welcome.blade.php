<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent In </title>

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

    @include('include.front.header')

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
                                            <option>No. of Bedrooms</option>
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

    <section class="block" id="estates">
        <div class="container">
            <div class="heading4">
                <h2>FEATURED APARTMENTS </h2>
                <span>{{$apartments->count()}} For You </span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="properties-sec">
                        <div class="row">
                            @foreach($apartments as $apartment)
                                <div class="col-md-4">
                                    <div class="properties-box">
                                        <div class="properties-thumb">
                                            <img src="{{ $apartment->imageurl }}"/>


                                            <span class="spn-status"> {{$apartment->status}} </span>

                                            <ul class="property-info">
                                                <li>
                                                    <i class="fa fa-home"> </i> <span> {{$apartment->rooms}} </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-bed"></i><span> {{$apartment->bedrooms}}  </span>
                                                </li>
                                                <li class="li-rl"></li>
                                                <li>
                                                    <i class="fa  fa-building"> </i>
                                                    <span>{{$apartment->on_floor}}   </span>
                                                </li>
                                            </ul>

                                            <a class="proeprty-sh-more"
                                               href="{{route('showApartment' , $apartment->id)}}"><i
                                                    class="ti ti-eye"> </i></a>

                                        </div>
                                        <h3><a href="property.html" title="">{{$apartment->name}}</a></h3>
                                        <span class="price">$ {{$apartment->rent}}  <small
                                                style="color: #000">  /  Month</small> </span>

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

    @include('include.front.footer')

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
