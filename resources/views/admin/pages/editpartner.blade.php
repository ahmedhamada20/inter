@include('include.header')
@include('include.admin-nave')

<div class="container" style="height: 100vh">
    <div class="card">
        <div class="card-header">
            <h4 class="btn btn-danger">Partner Page</h4>
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    <p>{{ session()->get('message') }}</p>
                </div>
            @endif
        </div>
      <div class="row mt-5 mb-5">
          @foreach($Partners as $Partner)
          <div class="col-md-3">
              <div class="image-area">
                  <img src="{{asset('upload/partner/'.$Partner->image)}}"  alt="Preview">
                  <a class="remove-image" href="{{route('destroy-partner',['id'=>$Partner->id])}}" style="display: inline;">&#215;</a>
              </div>
          </div>
          @endforeach
      </div>
    </div>
</div>


@include('include.footer')
