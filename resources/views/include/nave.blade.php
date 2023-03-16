<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                    <ul>
                        <li><a href="{{$home->social_link_1}}">{!! $home->social_icon_1!!}</a></li>
                        <li><a href="{{$home->social_link_2}}">{!! $home->social_icon_2!!}</a></li>
                        <li><a href="{{$home->social_link_3}}">{!! $home->social_icon_3!!}</a></li>
                        <li><a href="{{$home->social_link_4}}">{!! $home->social_icon_4!!}</a></li>
                        @if(session()->get('LogedUser') !=null)
                            <li style="color: white">Welcome {{\App\Models\Login::where('id',session()->get('LogedUser'))->first()->name}}</li>
                            <li><a class="btn btn-danger btn-sm" href="{{route('logout')}}">Logout</a></li>
                        @else
                            <li><a  href="{{route('login')}}">LOGIN</a></li>
                        @endif
                        <li><li><a class="btn btn-info btn-sm" href="{{route('cert-check')}}"><i class="fa-brands fa-searchengin"></i> Verify Certificate</a></li></li>



                    </ul>
                </div>


                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                    <a href="tel:{{$home->phone}}"><span class="lnr lnr-phone-handset"></span> <span class="text">{{$home->phone}}</span></a>
                    <a href="mailto:{{$home->mail}}"><span class="lnr lnr-envelope"></span> <span class="text">{{$home->mail}}</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img src="{{asset('media/img/logo.png')}}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li class="menu-has-children"><a >Programs</a>
                        <ul>
                            <li><a href="{{route('master')}}">Masters Degrees</a></li>
                            <li><a href="{{route('doctoral')}}">Doctoral Degrees</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('partner')}}">Our Partners</a></li>
                    <li><a href="{{route('event')}}">Event</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
