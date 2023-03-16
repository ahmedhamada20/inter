<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{asset('backend/assets/images/users/profile.png')}}" alt="user" />
                <!-- this is blinking heartbit-->
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5>{{Auth()->user()->name}}</h5>
                <h5>{{Auth()->user()->email}}</h5>
                <a href="mailto:{{Auth()->user()->email}}" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <a href="{{route('logout')}}" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>

            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li> <a  href="{{route('dashboard')}}" ><i class="mdi mdi-gauge"></i><span class="hide-menu">لوحة التحكم</span></a>

                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">الشهادات</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('add_certificate')}}">إضافة شهادة</a></li>
                        <li><a href="{{route('all_certificate')}}">جميع الشهادات</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
