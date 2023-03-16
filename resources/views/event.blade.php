@include('include.header')
@include('include.nave')

<!-- start banner Area -->
<section class="banner-area relative about-banner mb-40" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    EVENT
                </h1>
                <p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('event')}}"> EVENT</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

			<!-- Start post-content Area -->
			<section class="post-content-area">
				<div class="container">
					<div class="row">
                        @foreach($all_event as $event)
						<div class="col-md-6 posts-list">
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									<div class="user-details row">
										<p class="date col-lg-12 col-md-12 col-6">{{$event->date}} <span class="lnr lnr-calendar-full"></span></p>
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="{{asset('upload/event/'.$event->image)}}" alt="">
									</div>
									<a class="posts-title"><h3>{{$event->name}}</h3></a>
									<p class="excert">
                                        {{$event->disc}}
                                    </p>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
			</section>
			<!-- End post-content Area -->
@include('include.footer')
