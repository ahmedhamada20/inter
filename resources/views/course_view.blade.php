@include('include.header')
@include('include.nave')
<!-- start banner Area -->
<section class="banner-area relative about-banner mb-40" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    {{$course->name}}
                </h1>
                <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('master')}}"> {{$course->name}}</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<div class="blog-single gray-bg">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-12 m-15px-tb">
                <article class="article">
                    <div class="article-img text-center">
                        <img src="{{asset('upload/course/'.$course->image)}}" title="" alt="">
                    </div>
                    <div class="article-title mt-3">
                        <h6><a href="#">{{$course->category}}</a></h6>
                        <h2>{{$course->name}}</h2>
                    </div>
                    <div class="article-content">
                        <p>{{$course->full_disc}}</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
@include('include.footer')
