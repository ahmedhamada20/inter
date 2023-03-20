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
            <form class="row" action="{{route('Saveednews')}}" method="post" enctype="multipart/form-data">
                @csrf
               
                <div class="col-md-12 mb-3">
                    <label for="exampleInputEmail1" class="form-label">news Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" required aria-describedby="emailHelp"   >
                </div>
               
                
                <div class="col-md-12 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">news DESCRIPTION</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="notes" rows="5" required></textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="exampleInputEmail1" class="form-label">news by name</label> 
                    <input type="text" class="form-control" id="exampleInputEmail1" name="by_name" required  aria-describedby="emailHelp"   >
                </div>
               
                <div class="col-md-12 mb-3">
                    <label for="exampleInputEmail1" class="form-label">news by category</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="by_category" required aria-describedby="emailHelp"   >
                </div>
               
                
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">news Images</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" required name="image" aria-describedby="emailHelp" >
              
                </div>
                
                
                <div class="col-md-12 mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Saved news </button>
                </div>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>

@include('include.footer')
