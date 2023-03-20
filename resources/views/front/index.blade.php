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
                        <img src="{{ asset('front/assets/images/logo.png"') }}" class="main-logo" alt="logo">
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
          

            @foreach (App\Models\Slider::all() as $slider)
            <div class="slider-item" style="background-image: url({{ $slider->photo }})">
                <div class="slider-content">
                    <h1>{{ $slider->name }}</h1>
                    <p>
                        {{ $slider->notes }}
                    </p>
                    <a href="courses.html" class="default-btn btn">Start a Journey <i class="flaticon-next"></i></a>
                </div>
            </div>

            @endforeach
            
        </div>

        
        <div class="owl-thumbs" data-slider-id="1">
            @foreach (App\Models\Slider::all() as $slider)
            <button class="owl-thumb-item">
                <img src="{{ $slider->smils }}"  width="200px" height="150px" alt="Images">
            </button>

            @endforeach
           
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
            @foreach (App\Models\Academic::all() as $Academic)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-academics-card">
                    <div class="academic-top-content">
                        <i class="flaticon-college-graduation"></i>
                        <a href="academics-details.html">
                            <h3>
                                {{ $Academic->name }}
                            </h3>
                        </a>
                    </div>
                    <p>{{ $Academic->notes }}</p>
                    {{-- <a href="academics-details.html" class="read-more-btn">Undergraduate Education<i
                            class="flaticon-next"></i></a> --}}
                </div>
            </div>

            @endforeach
           
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
                        <h2>{{ App\Models\About::first()->name }}</h2>
                        <p>
                            {{ App\Models\About::first()->notes }} 
                        </p>
                    </div>
                    <div class="list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <ul>
                                    @if(App\Models\About::first()->futhre_1)
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>{{App\Models\About::first()->futhre_1}}</p>
                                    </li>
                                        
                                    @endif
                                    @if(App\Models\About::first()->futhre_2)
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>{{App\Models\About::first()->futhre_2}}</p>
                                    </li>
                                        
                                    @endif
                                    @if(App\Models\About::first()->futhre_3)
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>{{App\Models\About::first()->futhre_3}}</p>
                                    </li>
                                        
                                    @endif
                                    @if(App\Models\About::first()->futhre_4)
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>{{App\Models\About::first()->futhre_4}}</p>
                                    </li>
                                        
                                    @endif
                                   
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <ul>
                                    @if(App\Models\About::first()->futhre_5)
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>{{App\Models\About::first()->futhre_5}}</p>
                                    </li>
                                        
                                    @endif
                                   
                                    @if(App\Models\About::first()->futhre_6)
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>{{App\Models\About::first()->futhre_6}}</p>
                                    </li>
                                        
                                    @endif
                                    @if(App\Models\About::first()->futhre_7)
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>{{App\Models\About::first()->futhre_7}}</p>
                                    </li>
                                        
                                    @endif
                                    @if(App\Models\About::first()->futhre_8)
                                    <li>
                                        <i class="ri-check-fill"></i>
                                        <p>{{App\Models\About::first()->futhre_8}}</p>
                                    </li>
                                        
                                    @endif
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="counter">
                        <div class="row">


                            @if(App\Models\About::first()->number_title_1)
                            
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer" data-count="{{ App\Models\About::first()->number_1 }}">00</span>
                                        <span class="target">+</span>
                                    </h1>
                                    <p>
                                        {{ App\Models\About::first()->number_title_1 }}
                                    </p>
                                </div>
                            </div>
                                
                            @endif
                            @if(App\Models\About::first()->number_title_2)
                            
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer" data-count="{{ App\Models\About::first()->number_2 }}">00</span>
                                        <span class="target">+</span>
                                    </h1>
                                    <p>
                                        {{ App\Models\About::first()->number_title_2 }}
                                    </p>
                                </div>
                            </div>
                                
                            @endif
                            @if(App\Models\About::first()->number_title_3)
                            
                            <div class="col-lg-4 col-4">
                                <div class="counter-card">
                                    <h1>
                                        <span class="odometer" data-count="{{ App\Models\About::first()->number_3 }}">00</span>
                                        <span class="target">+</span>
                                    </h1>
                                    <p>
                                        {{ App\Models\About::first()->number_title_3 }}
                                    </p>
                                </div>
                            </div>
                                
                            @endif

                           
                        </div>
                    </div>
                    <a href="campus-life.html" class="default-btn btn">Start your application<i
                            class="flaticon-next"></i></a>
                </div>
            </div>
            @if(App\Models\About::first()->image)
            <div class="col-lg-6" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1300"
            data-aos-once="true">
            <div class="campus-image pl-20">
                <img src="{{ App\Models\About::first()->photo }}" alt="Image">
            </div>
        </div>
                
            @endif
           
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

