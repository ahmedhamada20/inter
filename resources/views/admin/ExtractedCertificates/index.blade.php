@include('include.header')
@include('include.admin-nave')
<div class="container mb-5">
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-xl-12">
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        <p>{{ session()->get('message') }}</p>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header pb-0">
                        <a class="h3 mb-3 btn btn-outline-primary" href="{{route('extracted-certificates.create')}}">Add extracted certificates</a>
                        <div class="card-body">
                            <table class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>extracted Certificate image</th>
                                    <th>Student Name</th>
                                    <th>title</th>
                                    <th>url</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $row)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>
                                            @if($row->image)
                                            <a href="{{route('extracted-certificates.edit',$row->id)}}"><img style="box-shadow: 1px 3px 20px 0px rgba(0,0,0,0.75);border-radius: 10px" src="{{asset('upload/ExtractedCertificates/'.$row->image)}}" width="70" height="50"  alt="Avatar"></a>
                                            @else
                                                <a href="{{route('extracted-certificates.edit',$row->id)}}"><img style="box-shadow: 1px 3px 20px 0px rgba(0,0,0,0.75);border-radius: 10px" src="{{asset('upload/about/16477438614-263x263.jpg')}}" width="70" height="50"  alt="Avatar"></a>
                                            @endif

                                        </td>
                                        <td style="font-weight: bold"><a href="{{route('extracted-certificates.edit',$row->id)}}">{{$row->name_student}}</a> </td>
                                        <td>{{$row->title}}</td>
                                        <td><a href="{{route('url',[$row->name_student])}}">زياره الصفحه</a></td>
                                        <td>
                                            <a class="btn btn-outline-success" href="{{route('extracted-certificates.edit',$row->id)}}">Edit</a>
                                            <form action="{{route('extracted-certificates.destroy',$row->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $data->render("pagination::bootstrap-4") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('include.footer')
