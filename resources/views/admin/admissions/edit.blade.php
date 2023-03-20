@include('include.header')
@include('include.admin-nave')

<div class="container mb-5">
    <div class="card">
        <div class="card-header">
            name admissions '{{$data->notes_1}}'
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <p>{{ session()->get('message') }}</p>
            </div>
        @endif
        <div class="card-body">
            <form class="row" action="{{route('updatedadmissions')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="col-md-12 mb-3">
                    <label for="exampleInputEmail1" class="form-label">admissions Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="notes_1" value="{{$data->notes_1}}" aria-describedby="emailHelp"   >
                </div>
               
                
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">admissions DESCRIPTION</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="notes_2" rows="5">{{$data->notes_2}}</textarea>
                </div>
               
                <div class="col-md-12 mb-3">
                    <label for="exampleInputEmail1" class="form-label">admissions Url</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="url" value="{{$data->url}}" aria-describedby="emailHelp"   >
                </div>
               
                
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">admissions Images</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="image" aria-describedby="emailHelp" >
                    <img class="img w-25" src="{{$data->photo}}" alt="course">
                </div>
                
                <div class="col-md-12 mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Edit admissions </button>
                </div>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>

@include('include.footer')
