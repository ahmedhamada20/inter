<!DOCTYPE html>
<html lang="zxx">
<head>
   @include('front.layouts.head')
</head>
<body>
    

    <div class="preloader-area">
        <div class="spinner">
            <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
            </div>
        </div>
    </div>


    @yield('contact')


    @include('front.layouts.footer')
    @include('front.layouts.footerjs')


</body>
</html>