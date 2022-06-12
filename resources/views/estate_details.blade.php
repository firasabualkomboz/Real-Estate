@extends('layouts.front')
@section('content')

    <div class="theme-layout">

        @include('include.front.header')



        <div class="inner-head overlap">
            <div
                style="background: url(   {{  asset('/uploads/'.$estate->images['0']) ?? ''  }}) repeat scroll 50% 422.28px transparent;"
                class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="inner-content">
                    <span><i class="ti ti-home"></i></span>
                    <h2>{{$estate->name }}</h2>
                    <ul>
                        <li><a href="#" title="">Type Estate </a></li>
                        <li><a href="#" title=""> {{$estate->property->name}}</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head -->

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8 column">
                                <div class="single-post-sec">
                                    <div class="blog-post property-post">
                                        <div class="property-gallery">
                                            <div class="light-slide-item">
                                                <div class="favorite-and-print">
                                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">


                                                        {{--                                                        <?php--}}
                                                        {{--                                                                --}}
                                                        {{--                                                        foreach ($estate->images as $picture) { ?>--}}
                                                        {{--                                                        <li data-thumb="{{ asset('/uploads/'.$picture) }}">--}}
                                                        {{--                                                            <img src="{{ asset('/uploads/'.$picture) }}"--}}
                                                        {{--                                                                 alt="{{$estate->name}}"/>--}}
                                                        {{--                                                        </li>--}}
                                                        {{--                                                        <?php } ?>--}}
                                                        <?php foreach (json_decode($estate->images)as $picture) { ?>
                                                        <img src="{{ asset('/uploads/'.$picture) }}" width="100%"
                                                             class="border"/>

                                                        <?php } ?>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <h1>Rent : {{$estate->rent}}$</h1>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="property-detail">

                                                    <div class="detail-field row">
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Type</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#"
                                                                                                              rel="tag">{{$estate->property->name}}</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Status</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#"
                                                                                                              rel="tag">{{$estate->status}}</a></span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Location</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#"
                                                                                                              rel="tag">{{$estate->location}}</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Price</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">
                                                            <span class="amount">$ {{$estate->rent}} </span> /month
                                                        </span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Area</span>
                                                        <span
                                                            class="col-xs-6 col-md-7 detail-field-value">{{$estate->area}} sqft</span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Bedrooms</span>
                                                        <span
                                                            class="col-xs-6 col-md-7 detail-field-value">{{$estate->bedrooms}}</span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Bathrooms</span>
                                                        <span
                                                            class="col-xs-6 col-md-7 detail-field-value">{{$estate->bathrooms}}</span>

                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Estate Age</span>
                                                        <span
                                                            class="col-xs-6 col-md-7 detail-field-value">	{{$estate->estate_age}}</span>


                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    {{$estate->description}}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="property-feature">
                                            <div class="heading3">
                                                <h3>Estate Features </h3>
                                            </div>

                                            <div class="property-feature-content clearfix">
                                                @foreach($estate->tags as $tag)
                                                    <div class="has">
                                                        <i class="fa fa-check-circle"></i> {{$tag->name}}
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>


                                        <div class="property-map">
                                            <div class="heading3">
                                                <h3>Estate Location on map </h3>
                                            </div>
                                            {{--                                            <div id="propertyMap"></div>--}}
                                            <input type="text" disabled
                                                   class="form-control form-control-solid form-control-lg"
                                                   id="pac-input" value="{{$estate->location}}" name="location">

                                            <div id="map" class="mt-3" style="height: 500px;width: 650px;"></div>

                                        </div>


                                        <div class="send-email-to-agent" id="appointment">
                                            <div class="comment-form">
                                                <div class="heading3">
                                                    <h3>Book An Appointment</h3>
                                                </div>
                                                @if(session('success'))
                                                    <h1>{{session('success')}}</h1>
                                                @endif

                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <form method="post" action="{{route('makeAppointment')}}">
                                                    @csrf
                                                    <input type="hidden" name="apartment_id"
                                                           value="{{$estate->id}}"/>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-user"></i>
                                                                <input type="text" name="name" placeholder="Name"/>
                                                            </label>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-user"></i>
                                                                <input type="email" name="email" placeholder="Email"/>
                                                            </label>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-user"></i>
                                                                <input type="text" name="phone"
                                                                       placeholder="97059 00 00 00 0"/>
                                                            </label>
                                                        </div>


                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-calendar"></i>
                                                                <input type="date" name="date" placeholder="Date"/>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-calendar-times-o"></i>
                                                                <input type="time" name="time" placeholder="Time"/>
                                                            </label>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-pencil"></i>
                                                                <textarea name="note"
                                                                          placeholder="Your Note"></textarea>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" class="flat-btn">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div><!-- Blog Post -->
                                </div><!-- Blog POst Sec -->
                            </div>
                            <aside class="col-md-4 column">

                                <div class="agent_bg_widget widget">
                                    <div class="agent_widget">
                                        <div class="agent_pic">
                                            <a href="agent.html" title="">
                                                <img src="{{$estate->owner->imageurl}}" alt=""/>
                                                <h5>{{$estate->owner->name}}</h5>
                                            </a>
                                        </div>

                                        <span>
                                            <i class="fa fa-phone"> </i> {{$estate->owner->phone}}
                                        </span>
                                        <span>
                                            <i class="fa fa-envelope"> </i> {{$estate->owner->email}}
                                        </span>


                                        <a href="agent.html" title="" id="book" class="btn contact-agent">Book An
                                            Appointment
                                        </a>
                                    </div>
                                </div><!-- Follow Widget -->


                                <div class="search_widget widget">
                                    <div class="heading2">
                                        <h3>SEARCH PROPERTIES</h3>
                                    </div>
                                    <div class="search-form">
                                        <form action="properties.html" method="get" class="form-inline">
                                            <div class="search-form-content">
                                                <div class="search-form-field">
                                                    <div class="form-group col-md-12">
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
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control" name="s_sub_location">
                                                                <option>All Sub-locations</option>
                                                                <option>Central New York</option>
                                                                <option>GreenVille</option>
                                                                <option>Long Island</option>
                                                                <option>New York City</option>
                                                                <option>West Side</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control" name="s_cat">
                                                                <option>All Categories</option>
                                                                <option>Apartment</option>
                                                                <option>Load</option>
                                                                <option>Office Building</option>
                                                                <option>House</option>
                                                                <option>Villa</option>
                                                                <option>Retail</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control" name="s_statu">
                                                                <option> All Status</option>
                                                                <option>Open house</option>
                                                                <option>Rent</option>
                                                                <option>Boy</option>
                                                                <option>used</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control">
                                                                <option>No. of Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control">
                                                                <option>No. of Bed</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <span class="gprice-label">Price</span>
                                                        <input type="text" class="span2" value="" data-slider-min="0"
                                                               data-slider-max="600" data-slider-step="5"
                                                               data-slider-value="[0,450]" id="price-range">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <span class="garea-label">Area</span>
                                                        <input type="text" class="span2" value="" data-slider-min="0"
                                                               data-slider-max="600" data-slider-step="5"
                                                               data-slider-value="[50,450]" id="property-geo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-form-submit">
                                                <button type="submit" class="btn-search">Search</button>
                                            </div>
                                        </form>
                                    </div><!-- Services Sec -->
                                </div><!-- Category Widget -->
                            </aside>
                        </div>

                        <div class="related-properties-">
                            <div class="heading3">
                                <h3>RELATED PROPERTIES</h3>
                                <span>Lorem ipsum dolor amet</span>
                            </div>
                            <div class="related">
                                <div class="related-properties-items">
                                    <div class="item">
                                        <div class="properties-box">
                                            <div class="properties-thumb">
                                                <img src="img/demo/property1.jpg" alt=""/>
                                                <span class="spn-status"> For Rent </span>
                                                <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                                <ul class="property-info">
                                                    <li>
                                                        <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                    </li>
                                                    <li class="li-rl"></li>
                                                    <li>
                                                        <i class="fa  fa-bed"></i><span>  5   </span>
                                                    </li>
                                                    <li class="li-rl"></li>
                                                    <li>
                                                        <i class="fa  fa-building"> </i> <span>3   </span>
                                                    </li>
                                                </ul>
                                                <div class="user-preview">
                                                    <a class="col" href="agent.html">
                                                        <img alt="Camilė" class="avatar avatar-small" src="img/4.png"
                                                             title="Camilė">
                                                    </a>
                                                </div>
                                                <a class="proeprty-sh-more" href="property.html"><i
                                                        class="ti ti-share"> </i></a>

                                            </div>
                                            <h3><a href="property.html" title="">The Helux villa</a></h3>
                                            <span class="price">$444000</span>

                                        </div><!-- prop Box -->
                                    </div>
                                    <div class="item">
                                        <div class="properties-box">
                                            <div class="properties-thumb">
                                                <img src="img/demo/property1.jpg" alt=""/>
                                                <span class="spn-status"> For Rent </span>
                                                <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                                <ul class="property-info">
                                                    <li>
                                                        <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                    </li>
                                                    <li class="li-rl"></li>
                                                    <li>
                                                        <i class="fa  fa-bed"></i><span>  5   </span>
                                                    </li>
                                                    <li class="li-rl"></li>
                                                    <li>
                                                        <i class="fa  fa-building"> </i> <span>3   </span>
                                                    </li>
                                                </ul>
                                                <div class="user-preview">
                                                    <a class="col" href="agent.html">
                                                        <img alt="Camilė" class="avatar avatar-small" src="img/4.png"
                                                             title="Camilė">
                                                    </a>
                                                </div>
                                                <a class="proeprty-sh-more" href="property.html"><i
                                                        class="ti ti-share"> </i></a>

                                            </div>
                                            <h3><a href="property.html" title="">The Helux villa</a></h3>
                                            <span class="price">$444000</span>

                                        </div><!-- prop Box -->
                                    </div>
                                    <div class="item">
                                        <div class="properties-box">
                                            <div class="properties-thumb">
                                                <img src="img/demo/property1.jpg" alt=""/>
                                                <span class="spn-status"> For Rent </span>
                                                <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                                <ul class="property-info">
                                                    <li>
                                                        <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                    </li>
                                                    <li class="li-rl"></li>
                                                    <li>
                                                        <i class="fa  fa-bed"></i><span>  5   </span>
                                                    </li>
                                                    <li class="li-rl"></li>
                                                    <li>
                                                        <i class="fa  fa-building"> </i> <span>3   </span>
                                                    </li>
                                                </ul>
                                                <div class="user-preview">
                                                    <a class="col" href="agent.html">
                                                        <img alt="Camilė" class="avatar avatar-small" src="img/4.png"
                                                             title="Camilė">
                                                    </a>
                                                </div>
                                                <a class="proeprty-sh-more" href="property.html"><i
                                                        class="ti ti-share"> </i></a>

                                            </div>
                                            <h3><a href="property.html" title="">The Helux villa</a></h3>
                                            <span class="price">$444000</span>

                                        </div><!-- prop Box -->
                                    </div>
                                    <div class="item">
                                        <div class="properties-box">
                                            <div class="properties-thumb">
                                                <img src="img/demo/property1.jpg" alt=""/>
                                                <span class="spn-status"> For Rent </span>
                                                <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                                <ul class="property-info">
                                                    <li>
                                                        <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                    </li>
                                                    <li class="li-rl"></li>
                                                    <li>
                                                        <i class="fa  fa-bed"></i><span>  5   </span>
                                                    </li>
                                                    <li class="li-rl"></li>
                                                    <li>
                                                        <i class="fa  fa-building"> </i> <span>3   </span>
                                                    </li>
                                                </ul>
                                                <div class="user-preview">
                                                    <a class="col" href="agent.html">
                                                        <img alt="Camilė" class="avatar avatar-small" src="img/4.png"
                                                             title="Camilė">
                                                    </a>
                                                </div>
                                                <a class="proeprty-sh-more" href="property.html"><i
                                                        class="ti ti-share"> </i></a>

                                            </div>
                                            <h3><a href="property.html" title="">The Helux villa</a></h3>
                                            <span class="price">$444000</span>

                                        </div><!-- prop Box -->
                                    </div>
                                    <div class="item">
                                        <div class="properties-box">
                                            <div class="properties-thumb">
                                                <img src="img/demo/property1.jpg" alt=""/>
                                                <span class="spn-status"> For Rent </span>
                                                <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                                <ul class="property-info">
                                                    <li>
                                                        <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                    </li>
                                                    <li class="li-rl"></li>
                                                    <li>
                                                        <i class="fa  fa-bed"></i><span>  5   </span>
                                                    </li>
                                                    <li class="li-rl"></li>
                                                    <li>
                                                        <i class="fa  fa-building"> </i> <span>3   </span>
                                                    </li>
                                                </ul>
                                                <div class="user-preview">
                                                    <a class="col" href="agent.html">
                                                        <img alt="Camilė" class="avatar avatar-small" src="img/4.png"
                                                             title="Camilė">
                                                    </a>
                                                </div>
                                                <a class="proeprty-sh-more" href="property.html"><i
                                                        class="ti ti-share"> </i></a>

                                            </div>
                                            <h3><a href="property.html" title="">The Helux villa</a></h3>
                                            <span class="price">$444000</span>

                                        </div><!-- prop Box -->
                                    </div>
                                    <div class="item">
                                        <div class="properties-box">
                                            <div class="properties-thumb">
                                                <img src="img/demo/property1.jpg" alt=""/>
                                                <span class="spn-status"> For Rent </span>
                                                <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                                <ul class="property-info">
                                                    <li>
                                                        <i class="fa  fa-retweet"> </i> <span>1913 sqft </span>
                                                    </li>
                                                    <li class="li-rl"></li>
                                                    <li>
                                                        <i class="fa  fa-bed"></i><span>  5   </span>
                                                    </li>
                                                    <li class="li-rl"></li>
                                                    <li>
                                                        <i class="fa  fa-building"> </i> <span>3   </span>
                                                    </li>
                                                </ul>
                                                <div class="user-preview">
                                                    <a class="col" href="agent.html">
                                                        <img alt="Camilė" class="avatar avatar-small" src="img/4.png"
                                                             title="Camilė">
                                                    </a>
                                                </div>
                                                <a class="proeprty-sh-more" href="property.html"><i
                                                        class="ti ti-share"> </i></a>

                                            </div>
                                            <h3><a href="property.html" title="">The Helux villa</a></h3>
                                            <span class="price">$444000</span>

                                        </div><!-- prop Box -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- Related Posts -->

                    </div>
                </div>
            </div>
        </section>

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

@endsection



