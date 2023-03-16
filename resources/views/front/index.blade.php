@extends('front.layouts.master')
@section('title')
    الصفحه الرئسيه
@endsection


@section('contact')
{{-- <div class="top-header-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="header-left-content">
                    <p>Get the latest updates and Sanu's response to COVID-19</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header-right-content">
                    <div class="list">
                        <ul>
                            <li><a href="graduate-admission.html">Students</a></li>
                            <li><a href="campus-life.html">Faculty & Staff</a></li>
                            <li><a href="admission.html">Visitors</a></li>
                            <li><a href="academics.html">Academics</a></li>
                            <li><a href="alumni.html">Alumni</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="navbar-area nav-bg-1">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('front/assets/images/logo.png"') }} class="main-logo" lt="logo">
                        <img src="{{ asset('front/assets/images/white-logo.png') }}" class="white-logo" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('front/assets/images/white-logo.png') }}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle active">
                                Home
                            </a>
                            
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="graduate-admission.html" class="nav-link">Graduate Admission</a>
                                </li>
                                <li class="nav-item">
                                    <a href="campus-life.html" class="nav-link">Campus Life</a>
                                </li>
                                <li class="nav-item">
                                    <a href="alumni.html" class="nav-link">Alumni</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Academics
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="academics.html" class="nav-link">Academics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="academics-details.html" class="nav-link">Academics Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Latest News
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="latest-news.html" class="nav-link">Our Latest News</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="news-details.html" class="nav-link">News Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Users
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="login.html" class="nav-link">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="register.html" class="nav-link">Register</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="recover-password.html" class="nav-link">Recover Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-conditions.html" class="nav-link">Terms And Conditions</a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                </li>
                                <li class="nav-item">
                                    <a href="404.html" class="nav-link">404 Page</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Courses
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="courses.html" class="nav-link">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="courses-details.html" class="nav-link">Courses Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Health Care
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="health-care.html" class="nav-link">Health Care</a>
                                </li>
                                <li class="nav-item">
                                    <a href="health-care-details.html" class="nav-link">Health Care Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Events
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="events.html" class="nav-link">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="events-details.html" class="nav-link">Events Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact-us.html" class="nav-link">Contact Us</a>
                        </li> --}}
                    </ul>
                    <div class="others-options">
                        <div class="icon">
                            <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="icon">
                        <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 
