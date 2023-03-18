@include('include.header')
@include('include.admin-nave')

<div class="container mb-5">
    <div class="card">
        <div class="card-header">
            name Academic '{{$data->name}}'
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <p>{{ session()->get('message') }}</p>
            </div>
        @endif
        <div class="card-body">
            <form class="row" action="{{route('updatedAcademics')}}" method="post" enctype="multipart/form-data">
                @csrf
               
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="col-md-12 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Academic Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $data->name }}" aria-describedby="emailHelp"   >
                </div>
               
                
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Academic DESCRIPTION</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="notes" rows="5" >
                        {{ $data->notes }}
                    </textarea>
                </div>
               
               
                <div class="col-md-12 mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Saved Academic </button>
                </div>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>

@include('include.footer')
