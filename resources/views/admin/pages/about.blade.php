@include('include.header')
@include('include.admin-nave')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="btn btn-danger">About Us Page</h4>
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    <p>{{ session()->get('message') }}</p>
                </div>
            @endif
        </div>
        <form action="{{route('update-about-page',['id'=>$abouts->id])}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="cord-body">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <p class="btn btn-primary">Header Section</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Background image</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" name="header_image" value="{{$abouts->header_image}}" aria-describedby="emailHelp"    >
                                    <img class="img w-25" src="{{asset('upload/about/'.$abouts->header_image)}}" alt="course">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Heading</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="heading" value="{{$abouts->heading}}" aria-describedby="emailHelp"    >
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <p class="btn btn-primary">who we are Section</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Who we are Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="who_title" value="{{$abouts->who_title}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Who we are Description</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="who_disc" value="{{$abouts->who_disc}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Who we are image</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" name="who_image" value="{{$abouts->who_image}}" aria-describedby="emailHelp"    >
                                    <img class="img w-25" src="{{asset('upload/about/'.$abouts->who_image)}}" alt="course">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <p class="btn btn-primary">why choose Section</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Back Ground Image</label>
                                    <input type="file" class="form-control" id="exampleInputEmail1" name="why_image" value="{{$abouts->why_image}}" aria-describedby="emailHelp"    >
                                    <img class="img w-25" src="{{asset('upload/about/'.$abouts->why_image)}}" alt="course">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Heading</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="why_heading" value="{{$abouts->why_heading}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="why_disc" value="{{$abouts->why_disc}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tab Title 1</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="tab_title_1" value="{{$abouts->tab_title_1}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tab Description 1</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="tab_disc_1" value="{{$abouts->tab_disc_1}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tab Title 2</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="tab_title_2" value="{{$abouts->tab_title_2}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tab Description 2</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="tab_disc_2" value="{{$abouts->tab_disc_2}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tab Title 3</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="tab_title_3" value="{{$abouts->tab_title_3}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tab Description 3</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="tab_disc_3" value="{{$abouts->tab_disc_3}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tab Title 4</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="tab_title_4" value="{{$abouts->tab_title_4}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tab Description 4</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="tab_disc_4" value="{{$abouts->tab_disc_4}}" aria-describedby="emailHelp"    >
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <p class="btn btn-primary">Call To Action Section</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Heading</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="ask_heading" value="{{$abouts->ask_heading}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Buttom Text</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="button_text" value="{{$abouts->button_text}}" aria-describedby="emailHelp"    >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Buttom Link</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="button_link" value="{{$abouts->button_link}}" aria-describedby="emailHelp"    >
                                </div>
                            </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <button type="submit" class="btn btn-success btn-block">Update About Page</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@include('include.footer')