<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
            <div class="modal-body">
                <a href="index.html">
                    <img src="{{ asset('front/assets/images/logo.png') }}" class="main-logo" alt="logo">
                    <img src="{{ asset('front/assets/images/white-logo.png') }}" class="white-logo" alt="logo">
                </a>
                <div class="sidebar-content">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <div class="sidebar-btn">
                        <a href="contact.html" class="default-btn">Let’s Talk</a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <h3>Contact Information</h3>
                    <ul class="info-list">
                        <li><i class="ri-phone-fill"></i> <a href="tel:9901234567">+990-123-4567</a></li>
                        <li><i class="ri-mail-line"></i><a
                                href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#bed6dbd2d2d1fecddfd0cb90ddd1d3"><span
                                    class="__cf_email__"
                                    data-cfemail="b4dcd1d8d8dbf4c7d5dac19ad7dbd9">[email&#160;protected]</span></a>
                        </li>
                        <li><i class="ri-map-pin-line"></i> 413 North Las Vegas, NV 89032</li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank"><i class="flaticon-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" target="_blank"><i class="flaticon-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                class="flaticon-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/?lang=en" target="_blank"><i
                                class="flaticon-instagram"></i></a>
                    </li>
                </ul>
                <div class="contact-form">
                    <h3>Ready to Get Started?</h3>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Your email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" required
                                        data-error="Please enter your phone number" placeholder="Your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" cols="30" rows="6" required
                                        data-error="Please enter your message"
                                        placeholder="Write your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Send Message<span></span></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="banner-area pb-100">
    <div class="container-fluid">
        
        <div class="hero-slider owl-carousel owl-theme" data-slider-id="1">
          

            <div class="slider-item banner-bg-1">
                <div class="slider-content">
                    <h1>Explore Your Potential & Talents In Sanu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                        mattis pulvinar dapibus dolor sit amet consec</p>
                    <a href="courses.html" class="default-btn btn">Start a Journey <i class="flaticon-next"></i></a>
                </div>
            </div>
            <div class="slider-item banner-bg-2">
                <div class="slider-content">
                    <h1>Explore Your Creativity & Talent With Sanu</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                        mattis pulvinar dapibus dolor sit amet consec</p>
                    <a href="courses.html" class="default-btn btn">Start a Journey <i class="flaticon-next"></i></a>
                </div>
            </div>
            <div class="slider-item banner-bg-3">
                <div class="slider-content">
                    <h1>Start Your Beautiful & Bright Future From Here</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut elit tellus luctus nec ullamcorper
                        mattis pulvinar dapibus dolor sit amet consec</p>
                    <a href="courses.html" class="default-btn btn">Start a Journey <i class="flaticon-next"></i></a>
                </div>
            </div>
            
        </div>

        
        <div class="owl-thumbs" data-slider-id="1">
            <button class="owl-thumb-item">
                <img src="{{ asset('front/assets/images/banner/thumb-1.jpg') }}" alt="Images">
            </button>
            <button class="owl-thumb-item">
                <img src="{{ asset('front/assets/images/banner/thumb-2.jpg') }}" alt="Images">
            </button>
            <button class="owl-thumb-item">
                <img src="{{ asset('front/assets/images/banner/thumb-3.jpg') }}" alt="Images">
            </button>
        </div>
    </div>
</div>


<div class="academic-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Academics</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-academics-card">
                    <div class="academic-top-content">
                        <i class="flaticon-college-graduation"></i>
                        <a href="academics-details.html">
                            <h3>Undergraduate Education</h3>
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur ad
                        piscing elit ut elit tellus luctus nec dolor sit amet consec teturul</p>
                    <a href="academics-details.html" class="read-more-btn">Undergraduate Education<i
                            class="flaticon-next"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                data-aos-once="true">
                <div class="single-academics-card">
                    <div class="academic-top-content">
                        <i class="flaticon-graduation"></i>
                        <a href="academics-details.html">
                            <h3>Graduate Education</h3>
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur ad
                        piscing elit ut elit tellus luctus nec dolor sit amet consec teturul</p>
                    <a href="academics-details.html" class="read-more-btn">Graduate Education<i
                            class="flaticon-next"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                data-aos-once="true">
                <div class="single-academics-card">
                    <div class="academic-top-content">
                        <i class="flaticon-writing-tool"></i>
                        <a href="academics-details.html">
                            <h3>Lifelong learning</h3>
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur ad
                        piscing elit ut elit tellus luctus nec dolor sit amet consec teturul</p>
                    <a href="academics-details.html" class="read-more-btn">Lifelong learning<i
                            class="flaticon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="campus-information-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1300"
                data-aos-once="true">
                <div class="campus-content pr-20">
                    <div class="campus-title">
                        <h2>Campus Information</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt
                            ut labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation
                            ulla mco laboris nisi ut </p>
                    </div>
                    <div class="list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <ul>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Graduate Programs</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Programs</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Doctoral Degrees</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Alumni & Giving</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <ul>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Undergraduate</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>International Hubs</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Doctoral Degrees</p>
                                    </li>
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>Global Students</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="counter">
                        <div class="row">
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer" data-count="65">00</span>
                                        <span class="target">+</span>
                                    </h1>
                                    <p>Years Of Experience</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer" data-count="30">00</span>
                                        <span class="target heading-color">k</span><span class="target">+</span>
                                    </h1>
                                    <p>Global Students</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer" data-count="52">00</span>
                                        <span class="target">+</span>
                                    </h1>
                                    <p>Student Nationalities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="campus-life.html" class="default-btn btn">Start your application<i
                            class="flaticon-next"></i></a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1300"
                data-aos-once="true">
                <div class="campus-image pl-20">
                    <img src="{{ asset('front/assets/images/campus-information/campus-1.jpg') }}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="courses-area ptb-100 bg-f4f6f9">
    <div class="container">
        <div class="section-title">
            <h2>Free Courses</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-courses-card">
                    <div class="courses-img">
                        <a href="courses-details.html"><img src="{{ asset('front/assets/images/courses/courses-1.jpg') }}"
                                alt="Image"></a>
                    </div>
                    <div class="courses-content">
                        <div class="admin-profile">
                            <img src="{{ asset('front/assets/images/courses/admin-1.jpg') }}" alt="Image">
                            <p>With <a href="courses-details.html">Jessica Hamson</a></p>
                        </div>
                        <a href="courses-details.html">
                            <h3>Python Programming For Data Science</h3>
                        </a>
                        <div class="bottom-content">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <ul>
                                        <li><i class="flaticon-graduation"></i>321</li>
                                        <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                                    </ul>
                                </li>
                                <li><a href="#">Free</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                data-aos-once="true">
                <div class="single-courses-card">
                    <div class="courses-img">
                        <a href="courses-details.html"><img src="{{ asset('front/assets/images/courses/courses-2.jpg') }}"
                                alt="Image"></a>
                    </div>
                    <div class="courses-content">
                        <div class="admin-profile">
                            <img src="{{ asset('front/assets/images/courses/admin-2.jpg') }}" alt="Image">
                            <p>With <a href="courses-details.html">Christoph Baldwin</a></p>
                        </div>
                        <a href="courses-details.html">
                            <h3>Databases: Advanced Topics In SQL And Athers</h3>
                        </a>
                        <div class="bottom-content">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <ul>
                                        <li><i class="flaticon-graduation"></i>321</li>
                                        <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                                    </ul>
                                </li>
                                <li><a href="#">Free</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                data-aos-once="true">
                <div class="single-courses-card">
                    <div class="courses-img">
                        <a href="courses-details.html"><img src="{{ asset('front/assets/images/courses/courses-3.jpg') }}"
                                alt="Image"></a>
                    </div>
                    <div class="courses-content">
                        <div class="admin-profile">
                            <img src="{{ asset('front/assets/images/courses/admin-3.jpg') }}" alt="Image">
                            <p>With <a href="courses-details.html">Morgen Matthias</a></p>
                        </div>
                        <a href="courses-details.html">
                            <h3>Analyzing Data With MS Excel & Excel</h3>
                        </a>
                        <div class="bottom-content">
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <ul>
                                        <li><i class="flaticon-graduation"></i>321</li>
                                        <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                                    </ul>
                                </li>
                                <li><a href="#">Free</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-courses text-center">
            <p>Select From Hundreds of Options <a href="courses.html" class="read-more-btn active">More on Courses
                    <i class="flaticon-next"></i></a></p>
        </div>
    </div>
</div>


<div class="campus-life-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Campus Life</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-campus-card">
                    <div class="img">
                        <a href="campus-life.html"><img src="{{ asset('front/assets/images/campus-life/campus-life-1.jpg') }}"
                                alt="Image"></a>
                    </div>
                    <div class="campus-content">
                        <span>Art & Culture</span>
                        <a href="campus-life.html">
                            <h3>Art, Exercise And Escapism In Nature</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                data-aos-once="true">
                <div class="single-campus-card">
                    <div class="img">
                        <a href="campus-life.html"><img src="{{ asset('front/assets/images/campus-life/campus-life-2.jpg') }}"
                                alt="Image"></a>
                    </div>
                    <div class="campus-content">
                        <span>Athletics & Fitness</span>
                        <a href="campus-life.html">
                            <h3>Improve Athletic Performance Tips From Sanu</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                data-aos-once="true">
                <div class="single-campus-card">
                    <div class="img">
                        <a href="campus-life.html"><img src="{{ asset('front/assets/images/campus-life/campus-life-3.jpg') }}"
                                alt="Image"></a>
                    </div>
                    <div class="campus-content">
                        <span>Student Life</span>
                        <a href="campus-life.html">
                            <h3>Why I Changed My Mind About Career Connections</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-campus text-center">
            <p>Select From Hundreds of Options. <a href="campus-life.html" class="read-more-btn active">More on
                    Campus Life <i class="flaticon-next"></i></a></p>
        </div>
    </div>
</div>


<div class="admisssion-area bg-f4f6f9 ptb-100">
    <div class="container">
        <div class="admission-content">
            <div class="section-title">
                <h2>Sanu Admission</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper
                    mattis </p>
            </div>
            <div class="admission-image">
                <img src="{{ asset('front/assets/images/admission/admission-1.jpg') }}" alt="Image">
                <div class="icon">
                    <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                            class="ri-play-fill"></i></a>
                </div>
            </div>
            <div class="query text-center">
                <p>If You Have Any Query or Facing any Problem Please Contact Us Via Email</p>
                <a href="admission.html" class="default-btn btn">More on admission<i class="flaticon-next"></i></a>
            </div>
        </div>
    </div>
</div>


<div class="health-care-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Health Care</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-health-care-card">
                    <div class="img">
                        <a href="health-care-details.html"><img src="{{ asset('front/assets/images/health-care/health-care-1.jpg') }}"
                                alt="Image"></a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3>Happiness Begins With Good Health</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet con sec teturo adip iscing elit sed do eiusmod tempor insi
                            didunt ut labore et dolore</p>
                        <a href="health-care.html" class="read-more-btn">Read More on healthcare<i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                data-aos-once="true">
                <div class="single-health-care-card">
                    <div class="img">
                        <a href="health-care-details.html"><img src="{{ asset('front/assets/images/health-care/health-care-2.jpg') }}"
                                alt="Image"></a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3>When Life Depends on Medical Technology</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet con sec teturo adip iscing elit sed do eiusmod tempor insi
                            didunt ut labore et dolore</p>
                        <a href="health-care.html" class="read-more-btn">Read More on healthcare<i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                data-aos-once="true">
                <div class="single-health-care-card">
                    <div class="img">
                        <a href="health-care-details.html"><img src="{{ asset('front/assets/images/health-care/health-care-3.jpg') }}"
                                alt="Image"></a>
                    </div>
                    <div class="health-care-content">
                        <a href="health-care-details.html">
                            <h3> Making A Meaningful Difference In Patients’ lives.</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet con sec teturo adip iscing elit sed do eiusmod tempor insi
                            didunt ut labore et dolore</p>
                        <a href="health-care.html" class="read-more-btn">Read More on healthcare<i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-health-care text-center">
            <p>Select From Hundreds of Options. <a href="health-care.html" class="read-more-btn active">More on
                    healthcare<i class="flaticon-next"></i></a></p>
        </div>
    </div>
</div>


<div class="events-area bg-f4f6f9 ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Events</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-events-card">
                    <div class="events-image">
                        <a href="events-details.html"><img src="{{ asset('front/assets/images/events/events-1.jpg') }}" alt="Image"></a>
                        <div class="date">
                            <span>28</span>
                            <p>Mar</p>
                        </div>
                    </div>
                    <div class="events-content">
                        <div class="admin">
                            <p><a href="events-details.html"><i
                                        class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                        </div>
                        <a href="events-details.html">
                            <h3>Planning And Facilitating Effective Meetings</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                data-aos-once="true">
                <div class="single-events-card">
                    <div class="events-image">
                        <a href="events-details.html"><img src="{{ asset('front/assets/images/events/events-2.jpg') }}" alt="Image"></a>
                        <div class="date">
                            <span>29</span>
                            <p>Mar</p>
                        </div>
                    </div>
                    <div class="events-content">
                        <div class="admin">
                            <p><a href="events-details.html"><i
                                        class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                        </div>
                        <a href="events-details.html">
                            <h3>Regular WordPress Meetup In New Jersey, USA</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                data-aos-once="true">
                <div class="single-events-card">
                    <div class="events-image">
                        <a href="events-details.html"><img src="{{ asset('front/assets/images/events/events-3.jpg') }}" alt="Image"></a>
                        <div class="date">
                            <span>30</span>
                            <p>Mar</p>
                        </div>
                    </div>
                    <div class="events-content">
                        <div class="admin">
                            <p><a href="events-details.html"><i
                                        class="flaticon-student-with-graduation-cap"></i>Raymond Salazar</a></p>
                        </div>
                        <a href="events-details.html">
                            <h3>Monday Night Concert In Lake View,Mountain City</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-health-care text-center">
            <p>Select From Hundreds of Options. <a href="health-care.html" class="read-more-btn active">More on
                    Events<i class="flaticon-next"></i></a></p>
        </div>
    </div>
</div>


<div class="podcasts-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title style2">
                    <h2>Our Podcasts</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper
                        mattis </p>
                </div>
                <div class="single-podcasts-card" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                    data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="podcasts-image">
                                <img src="{{ asset('front/assets/images/podcasts/podcasts-1.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="podcast-content">
                                <span>Episode:1</span>
                                <h3>How To Build Websites That Resonate</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec
                                    ullamcorper mattis</p>
                                <div class="play-icon">
                                    <a class="popup-youtube play-btn"
                                        href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                            class="ri-play-fill"></i><span>play Episode</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-podcasts-card" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                    data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="podcasts-image">
                                <img src="{{ asset('front/assets/images/podcasts/podcasts-2.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="podcast-content">
                                <span>Episode:199</span>
                                <h3>How To Create A Nice Wesite</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec
                                    ullamcorper mattis</p>
                                <div class="play-icon">
                                    <a class="popup-youtube play-btn"
                                        href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                            class="ri-play-fill"></i><span>play Episode</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-podcasts-card" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                    data-aos-once="true">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="podcasts-image">
                                <img src="{{ asset('front/assets/images/podcasts/podcasts-3.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="podcast-content">
                                <span>Episode:1</span>
                                <h3>How To Use Technology To Adapt</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec
                                    ullamcorper mattis</p>
                                <div class="play-icon">
                                    <a class="popup-youtube play-btn"
                                        href="https://www.youtube.com/watch?v=6WQCJx_vEX4"><i
                                            class="ri-play-fill"></i><span>play Episode</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories">
                    <h3>Categories</h3>
                    <ul>
                        <li><a href="#"><i class="flaticon-briefcase"></i>Business</a></li>
                        <li><a href="#"><i class="flaticon-fashion"></i>Fashion</a></li>
                        <li><a href="#"><i class="flaticon-writing-tool"></i>writing</a></li>
                        <li><a href="#"><i class="flaticon-web-development"></i>Development</a></li>
                        <li><a href="#"><i class="flaticon-audio-speaker"></i>Marketing</a></li>
                    </ul>
                </div>
                <div class="subscribe-area">
                    <div class="top-content">
                        <i class="flaticon-email"></i>
                        <h3>Subscribe To Newsletter</h3>
                        <p>Get updates to news & events</p>
                    </div>
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="form-control" placeholder="Your Email" name="EMAIL" required
                            autocomplete="off">
                        <button class="default-btn" type="submit">
                            Subscribe
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="students-stories-area bg-f4f6f9 pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Check Student Stories</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-stories-card">
                    <div class="stories-content">
                        <h3>Why I choose Sanu_Freshman Student</h3>
                    </div>
                    <iframe src="https://www.youtube.com/embed/dT9uXvsH6EU" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                data-aos-once="true">
                <div class="single-stories-card">
                    <div class="stories-content">
                        <h3>Why I choose Sanu University And Teachers</h3>
                    </div>
                    <iframe src="https://www.youtube.com/embed/TM9gjl-8X-E" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                data-aos-once="true">
                <div class="single-stories-card">
                    <div class="stories-content">
                        <h3>Why I choose Sanu Campus And Environment</h3>
                    </div>
                    <iframe src="https://www.youtube.com/embed/yeZpJ6lJC54" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="lates-news-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Latest News</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-news-card">
                    <div class="news-img">
                        <a href="news-details.html"><img src="{{ asset('front/assets/images/news/news-1.jpg') }}" alt="Image"></a>
                    </div>
                    <div class="news-content">
                        <div class="list">
                            <ul>
                                <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a></li>
                                <li><i class="flaticon-tag"></i>Social Sciences</li>
                            </ul>
                        </div>
                        <a href="news-details.html">
                            <h3>Professor Tom Comments On The Volunteer B. Snack Brand</h3>
                        </a>
                        <a href="news-details.html" class="read-more-btn">Read More<i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                data-aos-once="true">
                <div class="single-news-card">
                    <div class="news-img">
                        <a href="news-details.html"><img src="{{ asset('front/assets/images/news/news-2.jpg') }}" alt="Image"></a>
                    </div>
                    <div class="news-content">
                        <div class="list">
                            <ul>
                                <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a></li>
                                <li><i class="flaticon-tag"></i>Social Sciences</li>
                            </ul>
                        </div>
                        <a href="news-details.html">
                            <h3>How To Use Technology To Adapt Your Talent To The World</h3>
                        </a>
                        <a href="news-details.html" class="read-more-btn">Read More<i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                data-aos-once="true">
                <div class="single-news-card">
                    <div class="news-img">
                        <a href="news-details.html"><img src="{{ asset('front/assets/images/news/news-3.jpg') }}" alt="Image"></a>
                    </div>
                    <div class="news-content">
                        <div class="list">
                            <ul>
                                <li><i class="flaticon-user"></i>By <a href="news-details.html">Admin</a></li>
                                <li><i class="flaticon-tag"></i>Social Sciences</li>
                            </ul>
                        </div>
                        <a href="news-details.html">
                            <h3>Here Are The Things To Look For When Selecting An Online Course</h3>
                        </a>
                        <a href="news-details.html" class="read-more-btn">Read More<i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-latest-news text-center">
            <p>Select From Hundreds of Options.<a href="latest-news.html" class="read-more-btn active"> More on
                    News<i class="flaticon-next"></i></a></p>
        </div>
    </div>
</div>

@endsection
