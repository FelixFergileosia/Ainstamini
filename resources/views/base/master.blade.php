<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <title>@yield('title')</title>
    @yield('css')

</head>
<body>
    @if($errors->any())
        <div class="alert alert-dismissable alert-danger" role="alert">
            <strong>
                {{$errors->first()}}
            </strong>
            <button type="button" class="btn-close" id="dismiss-alert" aria-label="Close"></button>
        </div>
    @elseif($message = Session::get('success'))
        <div class="alert alert-dismissable alert-success" role="alert">
            <strong>
                {{$message}}
            </strong>
            <button type="button" class="btn-close" id="dismiss-alert" aria-label="Close"></button>
        </div>
    @endif

    @yield('navbar')

    @yield('body')


    <script>
        $(document).ready(function(){
          $("#dismiss-alert").click(function(){
            $(".alert").hide();
          });
        });
    </script>
</body>
</html>

@yield('scripts')





