@extends('layouts.front')
@section('content')

    <div class="theme-layout">


        @include('include.front.header')
        <div class="inner-head overlap">
            <div style="background: url({{$apartment->imageurl }}) repeat scroll 50% 422.28px transparent;"
                 class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="inner-content">
                    <span><i class="ti ti-home"></i></span>
                    <h2>{{$apartment->name }}</h2>
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
                                                        <?php foreach (json_decode($apartment->photos)as $picture) { ?>


                                                        <li data-thumb="{{ asset('/uploads/'.$picture) }}">
                                                            <img src="{{ asset('/uploads/'.$picture) }}" width="100%"
                                                                 class="border"/>
                                                        </li>

                                                        <?php } ?>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <h1>Price : 2000000$</h1>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="property-detail">

                                                    <div class="detail-field row">
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Type</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#"
                                                                                                              rel="tag">Apartment</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Status</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#"
                                                                                                              rel="tag">Sold</a></span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Location</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><a href="#"
                                                                                                              rel="tag">{{$apartment->estate->location}}</a></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Price</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">
                                                            <span class="amount">$ {{$apartment->price}}</span> /month
                                                        </span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">{{$apartment->rooms}}</span>
                                                        <span
                                                            class="col-xs-6 col-md-7 detail-field-value">762 sqft</span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Bedrooms</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">3</span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Bathrooms</span>
                                                        <span
                                                            class="col-xs-6 col-md-7 detail-field-value">{{$apartment->bathroom}}</span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Lot Area</span>
                                                        <span
                                                            class="col-xs-6 col-md-7 detail-field-value">880 ftsq</span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Year Built</span>
                                                        <span
                                                            class="col-xs-6 col-md-7 detail-field-value">{{$apartment->year_built}}</span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Flooring</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">Stone</span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Roofling</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">Tile</span>
                                                        <span
                                                            class="col-xs-6 col-md-5 detail-field-label">Parking</span>
                                                        <span
                                                            class="col-xs-6 col-md-7 detail-field-value">5 slots</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <p>
                                                    {{$apartment->description}}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="property-feature">
                                            <div class="heading3">
                                                <h3>Property Features </h3>
                                            </div>
                                            <div class="property-feature-content clearfix">
                                                @foreach($apartment->estate->tags as $tag)
                                                    <div class="has">
                                                        <i class="fa fa-check-circle"></i> {{$tag->name}}
                                                    </div>
                                                @endforeach

                                            </div>
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
                                                           value="{{$apartment->id}}"/>

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
                                                <img src="{{$apartment->estate->imageurl}}" alt=""/>
                                                <h5>{{$apartment->estate->name}}</h5>
                                            </a>
                                        </div>

                                        <span>
                                            <i class="fa fa-phone"> </i> 970598082086
                                        </span>
                                        <span>
                                            <i class="fa fa-envelope"> </i> manager@estate.com
                                        </span>


                                        <a href="#appointment" title="" class="btn contact-agent">Make An Appointment

                                        </a>
                                    </div>
                                </div><!-- Follow Widget -->


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

        @include('include.front.footer')

    </div>




    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

@endsection



