@include('include.header')
@include('include.admin-nave')

<div class="container mb-5">
    <div class="card">
        <div class="card-header">
            Edit New Extracted Certificate
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <p>{{ session()->get('message') }}</p>
            </div>
        @endif
        <div class="card-body">
            <form class="row" action="{{route('extracted-certificates.update',$data->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="number" value="{{$data->title}}" aria-describedby="emailHelp" readonly="readonly">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Studrnt Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$data->name_student}}" aria-describedby="emailHelp" readonly="readonly">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">URL</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$data->url}}" aria-describedby="emailHelp" readonly="readonly">
                </div>

                <br>
                <div class="col-md-6 mb-3">
                @if($data->image)
                   <img style="box-shadow: 1px 3px 20px 0px rgba(0,0,0,0.75);border-radius: 10px" src="{{asset('upload/ExtractedCertificates/'.$data->image)}}" width="70" height="50"  alt="Avatar">
                @else
                   <img style="box-shadow: 1px 3px 20px 0px rgba(0,0,0,0.75);border-radius: 10px" src="{{asset('upload/about/16477438614-263x263.jpg')}}" width="70" height="50"  alt="Avatar">
                @endif
                </div>
                <br>

                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label"> extracted Certificate Photo</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="image" aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-12 mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Edit  extracted Certificate </button>
                </div>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>

@include('include.footer')
