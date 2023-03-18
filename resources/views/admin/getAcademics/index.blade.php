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
                        <a class="h3 mb-3 btn btn-outline-primary" href="{{ route('CreateAcademics') }}">Add New Academic</a>
                        <div class="card-body">
                            <table class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                 
                                    <th>Academic Name</th>
                                    
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $row)
                              
                                    <tr>
                                       
                                        <td>{{$row->name}}</td>

                                       
                                        <td>
                                            <a class="btn btn-outline-success" href="{{route('editAcademics',['id'=>$row->id])}}">Edit</a>
                                            <a class="btn btn-outline-danger" href="{{route('deletedAcademics',['id'=>$row->id])}}">Delete</a>
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
