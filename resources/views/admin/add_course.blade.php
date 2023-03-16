@include('include.header')
@include('include.admin-nave')

<div class="container mb-5">
    <div class="card">
        <div class="card-header">
            Add New Course
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <p>{{ session()->get('message') }}</p>
            </div>
        @endif
        <div class="card-body">
            <form class="row" action="{{route('store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Course Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Course Price</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cost" aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Week Per Class</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="week_per_class" aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Total Class</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="total_class" aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Total Hours</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="total_credit_hour" aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="address" aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Short DESCRIPTION</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="short_disc" rows="3" required></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Full DESCRIPTION</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="full_disc" rows="3" required></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Course Category</label>
                    <select class="form-select form-select-lg mb-3" name="category" aria-label=".form-select-lg example" required>
                        <option selected disabled>Select Category</option>
                        @foreach($categorys as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Course Photo</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="image" aria-describedby="emailHelp" required>
                </div>
                <div class="col-md-12 mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Add Course </button>
                </div>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>

@include('include.footer')
