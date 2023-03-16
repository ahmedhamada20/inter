@include('include.header')
@include('include.nave')

<!-- start banner Area -->
<section class="banner-area relative about-banner mb-40" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Doctoral Degrees
                </h1>
                <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('doctoral')}}"> Doctoral</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<div class="container">
    <div class="row">
        @foreach($courses as $course)
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="{{route('course',['id'=>$course->id])}}"> <img class="img" src="{{asset('upload/course/'.$course->image)}}" alt="course"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> {{$course->category}}</h6>
                        <h4 class="blog-card-caption">
                            <a href="{{route('course',['id'=>$course->id])}}">{{$course->name}}</a>
                        </h4>
                        <p class="blog-card-description">{{$course->short_disc}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('include.footer')
