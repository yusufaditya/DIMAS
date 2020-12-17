<head>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('rimas.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e3dba10297.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    @yield('plugin')

    <style rel="text/css">
        .landing {
            background-image: url("assets/img/web.png");
            background-size: cover;
        }
    </style>
</head>

<body class="container-fluid">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-danger fixed-top p-0">
        <a class="navbar-brand text-white ml-4 p-2" href="{{route('/')}}"><img class="image mb-2" src="{{asset('assets/img/rimas.png')}}" width="30" height="30"> IMAS</a>
        
        <button class="navbar-toggler p-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars p-1 text-info" aria-hidden="true"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item pl-5 pr-5 p-2 text-center">
                    <a class="nav-link text-info active" href="{{route('/')}}">Home</a>
                </li>
                <li class="nav-item pl-5 pr-5 p-2 text-center">
                    <a class="nav-link text-info" href="{{route('/about')}}">About</a>
                </li>
                <li class="nav-item pl-5 pr-5 p-2 text-center">
                    <a class="nav-link text-info" href="{{route('/service')}}">Service</a>
                </li>
                <li class="nav-item pl-5 pr-5 p-2 text-center">
                    <a class="nav-link text-info" href="{{route('/contact')}}">Contact</a>
                </li>

                {{-- Kalo belum Login --}}
                <li class="nav-item pl-5 pr-5 p-2 text-center d-none">
                    <a class="nav-link text-primary" href="{{route('/login')}}">Login</a>
                </li>
                
                {{-- Kalo sudah Login --}}
                <li class="nav-item pl-5 pr-5 p-2 text-center">
                    <a class="nav-link text-primary" href="{{route('/dashboard')}}">Dashboard</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-danger p-0">
        <div class="ml-4">
            <a class="navbar-brand text-white" href="{{route('/')}}"><img class="image mb-2" src="assets/img/rimas.png" width="30" height="30"> IMAS</a>
        </div>
        <button class="navbar-toggler p-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!-- End of Navbar -->

        @yield('mainContent')
</body>

<!-- script display -->
@yield('script')