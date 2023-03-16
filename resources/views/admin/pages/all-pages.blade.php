@include('include.header')
@include('include.admin-nave')

<div class="container" style="margin-bottom: 50vh">
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>All Pages</h4>
                        <div class="card-body">
                            <table class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Page Name</th>
                                    <th></th>
                                    <th></th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                            <td style="font-weight: bold;"><a href="{{route('edit-home-page',['id'=>$home->id])}}">{{$home->page_name}}</a> </td>
                                        <td></td>
                                        <td> </td>
                                        <td><a class="btn btn-outline-success btn-block" href="{{route('edit-home-page',['id'=>$home->id])}}">Edit </a></td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;"><a href="{{route('edit-about-page',['id'=>$about->id])}}">{{$about->page_name}}</a> </td>
                                        <td></td>
                                        <td> </td>
                                        <td><a class="btn btn-outline-success btn-block" href="{{route('edit-about-page',['id'=>$about->id])}}">Edit </a></td>
                                    </tr>
                                    @if ($partner != null)
                                    <tr>
                                        <td style="font-weight: bold;"><a href="{{route('add-partner')}}">{{$partner->page_name}}</a> </td>
                                        <td></td>
                                        <td> </td>
                                        <td >
                                            <a class="btn btn-outline-success btn-block" href="{{route('edit-partner-page',['id'=>$partner->id])}}" style="display: inline">edit</a>
                                            <a class="btn btn-outline-primary btn-block" href="{{route('add-partner')}}" style="display: inline">Add</a>
                                        </td>
                                    </tr>
                                    @endif
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
