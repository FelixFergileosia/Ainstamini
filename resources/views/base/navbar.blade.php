@extends('base.master')

@section('navbar')
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav me-2">
            <li class="nav-item">
                <img src="{{asset('images/logo.png')}}" class="img-responsive" style="width:6vw" alt="">
            </li>
        </ul>

        <div class="d-flex justify-content-center" style="width:50vw">
            <form class="d-flex flex-fill me-2" action=""  role="search">
                <input class="form-control me-2 text-white" type="search" placeholder="Search" name="search" >
                <button class="btn btn-outline-secondary text-black" type="submit">Search</button>
            </form>
        </div>
        <div style="width:30vw" class="d-flex flex-row">
            <div class="justify-content-start">
                <a class="me-2" href="/"><img src="{{asset('images/home_icon.png')}}" style="width:4.5vw" class="img-responsive" alt=""></a>
                <a class="me-2" href="/add-post"><img src="{{asset('images/add_icon.png')}}" style="width:4.5vw" class="img-responsive" alt=""></a>
                <a class="me-2" href="/profile"><img src="{{asset('images/user_icon.png')}}" style="width:4.5vw" class="img-responsive" alt=""></a>
            </div>
        </div>
        <a type="submit" href="/logout"><img src="{{asset('images/logout_icon.png')}}" style="width:4.5vw" class="img-responsive" alt=""></a>
    </div>
</nav>
@endsection


