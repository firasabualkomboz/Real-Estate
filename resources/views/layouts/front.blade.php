<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent IN </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/bootstrap.min.css" type="text/css"/><!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/fonts/font-awesome/css/font-awesome.min.css"
          type="text/css"/><!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/fonts/themify-icons/themify-icons.css" type="text/css"/>
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/owl.carousel.css" type="text/css"/><!-- Owl Carousal -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/price-range.css" type="text/css"/><!-- Owl Carousal -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/lightslider.min.css">

    <link rel="stylesheet" href="{{asset('assets_front')}}/css/style.css" type="text/css"/><!-- Style -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/responsive.css" type="text/css"/><!-- Responsive -->
    <link rel="stylesheet" href="{{asset('assets_front')}}/css/colors.css" type="text/css"/><!-- color -->

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_front')}}/js/rs-plugin/css/settings.css">


</head>
<body>


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
        var styles = [{
            "featureType": "landscape",
            "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]
        }, {
            "featureType": "poi",
            "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]
        }, {
            "featureType": "road.highway",
            "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
        }, {
            "featureType": "road.arterial",
            "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]
        }, {
            "featureType": "road.local",
            "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]
        }, {
            "featureType": "transit",
            "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
        }, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {
            "featureType": "water",
            "elementType": "labels",
            "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]
        }, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]
        }];
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


<script>
    $("#pac-input").focusin(function () {
        $(this).val('');
    });
    $('#latitude').val('');
    $('#longitude').val('');
    // This example adds a search box to a map, using the Google Place Autocomplete
    // feature. People can enter geographical searches. The search box will return a
    // pick list containing a mix of places and predicted search terms.
    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
    function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 24.740691, lng: 46.6528521},
            zoom: 13,
            mapTypeId: 'roadmap'
        });
        // move pin and current location
        infoWindow = new google.maps.InfoWindow;
        geocoder = new google.maps.Geocoder();
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                map.setCenter(pos);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(pos),
                    map: map,
                    title: 'موقعك الحالي'
                });
                markers.push(marker);
                marker.addListener('click', function () {
                    geocodeLatLng(geocoder, map, infoWindow, marker);
                });
                // to get current position address on load
                google.maps.event.trigger(marker, 'click');
            }, function () {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            console.log('dsdsdsdsddsd');
            handleLocationError(false, infoWindow, map.getCenter());
        }
        var geocoder = new google.maps.Geocoder();
        google.maps.event.addListener(map, 'click', function (event) {
            SelectedLatLng = event.latLng;
            geocoder.geocode({
                'latLng': event.latLng
            }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        deleteMarkers();
                        addMarkerRunTime(event.latLng);
                        SelectedLocation = results[0].formatted_address;
                        console.log(results[0].formatted_address);
                        splitLatLng(String(event.latLng));
                        $("#pac-input").val(results[0].formatted_address);
                    }
                }
            });
        });

        function geocodeLatLng(geocoder, map, infowindow, markerCurrent) {
            var latlng = {lat: markerCurrent.position.lat(), lng: markerCurrent.position.lng()};
            /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
            $('#latitude').val(markerCurrent.position.lat());
            $('#longitude').val(markerCurrent.position.lng());
            geocoder.geocode({'location': latlng}, function (results, status) {
                if (status === 'OK') {
                    if (results[0]) {
                        map.setZoom(8);
                        var marker = new google.maps.Marker({
                            position: latlng,
                            map: map
                        });
                        markers.push(marker);
                        infowindow.setContent(results[0].formatted_address);
                        SelectedLocation = results[0].formatted_address;
                        $("#pac-input").val(results[0].formatted_address);
                        infowindow.open(map, marker);
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
            SelectedLatLng = (markerCurrent.position.lat(), markerCurrent.position.lng());
        }

        function addMarkerRunTime(location) {
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
            markers.push(marker);
        }

        function setMapOnAll(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }

        function clearMarkers() {
            setMapOnAll(null);
        }

        function deleteMarkers() {
            clearMarkers();
            markers = [];
        }

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        $("#pac-input").val("أبحث هنا ");
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);
        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function () {
            searchBox.setBounds(map.getBounds());
        });
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function () {
            var places = searchBox.getPlaces();
            if (places.length == 0) {
                return;
            }
            // Clear out the old markers.
            markers.forEach(function (marker) {
                marker.setMap(null);
            });
            markers = [];
            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function (place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                var icon = {
                    url: place.icon,
                    size: new google.maps.Size(100, 100),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };
                // Create a marker for each place.
                markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                }));
                $('#latitude').val(place.geometry.location.lat());
                $('#longitude').val(place.geometry.location.lng());
                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
        });
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }

    function splitLatLng(latLng) {
        var newString = latLng.substring(0, latLng.length - 1);
        var newString2 = newString.substring(1);
        var trainindIdArray = newString2.split(',');
        var lat = trainindIdArray[0];
        var Lng = trainindIdArray[1];
        $("#latitude").val(lat);
        $("#longitude").val(Lng);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBS_WLni5YfR2VHwzTzf50iFsb4hmv9Vw8&libraries=places&callback=initAutocomplete&language=ar&region=PS
    async defer"></script>


</body>
</html>
