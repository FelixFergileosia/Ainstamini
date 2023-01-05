@extends('base.master')

@section('title','Signin')

@section('body')
    <main class="form-signin text-center d-flex justify-content-center mt-5">
        <form action="/login" method="POST" class="w-25 d-flex flex-column">
            @csrf
            <img class="mb-2 align-self-center" src="{{ asset('images/logo.png') }}" alt="" style="width: 8vw">
            <h2 class="mb-3">Ainstamini</h2>
            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="floatingPassword"
                value="{{Cookie::get('emailCookie') != null ? Cookie::get('emailCookie') : ""}}" placeholder="Email address">
                <label for="floatingPassword">Email Address</label>
            </div>
            <div class="form-floating mb-2">
                <input name="password" type="password" class="form-control" id="floatingPassword"
                value="{{Cookie::get('passwordCookie') != null ? Cookie::get('passwordCookie') : ""}}" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="checkbox mb-3 text-start">
                <label> <input name="remember" type="checkbox" @if (Cookie::get('rememberCookie') != null) checked @endif> Remember me </label>
            </div>

            <button class="btn btn-primary" type="submit">Login</button>

            <div class="form-group mt-3">
                <label class="label" for="">Doesn't have account?</label>
                <a href="/register" class="text-primary">Register here</a>
            </div>
        </form>
    </main>
@endsection


