<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.layout.header')
</head>
<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->
@include('frontend.layout.navebar')
@yield('content')
@include('frontend.layout.footer')
@include('frontend.layout.footerjs')
</body>
</html>
