@extends('base.navbar')

@section('title','Profile')

@section('body')
    <main class="text-center d-flex justify-content-center mt-2">
        <form action="/edit-profile" method="POST" class="w-25 d-flex flex-column" enctype="multipart/form-data">
            @csrf
            <img class="mb-4 align-self-center rounded-circle"
                @if(Auth::user()->user_image != null)
                    src="{{asset('storage/images/'.Auth::user()->user_image)}}"
                @else
                    src="{{asset('images/user_icon.png')}}"
                @endif
                alt="" style="width: 8vw">
            <input type="file" class="custom-file-input align-self-center mb-3 border" name="userImage">
            <div class="form-floating mb-3">
                <input name="username" type="text" class="form-control" value="{{Auth::user()->username}}" placeholder="Email address">
                <label for="">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" value="{{Auth::user()->email}}" placeholder="Email address">
                <label for="">Email Address</label>
            </div>
            <div class="form-floating mb-3">
                <input name="phoneNumber" type="text" class="form-control" value="{{Auth::user()->phone_number}}" placeholder="Phone number" >
                <label for="">Phone Number</label>
            </div>
            <div class="form-floating mb-3">
                <input name="bio" type="text" class="form-control" value="{{Auth::user()->bio}}" placeholder="Bio">
                <label for="">Bio</label>
            </div>
            <input type="submit" value="Save" class="btn btn-primary mb-2">
        </form>
    </main>
@endsection


