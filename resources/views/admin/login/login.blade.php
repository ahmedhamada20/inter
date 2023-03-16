@include('include.header')
<div class="logn">
    <div class="container bootstrap snippets bootdey text-center" >
        <div class="lc-block col-md-4 col-md-offset-4 toggled" id="l-login">
            <div class="lcb-float"><img src="{{asset('media/img/fav1.png')}}" alt=""></div>
            <form action="{{route('check')}}" method="post" enctype="multipart/form-data">
                @if(session()->has('fail'))
                    <div class="alert alert-danger" role="alert">
                        <p>{{ session()->get('fail') }}</p>
                    </div>
                @endif
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{old('email')}}">
                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                </div>
                <div class="clearfix"></div>
                <button type="submit" class="btn btn-block btn-primary btn-float m-t-25">Sign In</button>
            </form>
        </div>
    </div>
</div>

@include('include.footer')
