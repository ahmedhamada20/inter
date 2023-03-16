@extends('backend.layout.master')
@section('title')
    جميع الشهادات
@endsection
@section('css')
@endsection
@section('content')
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-outline-info">
                        <div class="card-header">
                            @if(session()->has('success'))
                                <div class="alert alert-success" style="color: #000000 !important;" role="alert">
                                    <p>{{ session()->get('message') }}</p>
                                </div>
                            @endif
                            <h4 class="m-b-0 text-white">جميع الشهادات</h4>
                        </div>
                         <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($certs as $cert)
                        <tr>
                            <td>{{$cert->id}}</td>
                            <td><img src="{{asset('upload/cert/'.$cert->image)}}" alt="" style="width: 50px;height: 50px;border-radius: 50%"></td>
                            <td>{{$cert->name}}</td>
                            <td>{{$cert->code}}</td>
                            <td>
                                <a href="{{route('edit_certificate',$cert->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit (alias)"></i></a>
                                <a href="{{route('delete_certificate',$cert->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                        {{ $certs->render("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('js')

@endsection
