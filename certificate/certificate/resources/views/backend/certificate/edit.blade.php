@extends('backend.layout.master')
@section('title')
    تعديل شهادة
@endsection
@section('css')
@endsection
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">لوحة التحكم</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">لوحة التحكم</a></li>
                <li class="breadcrumb-item active">تعديل شهادة</li>
            </ol>
        </div>
        <div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        @if(session()->has('success'))
                            <div class="alert alert-success" style="color: #000000 !important;" role="alert">
                                <p>{{ session()->get('message') }}</p>
                            </div>
                        @endif
                        <h4 class="m-b-0 text-white">تعديل شهادة</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-body">
                            <form action="{{route('update_certificate',$cert->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row p-t-20">
                                    <div class="col-md-12 mb-3">
                                        <input type="file" id="input-file-now" class="" name="image" />
                                    </div>
                                    <img src="{{asset('upload/cert/'.$cert->image)}}" alt="" style="width: 100%;height: 200px">
                                    <hr>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            <input type="text" id="firstName" class="form-control" placeholder="Name" name="name" value="{{$cert->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Code</label>
                                            <input type="text" id="firstName" class="form-control" placeholder="Code" name="code" value="{{$cert->code}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block">تعديل شهادة</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{assert('backend/assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
@endsection
