@include('include.header')
@include('include.nave')

<!-- start banner Area -->
<section class="banner-area relative about-banner mb-40" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Certificate Check
                </h1>
                <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('cert-check')}}"> Certificate Check</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<div class="container bootstrap snippets bootdey" style="min-height: 28vh">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form method="post" enctype="multipart/form-data" action="{{url('certificate-search')}}">
                @csrf
                <div class="well search-result">
                    <div class="input-group">
                        <input type="text" name="serial" class="form-control" placeholder="Check Your Certificate by Number">
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-lg" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                                Check
                            </button>
                        </span>
                    </div>
                </div>
            </form>
            @isset($fail)
                <div class="alert alert-danger" role="alert">
                    <p>{{ $fail }}</p>
                </div>
            @endisset
            @isset($result)
                <div class="">
                <div class="row">
                    <a href="#">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-12">
                            <img class="" src="{{asset('upload/cert/'.$result->image)}}" alt="" style="width: 100%">
                        </div>
                        <div class="col-xs-6 col-sm-9 col-md-9 col-lg-10 title">
                            <h3 class="mt-3">{{$result->name}}</h3>
                            <p>Certificate Number :  {{$result->number}}</p>
                            <p>Student Nationality :  {{$result->natoinalty}}</p>
                            <p>Study :  {{$result->study}}</p>
                        </div>
                    </a>
                </div>
                </div>
            @endisset

        </div>
    </div>
</div>
@include('include.footer')
