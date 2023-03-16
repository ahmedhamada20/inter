@include('include.header')
@include('include.nave')
<!-- start banner Area -->
<section class="banner-area relative about-banner mb-40" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    {{$partner->page_name}}
                </h1>
                <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('partner')}}"> Partner</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<div class="container text-center" style="height: 100vh">
    <h2>Our Partner</h2>
    <div class="row mt-5">
        @foreach($partners as $par)
        <div class="col-md-3">
            <div class="thumbnail">
                    <img  src="{{asset('upload/partner/'.$par->image)}}" alt="Lights" style="width:150px; height: 150px">
            </div>
        </div>
        @endforeach
    </div>
</div>


@include('include.footer')
