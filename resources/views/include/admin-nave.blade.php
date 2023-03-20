<nav class="navbar navbar-expand-lg navbar-light bg-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('dashboard')}}" style="color:#ffffff !important;"><img src="{{asset('media/img/logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Home
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('getSliders') }}">Sliders</a></li>
                        <li><a class="dropdown-item" href="{{ route('getAcademics') }}">Academics</a></li>
                        <li><a class="dropdown-item" href="{{ route('getaboutsus') }}">About Us</a></li>
                        <li><a class="dropdown-item" href="{{ route('getcampus') }}">Campus</a></li>
                        <li><a class="dropdown-item" href="{{ route('getadmissions') }}">Admissions</a></li>
                        <li><a class="dropdown-item" href="{{ route('gethealths') }}">healths</a></li>
                        <li><a class="dropdown-item" href="{{ route('getpodcasts') }}">podcasts</a></li>
                        <li><a class="dropdown-item" href="{{ route('getstories') }}">stories</a></li>
                        <li><a class="dropdown-item" href="{{ route('getnews') }}">news</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('add-category')}}">Add Category</a></li>
                        <li><a class="dropdown-item" href="{{route('allcategory')}}">All Category</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('add_course')}}">Add Courses</a></li>
                        <li><a class="dropdown-item" href="{{route('allcourses')}}">All Courses</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Events
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('add-event')}}">Add Event</a></li>
                        <li><a class="dropdown-item" href="{{route('allevent')}}">All Events</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('allpages')}}">All Pages</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Certificate
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('add-cert')}}">Add Certificate</a></li>
                        <li><a class="dropdown-item" href="{{route('allcert')}}">All Certificate</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        extracted certificates
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('extracted-certificates.create')}}">Add extracted certificates</a></li>
                        <li><a class="dropdown-item" href="{{route('extracted-certificates.index')}}">All extracted certificates</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Form
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('allRegister')}}">Registered Client</a></li>
                    </ul>
                </li>
            </ul>
            <a class="btn btn-warning " href="{{route('home')}}" target="_blank">View Site</a>
            <a class="btn btn-danger ml-auto text-white" href="{{route('logout')}}" >Logout</a>
        </div>
    </div>
</nav>
