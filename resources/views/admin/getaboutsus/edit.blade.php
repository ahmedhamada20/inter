@include('include.header')
@include('include.admin-nave')

<div class="container mb-5">
    <div class="card">
        <div class="card-header">
           
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <p>{{ session()->get('message') }}</p>
            </div>
        @endif
        <div class="card-body">
            <form class="row" action="{{route('updatedaboutsus')}}" method="post" enctype="multipart/form-data">
                @csrf
               <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="col-md-12 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $data->name }}"  aria-describedby="emailHelp"   >
                </div>
               
                
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">aboutsus DESCRIPTION</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="notes"  rows="5" >{{ $data->notes }}</textarea>
                </div>
               
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus futhre_1 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="futhre_1" value="{{ $data->futhre_1 }}" aria-describedby="emailHelp"   >
                </div>
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus futhre_2 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="futhre_2" value="{{ $data->futhre_2 }}" aria-describedby="emailHelp"   >
                </div>
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus futhre_3 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="futhre_3" value="{{ $data->futhre_3 }}" aria-describedby="emailHelp"   >
                </div>
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus futhre_4 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="futhre_4" value="{{ $data->futhre_4 }}" aria-describedby="emailHelp"   >
                </div>
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus futhre_5 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="futhre_5" aria-describedby="emailHelp"   >
                </div>
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus futhre_6 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="futhre_6" value="{{ $data->futhre_6 }}" aria-describedby="emailHelp"   >
                </div>
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus futhre_7 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="futhre_7" value="{{ $data->futhre_7 }}" aria-describedby="emailHelp"   >
                </div>
               
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus futhre_8 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="futhre_8" value="{{ $data->futhre_8 }}" aria-describedby="emailHelp"   >
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus number_title_1 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="number_title_1" value="{{ $data->number_title_1 }}" aria-describedby="emailHelp"   >
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus number_1 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="number_1" value="{{ $data->number_1 }}" aria-describedby="emailHelp"   >
                </div>
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus number_title_2 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="number_title_2" value="{{ $data->number_title_2 }}" aria-describedby="emailHelp"   >
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus number_2 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="number_2" value="{{ $data->number_2 }}" aria-describedby="emailHelp"   >
                </div>
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus number_title_3 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="number_title_3" value="{{ $data->number_title_3 }}" aria-describedby="emailHelp"   >
                </div>
                
                <div class="col-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">aboutsus number_3 </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="number_3" value="{{ $data->number_3 }}" aria-describedby="emailHelp"   >
                </div>


                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">aboutsus Images</label>
                    <input type="file" class="form-control" id="exampleInputEmail1"  name="image" aria-describedby="emailHelp" >
                    <img class="img w-25" src="{{$data->photo}}" alt="course">
                </div>
               
                <div class="col-md-12 mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Saved aboutsus </button>
                </div>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>

@include('include.footer')
