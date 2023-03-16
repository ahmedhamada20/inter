@extends('frontend.layout.master')
@section('title')
    Certificate
@endsection
@section('css')
@endsection
@section('content')
<div class="container p-0 w-100">
    <div class="row">
        <div class="col-md-12 text-center">
            @if($cert->image)
            <img src="{{asset('upload/cert/'.$cert->image)}}" style="width: 100%;margin-top: 1rem" alt="">
            @else
                <h3 class="alert-info">We Dont Find any record With this ID</h3>
            @endif
        </div>
    </div>
</div>

@endsection
@section('js')
@endsection
