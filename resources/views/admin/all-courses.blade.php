@include('include.header')
@include('include.admin-nave')
<div class="container mb-5">
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <a class="h3 mb-3 btn btn-outline-primary" href="{{route('add_course')}}">Add New Courese</a>
                    <div class="card-body">
                        <table class="table table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>Course image</th>
                                <th>Course Name</th>
                                <th>Category</th>
                                <th>Course Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td> <a href="{{route('edit',['id'=>$course->id])}}"><img style="box-shadow: 1px 3px 20px 0px rgba(0,0,0,0.75);border-radius: 10px" src="{{asset('upload/course/'.$course->image)}}" width="70" height="50"  alt="Avatar"></a></td>
                                <td style="font-weight: bold"><a href="{{route('edit',['id'=>$course->id])}}">{{$course->name}}</a> </td>
                                <td>{{$course->category}}</td>
                                <td>{{$course->cost}}</td>
                                <td><a class="btn btn-outline-success" href="{{route('edit',['id'=>$course->id])}}">Edit</a>
                                    <a class="btn btn-outline-danger" href="{{route('destroy',['id'=>$course->id])}}">Delete</a>
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
