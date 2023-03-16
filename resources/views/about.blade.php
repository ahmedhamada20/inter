@include('include.header')
@include('include.nave')

			<!-- start banner Area -->
			<section class="banner-area relative about-banner mb-40" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
                                {{$about_page->heading}}
							</h1>
							<p class="text-white link-nav"><a href="{{route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('about')}}"> About Us</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<!-- Start info Area -->
			<section class="info-area pb-120">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 no-padding info-area-left">
							<img class="img-fluid" src="{{asset('upload/about/'.$about_page->who_image)}}" alt="">
						</div>
						<div class="col-lg-6 info-area-right">
							<h1>{{$about_page->who_title}}</h1>
							<p>{{$about_page->who_disc}}</p>
						</div>
					</div>
				</div>
			</section>
			<!-- End info Area -->

			<!-- Start course-mission Area -->
			<section class="course-mission-area pb-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">{{$about_page->why_heading}}</h1>
								<p>{{$about_page->why_disc}}</p>
							</div>
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-6 accordion-left">

                            <!-- accordion 2 start-->
                            <dl class="accordion">
                                <dt>
                                    <a href="">{{$about_page->tab_title_1}}</a>
                                </dt>
                                <dd>
                                    {{$about_page->tab_disc_1}}
                                </dd>
                                <dt>
                                    <a href="">{{$about_page->tab_title_2}}</a>
                                </dt>
                                <dd>
                                    {{$about_page->tab_disc_2}}
                                </dd>
                                <dt>
                                    <a href="">{{$about_page->tab_title_3}}</a>
                                </dt>
                                <dd>
                                    {{$about_page->tab_disc_3}}
                                </dd>
                                <dt>
                                    <a href="">{{$about_page->tab_title_4}}</a>
                                </dt>
                                <dd>
                                    {{$about_page->tab_disc_4}}
                                </dd>
                            </dl>
                            <!-- accordion 2 end-->
                        </div>
                        <div class="col-md-6  justify-content-center align-items-center d-flex relative">
                        	<div class="overlay overlay-bg"></div>
							<img class="img-fluid mx-auto" src="{{asset('upload/about/'.$about_page->why_image)}}" alt="">
                        </div>
                    </div>
				</div>
			</section>
			<!-- End course-mission Area -->

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>{{$about_page->ask_heading}}</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="{{$about_page->button_link}}">{{$about_page->button_text}}</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End cta-two Area -->

@include('include.footer')
