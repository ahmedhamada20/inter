@include('include.header')
@include('include.admin-nave')

<div class="container mb-5">
    <div class="card">
        <div class="card-header">
            Add New Certificate
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <p>{{ session()->get('message') }}</p>
            </div>
        @endif
        <div class="card-body">
            <form class="row" action="{{route('store-cert')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                   <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Certificate Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="number" aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Studrnt Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name"  aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nationality</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="natoinalty"  aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Study</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="study"  aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Certificate Photo</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="image" aria-describedby="emailHelp" required>
                </div>
                
                
                <!--<div class="col-md-6 mb-3">-->
                <!--    <label for="exampleInputEmail1" class="form-label">title</label>-->
                <!--    <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp" required>-->
                <!--</div>-->
                <!--<div class="col-md-6 mb-3">-->
                <!--    <label for="exampleInputEmail1" class="form-label">Studrnt Name</label>-->
                <!--    <input type="text" class="form-control" id="exampleInputEmail1" name="name_student" aria-describedby="emailHelp" required>-->
                <!--</div>-->
                <!--<div class="col-md-6 mb-3">-->
                <!--    <label for="exampleInputEmail1" class="form-label">Nationality</label>-->
                <!--    <input type="text" class="form-control" id="exampleInputEmail1" name="natoinalty" aria-describedby="emailHelp" required>-->
                <!--</div>-->
                <!--<div class="col-md-6 mb-3">-->
                <!--    <label for="exampleInputEmail1" class="form-label">Certificate Photo</label>-->
                <!--    <input type="file" class="form-control" id="exampleInputEmail1" name="image" aria-describedby="emailHelp" required>-->
                <!--</div>-->
                <div class="col-md-12 mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Add   Extracted Certificate </button>
                </div>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>

@include('include.footer')
