@include('include.header')
@include('include.nave')

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
                                {{$home->slider_heading}}
							</h1>
							<p class="pt-10 pb-10">
                                {{$home->slider_disc}}							</p>
							<a href="{{$home->button_link}}" class="primary-btn text-uppercase">{{$home->button_text}}</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>{{$home->tab_title_1}}</h4>
								</div>
								<div class="desc-wrap">
									<p>
                                        {{$home->tab_disc_1}}
									</p>

								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>{{$home->tab_title_2}}</h4>
								</div>
								<div class="desc-wrap">
									<p>
                                        {{$home->tab_disc_2}}
                                    </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>{{$home->tab_title_3}}</h4>
								</div>
								<div class="desc-wrap">
									<p>
                                        {{$home->tab_disc_3}}
									</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End feature Area -->

			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">{{$home->course_heading}}</h1>
								<p>{{$home->course_disc}}</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-popular-carusel">
                            @foreach($courses as $course)
                                <div class="single-popular-carusel">
                                    <div class="thumb-wrap relative">
                                        <div class="thumb relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{asset('upload/course/'.$course->image)}}" alt="">
                                        </div>
                                        <div class="meta d-flex justify-content-between">
                                                <p><span><i class="fa-solid fa-database"></i></span> {{$course->category}}</p>
                                            <a class="btn btn-primary text-white">{{$course->cost}}</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <a href="{{route('course',['id'=>$course->id])}}"><h4>{{$course->name}}</h4></a>
                                        <p></p>
                                    </div>
                                </div>
                            @endforeach
						</div>
					</div>
				</div>
			</section>
			<!-- End popular-course Area -->


			<!-- Start search-course Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container " style="padding-top: 1rem;padding-bottom: 1rem">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
                                {{$home->select_title}}
							</h1>
							<p>
                                {{$home->select_disc}}							</p>
							<div class="row details-content">
								<div class="col single-detials">
                                    {!!$home->select_icon_1  !!}
									<a href="#"><h4>{{$home->select_heading_1}}</h4></a>
									<p>
                                        {{$home->select_disc_1}}
                                    </p>
								</div>
								<div class="col single-detials">
                                    {!!$home->select_icon_2  !!}
									<a href="#"><h4>{{$home->select_heading_2}}</h4></a>
									<p>
                                        {{$home->select_disc_2}}
                                    </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap pb-20">
							<form class="form-wrap" action="{{route('store-form')}}" method="post" enctype="multipart/form-data">
                                @csrf
								<h4 class="text-white pt-20 pb-20 text-center mb-30">{{$home->form_title}}</h4>
                                @if(session()->has('message'))
                                    <div class="alert alert-success" role="alert">
                                        <p>{{ session()->get('message') }}</p>
                                    </div>
                                @endif
								<input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
								<input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
								<input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
								<div class="form-select" id="service-select">
									<select name="course">
										<option datd-display="">Choose Course</option>
                                        @foreach($courses as $course)
										<option value="{{$course->name}}">{{$course->name}}</option>
                                        @endforeach
									</select>
								</div>
								<button class="primary-btn text-uppercase">Register Course</button>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End search-course Area -->


			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap mb-5">
				<div class="container pt-20">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">{{$home->event_heading}}</h1>
								<p>{{$home->event_disc}}</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-upcoming-event-carusel">
                            @foreach($all_event as $event)
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{asset('upload/event/'.$event->image)}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>{{$event->date}}</p>
									<a href="#"><h4>{{$event->name}}</h4></a>
									<p>
                                        {!!  substr(strip_tags($event->disc), 0, 150) !!}
                                    </p>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
			</section>
			<!-- End upcoming-event Area -->
@include('include.footer')

