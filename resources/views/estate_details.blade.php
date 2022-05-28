@extends('layouts.front')
@section('content')

    <div class="theme-layout">



        <header class="simple-header for-sticky white">
            <div class="top-bar">
                <div class="container">
                    <ul class="contact-item">
                        <li><i class="fa fa-envelope-o"></i>yourcompnay@email.com</li>
                        <li><i class="fa fa-mobile"></i>+1 333 44 555 / +1 333 44 500</li>
                    </ul>
                    <div class="choose-language">
                        <a href="#" title="">FR</a>
                        <a href="#" title="">DE</a>
                        <a href="#" title="">EN</a>
                        <a href="#" title="">jp</a>
                    </div>
                </div>
            </div><!-- Top bar -->
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

                            <li class="menu-item-has-children mega">
                                <a href="#" title="">PAGES</a>
                                <ul>
                                    <li><a href="comingsoon.html" title="">Coming Soon</a></li>
                                    <li><a href="agents-listing.html" title="">Agent Listing </a></li>
                                    <li><a href="terms-conditions.html" title="">Terms & conditions</a></li>

                                    <li><a href="agent.html" title="">Agent page</a></li>
                                    <li><a href="agent2.html" title="">Agent 2 page</a></li>
                                    <li><a href="agent3.html" title="">Agent 3 page</a></li>

                                    <li><a href="my-profile.html" title="">Profile page</a></li>
                                    <li><a href="submit.html" title="">Submit page</a></li>
                                    <li><a href="login.html" title="">Login page</a></li>

                                    <li><a href="contact.html" title="">Contact Us</a></li>
                                    <li><a href="404.html" title="">404 Error </a></li>
                                    <li><a href="faq.html" title="">FAQ page</a></li>
                                    <li><a href="faq.html" title="">PROPERTY LEFT SIDE</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#" title="">BLOG PAGES</a>
                                <ul>
                                    <li><a href="blog.html" title="">Blog Page</a></li>
                                    <li><a href="blog-sidebar.html" title="">Blog left Sidebar</a></li>
                                    <li><a href="single.html" title="">Single Post</a></li>
                                    <li><a href="single-left-sidebar.html" title="">Single Left sidebar</a></li>
                                    <li><a href="single-no-sidebar.html" title="">Single No Sidebar</a></li>
                                </ul>
                            </li>

                            <li><a href="contact.html" title="">CONTACT</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </header>


        <div class="inner-head overlap">
            <div style="background: url({{$estate->imageurl }}) repeat scroll 50% 422.28px transparent;"
                 class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="inner-content">
                    <span><i class="ti ti-home"></i></span>
                    <h2>{{$estate->name }}</h2>
                    <ul>
                        <li><a href="#" title="">HOME</a></li>
                        <li><a href="#" title="">The Helux villa</a></li>
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


                                                        <?php foreach (json_decode($estate->images) as $picture) { ?>
                                                            <li data-thumb="img/demo/property1.jpg">
                                                            <img src="{{ asset('/uploads/'.$picture) }}" alt="kwitara"/>
                                                        </li>
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
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{$estate->bedrooms}}</span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Bathrooms</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">{{$estate->bathrooms}}</span>

                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Estate Age</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">	{{$estate->estate_age}}</span>


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
                                            <input type="text" disabled class="form-control form-control-solid form-control-lg" id="pac-input" value="{{$estate->location}}" name="location">

                                            <div id="map" class="mt-3" style="height: 500px;width: 650px;"></div>

                                        </div>


                                        <div class="send-email-to-agent">
                                            <div class="comment-form">
                                                <div class="heading3">
                                                    <h3>Book An Appointment</h3>
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

                                                <form method="post" action="{{route('tenant.makeAppointment')}}">
                                                    @csrf
                                                    <input type="hidden" name="estate_id" value="{{$estate->id}}"/>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-user"></i>
                                                                <input type="date" name="date" placeholder="Date"/>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>
                                                                <i class="fa fa-at"></i>
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
                                                <img src="img/demo/man1.jpg" alt=""/>
                                                <h5>{{$estate->owner->name}}</h5>
                                            </a>
                                        </div>
                                        <div class="agent_social">
                                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                            <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                            <a href="#" title=""><i class="fa fa-tumblr"></i></a>
                                        </div>

                                        <span>
                                            <i class="fa fa-phone"> </i> {{$estate->owner->phone}}
                                        </span>
                                        <span>
                                            <i class="fa fa-envelope"> </i> {{$estate->owner->email}}
                                        </span>


                                        <a href="agent.html" title="" class="btn contact-agent">Find more</a>
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



