@include('include.header')
@include('include.admin-nave')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="btn btn-danger">Partner Page</h4>
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    <p>{{ session()->get('message') }}</p>
                </div>
            @endif
        </div>
        <form action="{{route('storepartner')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="cord-body">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <p class="btn btn-primary">Upload Partner Logo</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Background Logo</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" name="image"  aria-describedby="emailHelp" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <button type="submit" class="btn btn-success btn-block">add Partner</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@include('include.footer')
