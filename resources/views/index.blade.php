@extends('base.navbar')

@section('title','Home')

@section('body')
    <main class="text-center d-flex justify-content-center mt-3" >
        <div class="w-50 border border-2 rounded" style="height: 75vh">
            <div class="post-header border-1 border-bottom d-flex h-25 p-2">
                <div class="d-flex w-25">
                    <img src="{{asset('storage/images/Harris.png')}}" class="img-responsive rounded" alt="">
                </div>
                <label for="Post Title" class="w-50 align-self-center">Post title</label>
                <div class="d-flex justify-content-end w-25">
                    <img src="{{asset('images/three-dots.svg')}}" class="img-responsive rounded" style="width:5vw" alt="">
                </div>
            </div>
            <div class="post-content border-1 border-bottom h-50 d-flex justify-content-center">
                <img src="{{asset('storage/images/Harris.png')}}" class="img-responsive" alt="">
            </div>
            <div class="post-footer d-flex justify-content-start h-25 p-2">
                <p for="Post Description text-left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias optio sed cum, esse numquam architecto illo quo culpa dolorum labore voluptatem fugiat perspiciatis quos, doloremque tempora quibusdam et reiciendis perferendis.</p>
            </div>
        </div>
    </main>
@endsection


