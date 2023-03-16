{{--@include('include.header')--}}
{{--@include('include.nave')--}}
@isset($ExtractedCertificates)
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <img class="" src="{{asset('upload/ExtractedCertificates/'.$ExtractedCertificates->image)}}" alt="" style="width: 80%">
    </div>
@endisset
{{--@include('include.footer')--}}
