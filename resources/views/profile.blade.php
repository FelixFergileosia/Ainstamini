@extends('base.navbar')

@section('title','Profile')

@section('body')
    <main class="text-center d-flex justify-content-center mt-2">
        <div class="w-25 d-flex flex-column">
            <img class="mb-4 align-self-center rounded-circle"
                @if(Auth::user()->user_image != null)
                    src="{{asset('storage/images/'.Auth::user()->user_image)}}"
                @else
                    src="{{asset('images/user_icon.png')}}"
                @endif
            alt="" style="width: 8vw">
            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" value="{{Auth::user()->username}}" placeholder="Email address" disabled>
                <label for="">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" value="{{Auth::user()->email}}" placeholder="Email address" disabled>
                <label for="">Email Address</label>
            </div>
            <div class="form-floating mb-3">
                <input name="phoneNumber" type="text" class="form-control" value="{{Auth::user()->phone_number}}" placeholder="Phone number" disabled>
                <label for="">Phone Number</label>
            </div>
            <div class="form-floating mb-3">
                <input name="bio" type="text" class="form-control" value="{{Auth::user()->bio}}" placeholder="Bio" disabled>
                <label for="">Bio</label>
            </div>
            <a  class="btn btn-primary" href="/edit-profile"> Edit Profile </a>
        </div>
    </main>
@endsection


