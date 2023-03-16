@include('include.header')
@include('include.admin-nave')
<div class="container mb-5">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <a class="h3 mb-3 btn btn-outline-primary" href="{{route('add-event')}}">Add New Event</a>
                        <div class="card-body">
                            <table class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Event image</th>
                                    <th>Event Name</th>
                                    <th>Event date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_event as $event)
                                    <tr>
                                        <td> <a href="{{route('edit',['id'=>$event->id])}}"><img style="box-shadow: 1px 3px 20px 0px rgba(0,0,0,0.75);border-radius: 10px" src="{{asset('upload/event/'.$event->image)}}" width="70" height="50"  alt="Avatar"></a></td>
                                        <td style="font-weight: bold"><a href="{{route('edit',['id'=>$event->id])}}">{{$event->name}}</a> </td>
                                        <td>{{$event->date}}</td>
                                        <td><a class="btn btn-outline-success" href="{{route('edit-event',['id'=>$event->id])}}">Edit</a>
                                            <a class="btn btn-outline-danger" href="{{route('destroy-event',['id'=>$event->id])}}">Delete</a>
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
