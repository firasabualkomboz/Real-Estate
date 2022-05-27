
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitara - Bootstrap Real Estate template </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/fonts/font-awesome/css/font-awesome.min.css" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/fonts/themify-icons/themify-icons.css" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/owl.carousel.css" type="text/css" /><!-- Owl Carousal -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/price-range.css" type="text/css" /><!-- Owl Carousal -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/lightslider.min.css">

    <link rel="stylesheet" href="{{asset('assets_front')}}/css/style.css" type="text/css" /><!-- Style -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/responsive.css" type="text/css" /><!-- Responsive -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/colors.css" type="text/css" /><!-- color -->

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_front')}}/js/rs-plugin/css/settings.css">


</head>
<body>

<!-- /.preloader -->
<div id="preloader"></div>

@yield('content')

<!-- Script -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/modernizr.js"></script><!-- Modernizer -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/jquery-1.10.2.min.js"></script><!-- Jquery -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/owl.carousel.min.js"></script><!-- Owl Carousal -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/html5lightbox.js"></script><!-- HTML -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/scrolly.js"></script><!-- Parallax -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/price-range.js"></script><!-- Parallax -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/script.js"></script><!-- Script -->
<script type="text/javascript" src="{{asset('assets_front')}}/js/lightslider.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript" src="{{asset('assets_front')}}/js/gmaps.js"></script>

<script>
    $(document).ready(function () {

        $('#image-gallery').lightSlider({
            gallery: true,
            item: 1,
            thumbItem: 9,
            slideMargin: 0,
            speed: 500,
            auto: true,
            loop: true,
            onSliderLoad: function () {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        "use strict";
        $(".related-properties-items").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: true,
            dots: true,
            nav: false,
            marging: 30,
            items: 4,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        map();
    });
    /* map */
    function map() {
        var styles = [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}];
        map = new GMaps({
            el: '#propertyMap',
            lat: -12.043333,
            lng: -77.028333,
            zoomControl: true,
            zoomControlOpt: {
                style: 'SMALL',
                position: 'TOP_LEFT'
            },
            panControl: false,
            streetViewControl: false,
            mapTypeControl: false,
            overviewMapControl: false,
            scrollwheel: false,
            draggable: false,
            styles: styles
        });
        var image = 'img/house.png';
        map.addMarker({
            lat: -12.043333,
            lng: -77.028333,
            icon: image/* ,
                 title: '',
                 infoWindow: {
                 content: '<p>HTML Content</p>'
                 }*/
        });
    }

</script>

</body>
</html>
