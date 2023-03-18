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
                        @if(!App\Models\About::first())
                            
                        <a class="h3 mb-3 btn btn-outline-primary" href="{{ route('Createaboutsus') }}">Add New AboutsUs</a>

                            
                        @endif
                        <div class="card-body">
                            <table class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>AboutsUs image</th>
                                    <th>AboutsUs Name</th>
                                    
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $row)
                              
                                    <tr>
                                        <td> <a href="{{route('editaboutsus',['id'=>$row->id])}}">
                                            <img style="box-shadow: 1px 3px 20px 0px rgba(0,0,0,0.75);border-radius: 10px"
                                             src="{{ $row->photo }}" width="70" height="50"  alt="Avatar"></a>
                                        </td>
                                        <td>{{$row->name}}</td>


                                        <td>
                                            <a class="btn btn-outline-success" href="{{route('editaboutsus',['id'=>$row->id])}}">Edit</a>
                                            <a class="btn btn-outline-danger" href="{{route('deletedaboutsus',['id'=>$row->id])}}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('include.footer')
