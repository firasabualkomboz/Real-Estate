@extends('layouts.front')

@section('content')
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
                                        <span>Kwitara</span>
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
            <div style="background: url(img/parallax1.jpg) repeat scroll 50% 422.28px transparent;"
                 class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="inner-content">
                    <span><i class="fa fa-bolt"></i></span>
                    <h2>CONTACT US</h2>
                    <ul>
                        <li><a href="#" title="">HOME</a></li>
                        <li><a href="#" title="">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head -->

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-lists-sec">
                            <ul>
                                <li>
                                    <i class="fa fa-phone"></i>+111 (4500032-5) (33333357-0)
                                </li>
                                <li>
                                    <i class="fa fa-at"></i>Company@email.com
                                </li>
                                <li>
                                    <i class="fa fa-support"></i>Get Free Support 24/7
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading4">
                            <h2>CONTACT US</h2>
                            <span>Lorem ipsum dolor</span>
                        </div>
                        <div class="contact-page-sec">
                            <div class="row">
                                <div class="col-md-6 column">
                                    <div class="contact-form">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <i class="fa fa-user"></i>
                                                    <input type="text" placeholder="Name">
                                                </div>
                                                <div class="col-md-12">
                                                    <i class="fa fa-at"></i>
                                                    <input type="text" placeholder="Email">
                                                </div>
                                                <div class="col-md-12">
                                                    <i class="fa fa-pencil"></i>
                                                    <textarea placeholder="Message"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="flat-btn" type="submit">SEND NOW</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                    <div class="contact-details">
                                        <div class="contact-infos">
                                            <ul>
                                                <li>
                                                    <span><i class="fa fa-phone"></i> Address</span>
                                                    <p>765 Shuttle Swift Area <br>at New Born Road </p>
                                                </li>
                                                <li>
                                                    <span><i class="fa fa-fax"></i> Fax/Email</span>
                                                    <p>674-46-7-0, 234-8-987 <br>hello@email.com</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="social-btns">
                                            <li><a title="" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a title="" href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a title="" href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a title="" href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a title="" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a title="" href="#"><i class="fa fa-tumblr"></i></a></li>
                                        </ul>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.72810658868!2d-0.24168151926400253!3d51.5287718408995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2s!4v1452621215004"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="light-footer">
            <div class="bottom-line">
                <div class="container">
                    <span>Copyright All Right Reserved 2016 <a href="http://wwww.kimarotec.com"
                                                               title="">KimaroTec</a></span>
                    <ul>
                        <li><a title="" href="#">HOME</a></li>
                        <li><a title="" href="#">PROPERTIES</a></li>
                        <li><a title="" href="#">PRIVACY</a></li>
                        <li><a title="" href="#">ABOUT</a></li>
                        <li><a title="" href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
        </footer>

    </div>

@endsection
