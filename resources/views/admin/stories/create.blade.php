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
            <form class="row" action="{{route('Saveedstories')}}" method="post" enctype="multipart/form-data">
                @csrf
               
                <div class="col-md-12 mb-3">
                    <label for="exampleInputEmail1" class="form-label">stories Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" required aria-describedby="emailHelp"   >
                </div>
               
               
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">stories Url</label>
                    <input type="url" class="form-control" id="exampleInputEmail1" required name="url" aria-describedby="emailHelp" >
              
                </div>
                
                <div class="col-md-12 mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Saved stories </button>
                </div>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>

@include('include.footer')
