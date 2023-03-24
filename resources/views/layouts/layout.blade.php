<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<script src="https://kit.fontawesome.com/9e97330921.js" crossorigin="anonymous"></script>
<title>Title</title>
</head>
<body>
    <nav>
        <div class="container">
            <!-- Checking session if not created then show login and register button -->
            @if(!session('login'))
            <div class="">
                <div class="list-unstyled d-flex flex-row justify-content-end mt-3">
                    <li class="me-3"><a href="{{route('login')}}"><button class="btn btn-primary">Login</button></a></li>
                    <li><a href="{{route('signup')}}"><button class="btn btn-primary">Register</button></a></li>
                </div>
            </div>
            @endif


            <!-- Checkinh session if alredy created then show logout button -->
            @if(session('login'))
            <div class="text-end mt-3">
            <a href="{{route('logout')}}"><button class="btn btn-primary">Logout</button></a>
            </div>
            @endif
        </div>
    </nav>

@yield('content')








<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>