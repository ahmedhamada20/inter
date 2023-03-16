<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    @include('backend.layout.header')
</head>
<body class="fix-header fix-sidebar card-no-border">
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<div id="main-wrapper">
    @include('backend.layout.navebar')
    @include('backend.layout.sidebar')
    <div class="page-wrapper">
    @yield('content')
    @include('backend.layout.footer')
    </div>
</div>
    @include('backend.layout.footerjs')
</body>
</html>
