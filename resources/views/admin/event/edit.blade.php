@include('include.header')
@include('include.admin-nave')

<div class="container mb-5">
    <div class="card">
        <div class="card-header">
            Add New Event
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <p>{{ session()->get('message') }}</p>
            </div>
        @endif
        <div class="card-body">
            <form class="row" action="{{route('update-event',['id'=>$edit->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Event Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$edit->name}}" aria-describedby="emailHelp"     >
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Event Date</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="date" value="{{$edit->date}}" aria-describedby="emailHelp"     >
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Event DESCRIPTION</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="disc" value="{{$edit->disc}}" aria-describedby="emailHelp"     >
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Event Photo</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="image" aria-describedby="emailHelp"     >
                    <img class="img w-25" src="{{asset('upload/event/'.$edit->image)}}" alt="course">
                </div>
                <div class="col-md-12 mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Add Event </button>
                </div>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>

@include('include.footer')
