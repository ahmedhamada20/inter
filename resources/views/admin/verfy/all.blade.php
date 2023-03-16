@include('include.header')
@include('include.admin-nave')
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container mb-5">
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <a class="h3 mb-3 btn btn-outline-primary" href="{{route('add-cert')}}">Add New Certificate</a>
                        <div class="card-body">
                            <table class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Certificate image</th>
                                    <th>Student Name</th>
                                    <th>Certificate Number</th>
                                    <th>Student natoinalty</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($certificates as $certificate)
                                    <tr>
                                        <td> <a href="{{route('edit-cert',['id'=>$certificate->id])}}"><img style="box-shadow: 1px 3px 20px 0px rgba(0,0,0,0.75);border-radius: 10px" src="{{asset('upload/cert/'.$certificate->image)}}" width="70" height="50"  alt="Avatar"></a></td>
                                        <td style="font-weight: bold"><a href="{{route('edit-cert',['id'=>$certificate->id])}}">{{$certificate->name}}</a> </td>
                                        <td>{{$certificate->number}}</td>
                                        <td>{{$certificate->natoinalty}}</td>
                                        <td><a class="btn btn-outline-success" href="{{route('edit-cert',['id'=>$certificate->id])}}">Edit</a>
                                            <a class="btn btn-outline-danger" href="{{route('destroy-cert',['id'=>$certificate->id])}}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $certificates->render("pagination::bootstrap-4") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('include.footer')
