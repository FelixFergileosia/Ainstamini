@extends('base.master')

@section('title','Register')

@section('body')
    <main class="form-signin text-center d-flex justify-content-center mt-3">
        <form action="/register" method="POST" class="w-25 d-flex flex-column">
            @csrf
            <img class="mb-2 align-self-center" src="{{ asset('images/logo.png') }}" alt="" style="width: 8vw">
            <h2 class="mb-3">Ainstamini</h2>
            <div class="form-floating mb-3">
                <input name="username" type="text" class="form-control" id="floatingPassword" placeholder="Username">
                <label for="floatingPassword">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="floatingPassword" placeholder="Email Address">
                <label for="floatingPassword">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input name="confirmPassword" type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
                <label for="floatingPassword">Confirm password</label>
            </div>

            <button class="btn btn-primary" type="submit">Register</button>

            <div class="form-group mt-3">
                <label class="label" for="">Already have account?</label>
                <a href="/login" class="text-primary">login</a>
            </div>
        </form>
    </main>
@endsection


