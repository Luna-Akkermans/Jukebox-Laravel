<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="height: 100%" class="homepage-out">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="d-flex justify-content-around p-5 rounded shadow landing-div">
            <div class="w-100 h-100 d-flex align-items-center justify-content-around ">
                <a href="{{url('login')}}" class="btn btn-primary-outline">LOGIN</a>
                <a href="{{url('register')}}"class="btn btn-primary-outline">REGISTER</a>
            </div>
        </div>
      </div>


</body>
</html>
