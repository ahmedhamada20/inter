@include('include.header')
@include('include.admin-nave')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="btn btn-danger">Home Page</h4>
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    <p>{{ session()->get('message') }}</p>
                </div>
            @endif
        </div>
        <form action="{{route('update-home-page',['id'=>$homs->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="cord-body">
                    <div class="container">
                        <div class="card">
                            <div class="card-header">
                                <p class="btn btn-primary">Social Icon Section</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Social Icon</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="social_icon_1" value="{{$homs->social_icon_1}}" aria-describedby="emailHelp"  >
                                    </div>                <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Social Link</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="social_link_1" value="{{$homs->social_link_1}}" aria-describedby="emailHelp"  >
                                    </div>                <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Social Icon</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="social_icon_2" value="{{$homs->social_icon_2}}" aria-describedby="emailHelp"  >
                                    </div>                <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Social Link</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="social_link_2" value="{{$homs->social_link_2}}" aria-describedby="emailHelp"  >
                                    </div>                <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Social Icon</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="social_icon_3" value="{{$homs->social_icon_3}}" aria-describedby="emailHelp"  >
                                    </div>                <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Social Link</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="social_link_3" value="{{$homs->social_link_3}}" aria-describedby="emailHelp"  >
                                    </div>                <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Social Icon</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="social_icon_4" value="{{$homs->social_icon_4}}" aria-describedby="emailHelp"  >
                                    </div>                <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Social Link</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="social_link_4" value="{{$homs->social_link_4}}" aria-describedby="emailHelp"  >
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
                                <p class="btn btn-primary">Contact Section</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="phone" value="{{$homs->phone}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="mail" value="{{$homs->mail}}" aria-describedby="emailHelp"  >
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
                                <p class="btn btn-primary">Header Section</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Back Ground Image</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" name="slider_image" value="{{$homs->slider_image}}" aria-describedby="emailHelp" >
                                        <img class="img w-25" src="{{asset('upload/homepage/'.$homs->slider_image)}}" alt="course">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="slider_heading" value="{{$homs->slider_heading}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Description</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="slider_disc" value="{{$homs->slider_disc}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Button Text</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="button_text" value="{{$homs->button_text}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Button Link</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="button_link" value="{{$homs->button_link}}" aria-describedby="emailHelp"  >
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
                                <p class="btn btn-primary">3 Tabs Section</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tab 1 Title</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="tab_title_1" value="{{$homs->tab_title_1}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tab 1 Description</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="tab_disc_1" value="{{$homs->tab_disc_1}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tab 2 Title</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="tab_title_2" value="{{$homs->tab_title_2}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tab 2 Description</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="tab_disc_2" value="{{$homs->tab_disc_2}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label"> Tab 3 Title</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="tab_title_3" value="{{$homs->tab_title_3}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tab 3 Description</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="tab_disc_3" value="{{$homs->tab_disc_3}}" aria-describedby="emailHelp"  >
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
                                <p class="btn btn-primary">Course Heading Section</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Course Heading</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="course_heading" value="{{$homs->course_heading}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Course Description</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="course_disc" value="{{$homs->course_disc}}" aria-describedby="emailHelp"  >
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
                                <p class="btn btn-primary">Course Form Section</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Back Ground Image</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" name="select_image" value="" aria-describedby="emailHelp">
                                        <img class="img w-25" src="{{asset('upload/homepage/'.$homs->slider_image)}}" alt="course">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Heading</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="select_title" value="{{$homs->select_title}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Description</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="select_disc" value="{{$homs->select_disc}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Icon 1</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="select_icon_1" value="{{$homs->select_icon_1}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Title 1</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="select_heading_1" value="{{$homs->select_heading_1}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Description 1</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="select_disc_1" value="{{$homs->select_disc_1}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Icon 2</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="select_icon_2" value="{{$homs->select_icon_2}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Title 2</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="select_heading_2" value="{{$homs->select_heading_2}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Description 2</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="select_disc_2" value="{{$homs->select_disc_2}}" aria-describedby="emailHelp"  >
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
                                <p class="btn btn-primary">Event Section</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Event Heading</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="event_heading" value="{{$homs->event_heading}}" aria-describedby="emailHelp"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Event Description</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="event_disc" value="{{$homs->event_disc}}" aria-describedby="emailHelp"  >
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
                            <button type="submit" class="btn btn-success btn-block">Update Home Page</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@include('include.footer')
