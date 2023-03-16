@include('include.header')
@include('include.admin-nave')

<div class="container" style="margin-bottom: 50vh">
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>All Category</h4>
                    @if(session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                <p>{{ session()->get('message') }}</p>
                            </div>
                        @endif
                        <div class="card-body">
                            <table class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th></th>
                                    <th></th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categorys as $category)
                                <tr>
                                    <td style="font-weight: bold;"><a href="{{route('edit-category',['id'=>$category->id])}}">{{$category->name}}</a> </td>
                                    <td></td>
                                    <td> </td>
                                    <td><a class="btn btn-outline-success " href="{{route('edit-category',['id'=>$category->id])}}">Edit </a>
                                        <a class="btn btn-outline-danger " href="{{route('destroy-category',['id'=>$category->id])}}">Delete </a>
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
