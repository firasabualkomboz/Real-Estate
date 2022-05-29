@extends('layouts.manager')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline mr-5">
                        <!--begin::Page     Title-->
                        <h2 class="subheader-title text-dark font-weight-bold my-2 mr-3">Real Estate</h2>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                            <li class="breadcrumb-item">
                                <a href="" class="text-muted">Estates</a>
                            </li>


                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-fh btn-white btn-hover-primary font-weight-bold px-2 px-lg-5 mr-2">
									<span class="svg-icon svg-icon-success svg-icon-lg">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24"></polygon>
												<path
                                                    d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
												<path
                                                    d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                    fill="#000000" fill-rule="nonzero"></path>
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>New Member</a>
                    <!--end::Button-->


                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">

                <div class="card card-custom card-transparent">
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                        <div class="wizard wizard-4" id="kt_wizard_v4" data-wizard-state="first" data-wizard-clickable="true">
                            <!--begin: Wizard Nav-->
                            <div class="wizard-nav">
                                <div class="wizard-steps">
                                    <!--begin::Wizard Step 1 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-number">1</div>
                                            <div class="wizard-label">
                                                <div class="wizard-title">Basic Details</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 1 Nav-->
                                    <!--begin::Wizard Step 2 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-number">2</div>
                                            <div class="wizard-label">
                                                <div class="wizard-title">Location </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 2 Nav-->
                                    <!--begin::Wizard Step 3 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-number">3</div>
                                            <div class="wizard-label">
                                                <div class="wizard-title">Features</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 3 Nav-->
                                    <!--begin::Wizard Step 4 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-number">4</div>
                                            <div class="wizard-label">
                                                <div class="wizard-title">Estate Images</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 4 Nav-->
                                </div>
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="card card-custom card-shadowless rounded-top-0">
                                <div class="card-body p-0">
                                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                        <div class="col-xl-12 col-xxl-7">
                                            <!--begin: Wizard Form-->
                                            @if ($errors->any())
                                                <div class="alert alert-custom alert-default" role="alert">

                                                    <div class="alert-icon">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>

                                                </div>
                                            @endif

                                            <form class="form mt-0 mt-lg-10 fv-plugins-bootstrap fv-plugins-framework" method="post" id="kt_form"
                                                  enctype="multipart/form-data"
                                                  action="{{route('manager.estates.store')}}"
                                            >
                                                @csrf


                                                <!--begin: Wizard Step 1-->
                                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">


                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Estate Name <span style="color: red"> * </span></label>
                                                                <input type="text" class="form-control form-control-solid form-control-lg" name="name">

                                                                <div class="fv-plugins-message-container"></div></div>

                                                        </div>



                                                        <div class="col-xl-6">
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Select Property Type <span style="color: red"> * </span></label>
                                                                <select name="property_id" class="form-control form-control-solid form-control-lg">
                                                                    @foreach ($properties as $property)

                                                                        <option value="{{ $property->id }}"  @if ($property->id == old('property_id' , $estate->property_id ) ) selected @endif >
                                                                            {{ $property->name }}
                                                                        </option>

                                                                    @endforeach

                                                                </select>

                                                                <div class="fv-plugins-message-container"></div></div>

                                                        </div>


                                                    </div>

                                                    <!--end::Input-->
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Select Owner <span style="color: red"> * </span></label>
                                                                <select name="owner_id" class="form-control form-control-solid form-control-lg">
                                                                    @foreach ($owners as $owner)

                                                                        <option value="{{ $owner->id }}"  @if ($owner->id == old('owner_id' , $estate->owner_id ) ) selected @endif >
                                                                            {{ $owner->name }}
                                                                        </option>

                                                                    @endforeach

                                                                </select>


                                                                <div class="fv-plugins-message-container"></div></div>

                                                        </div>
                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Area</label>
                                                                <input type="number" class="form-control form-control-solid form-control-lg" name="area" placeholder="200 sqmt">
                                                                <div class="fv-plugins-message-container"></div></div>
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Company Commissions <span style="color: red"> * </span></label>
                                                                <input type="number" class="form-control form-control-solid form-control-lg" name="commission" placeholder="20%">

                                                                <div class="fv-plugins-message-container"></div></div>

                                                        </div>

                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Rent</label>
                                                                <input type="number" class="form-control form-control-solid form-control-lg" name="rent" placeholder="100$/month">
                                                                <div class="fv-plugins-message-container"></div></div>
                                                            <!--end::Input-->
                                                        </div>


                                                    </div>


                                                    <!--begin::Input-->
                                                    <div class="form-group fv-plugins-icon-container">
                                                        <label>Description <span style="color: red">*</span></label>
                                                        <textarea  class="form-control form-control-solid form-control-lg" name="description" id="" cols="10" rows="10"></textarea>
                                                        <div class="fv-plugins-message-container"></div>


                                                    </div>
                                                    <!--end::Input-->


                                                </div>
                                                <!--end: Wizard Step 1-->
                                                <!--begin: Wizard Step 2-->
                                                <div class="pb-5" data-wizard-type="step-content">

                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label>Select Estate Location</label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg" id="pac-input" name="location">

                                                        <div id="map" class="mt-3" style="height: 500px;width: 650px;"></div>

                                                    </div>


                                                </div>
                                                <!--end: Wizard Step 2-->
                                                <!--begin: Wizard Step 3-->
                                                <div class="pb-5" data-wizard-type="step-content">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <!--begin::Input-->
                                                            <!--begin::Input-->
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Estate Notes <span style="color: red">*</span></label>
                                                                <textarea  class="form-control form-control-solid form-control-lg" name="notes" id="" cols="10" rows="10"></textarea>
                                                                <div class="fv-plugins-message-container"></div>


                                                            </div>
                                                            <!--end::Input-->
                                                            <!--end::Input-->
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                            <!--begin::Input-->
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Estate Age </label>
                                                                <input type="number" class="form-control form-control-solid form-control-lg" name="estate_age">
                                                                <div class="fv-plugins-message-container"></div></div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <!--begin::Input-->
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Rooms </label>
                                                                <input type="number" class="form-control form-control-solid form-control-lg" name="rooms" >
                                                                <div class="fv-plugins-message-container"></div></div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <!--begin::Input-->
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>BadRooms</label>
                                                                <input type="number" class="form-control form-control-solid form-control-lg" name="bedrooms">
                                                                <div class="fv-plugins-message-container"></div></div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <!--begin::Input-->
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>BathRooms</label>
                                                                <input type="number" class="form-control form-control-solid form-control-lg" name="bathrooms" >
                                                                <div class="fv-plugins-message-container"></div></div>
                                                            <!--end::Input-->
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="form-group">
                                                                <label>Inline Checkboxes</label>
                                                                <div class="checkbox-inline">

                                                                    @foreach ($tags as $tag)

                                                                    <label class="checkbox">
                                                                        <input type="checkbox" name="tags[]" value="{{$tag->id}}">
                                                                        {{$tag->name}}
                                                                        <span></span></label>
                                                                    @endforeach


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end: Wizard Step 3-->
                                                <!--begin: Wizard Step 4-->
                                                <div class="pb-5" data-wizard-type="step-content">

                                                    <div class="row">


                                                        <div class="col-xl-12">
                                                            <!--begin::Input-->
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Estate Images </label>
                                                                <input type="file" class="form-control form-control-solid form-control-lg" name="images[]" multiple>
                                                                <div class="fv-plugins-message-container"></div></div>
                                                            <!--end::Input-->
                                                        </div>

                                                    </div>

                                                </div>
                                                <!--end: Wizard Step 4-->
                                                <!--begin: Wizard Actions-->
                                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                    <div class="mr-2">
                                                        <button class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-success font-weight-bold text-uppercase px-9 py-4" type="submit" >Submit</button>
                                                        <button class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
                                                    </div>
                                                </div>
                                                <!--end: Wizard Actions-->
                                                <div></div><div></div><div></div></form>
                                            <!--end: Wizard Form-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Wizard Bpdy-->
                        </div>
                        <!--end: Wizard-->
                    </div>
                </div>


            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    @push('custom-scripts')

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
        <script src="{{asset('assets_dashboard')}}/assets/js/pages/custom/wizard/wizard-4.js"></script>

        <script src="{{asset('assets_dashboard')}}/assets/js/pages/crud/file-upload/image-input.js"></script>
    @endpush
@endsection