@foreach (App\Models\Course::inRandomOrder()->limit(3)->get() as $courses)
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
data-aos-once="true">
<div class="single-courses-card">
    <div class="courses-img">
        <a href="courses-details.html"><img src="{{ asset('upload/course/'.$courses->image) }}"
                alt="Image"></a>
    </div>
    <div class="courses-content">
        <div class="admin-profile">
            <img src="{{ asset('front/assets/images/courses/admin-1.jpg') }}" alt="Image">
            <p>With <a href="courses-details.html">
                {{ $courses->name }}    
            </a></p>
        </div>
        <a href="courses-details.html">
            <h3>
                {{ $courses->name }}
            </h3>
        </a>
        {{-- <div class="bottom-content">
            <ul class="d-flex justify-content-between">
                <li>
                    <ul>
                        <li><i class="flaticon-graduation"></i>321</li>
                        <li><i class="flaticon-bubble-chat"></i>1.2k</li>
                    </ul>
                </li>
                <li><a href="#">Free</a></li>
            </ul>
        </div> --}}
    </div>
</div>
</div>
@endforeach

        



        




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
            @foreach (App\Models\Campus::inRandomOrder()->limit(3)->get() as $campus)

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-campus-card">
                    <div class="img">
                        <a href="campus-life.html"><img src="{{ $campus->photo }}"
                                alt="Image"></a>
                    </div>
                    <div class="campus-content">
                        <span>{{ $campus->notes }}</span>
                        <a href="campus-life.html">
                            <h3>
                                {{ $campus->name }}
                            </h3>
                        </a>
                    </div>
                </div>
            </div>

            @endforeach
            {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
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
            </div> --}}
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
                <p>
                    {{ App\Models\Admission::first()->notes_1 }} 
                </p>
            </div>
            <div class="admission-image">
                <img src="{{ App\Models\Admission::first()->photo }}" alt="Image">
                <div class="icon">
                    <a class="popup-youtube play-btn" href="{{ App\Models\Admission::first()->url }}"><i
                            class="ri-play-fill"></i></a>
                </div>
            </div>
            <div class="query text-center">
                <p>
                    {{ App\Models\Admission::first()->notes_2 }}
                </p>
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
           
           @foreach (App\Models\Health::inRandomOrder()->limit(3)->get() as $health)
           <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
           data-aos-once="true">
           <div class="single-health-care-card">
               <div class="img">
                   <a href="health-care-details.html"><img src="{{ $health->photo }}"
                           alt="Image"></a>
               </div>
               <div class="health-care-content">
                   <a href="health-care-details.html">
                       <h3>
                        {{ $health->name }}
                       </h3>
                   </a>
                   <p>
                    {{ $health->name }}
                   </p>
                   <a href="health-care.html" class="read-more-btn">Read More on healthcare<i
                           class="flaticon-next"></i></a>
               </div>
           </div>
       </div>
           @endforeach
            
           
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
            @foreach (App\Models\Event::inRandomOrder()->limit(3)->get() as $event)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="single-events-card">
                    <div class="events-image">
                        <a href="events-details.html"><img src="{{ asset('upload/event/' . $event->image) }}" alt="Image"></a>
                        <div class="date">
                            <span>{{ $event->created_at->format('d') }}</span>
                            <p>{{ $event->created_at->format('M') }}</p>
                        </div>
                    </div>
                    <div class="events-content">
                        <div class="admin">
                            <p><a href="events-details.html"><i
                                        class="flaticon-student-with-graduation-cap"></i>
                                        {{ Str::limit($event->disc,250) }}
                                    </a></p>
                        </div>
                        <a href="events-details.html">
                            <h3>Planning And Facilitating Effective Meetings</h3>
                        </a>
                    </div>
                </div>
            </div>
           @endforeach
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

                @foreach (App\Models\Podcast::inRandomOrder()->limit(3)->get() as $podcast)
                <div class="single-podcasts-card" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                data-aos-once="true">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="podcasts-image">
                            <img src="{{ $podcast->photo }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="podcast-content">
                          
                            <h3>
                                {{ $podcast->name }}
                            </h3>
                            <p>
                                {{ $podcast->notes }}
                            </p>
                            <div class="play-icon">
                                <a class="popup-youtube play-btn"
                                    href="{{ $podcast->url }}"><i
                                        class="ri-play-fill"></i><span>play Episode</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach

             
               
            </div>
            <div class="col-lg-4">
                <div class="categories">
                    <h3>Categories</h3>
                    <ul>
                        @foreach (App\Models\Category::inRandomOrder()->limit(8)->get() as $category)
                        <li><a href="#"><i class="flaticon-briefcase"></i>
                            {{ $category->name }}
                        </a></li>
                        @endforeach
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
            @foreach (App\Models\Stories::inRandomOrder()->limit(3)->get() as $stories)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
            data-aos-once="true">
            <div class="single-stories-card">
                <div class="stories-content">
                    <h3>
                        {{ $stories->name }}
                    </h3>
                </div>
                <iframe src="{{ $stories->url }}" title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
            @endforeach
       
          
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
