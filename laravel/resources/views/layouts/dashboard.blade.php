@php
    checkPackageExpiration();
@endphp
<head>
    {{--CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.12.6/sweetalert2.min.js" integrity="sha512-cNaY7ThUQSAxQRW5wvhRBLheHFFAVjnXFFD3K8H7gI1xq+W+tVz9ntPNyoioKpJFc7DyYLWCFem3KBthn7XJTQ==" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="rimas.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e3dba10297.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    @yield('plugin')
</head>

<body class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-danger fixed-top">
        <a class="navbar-brand text-white ml-4" href="{{route('/')}}"><img class="image mb-2" src="{{ asset('assets/img/rimas.png') }}" width="30" height="30">DIMAS</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars p-1 text-info" aria-hidden="true"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                {{-- Kalo sudah Login --}}
                <li class="nav-item ml-5 mr-5">
                    <a class="nav-link text-primary" href="{{route('/dashboard')}}">Dashboard</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-danger">
        <div class="ml-4">
            <a class="navbar-brand text-white" href="{{route('/')}}"><img class="image mb-2" src="{{ asset('assets/img/rimas.png') }}"
                    width="30" height="30">DIMAS</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="row">
        <div class="col offset-2">
            @yield('content')
        </div>

        {{-- Sidebar --}}
        <div class="col-2 bg-light h-100" style="position: fixed;">

            {{-- Home --}}
            <a href="{{route('/dashboard')}}" class="sidebar-link @yield('home')">
                <div class="row sidebar-link @yield('home')">
                    <div class="col-1 m-3"><i class="fa fa-home fa-2x" aria-hidden="true"></i></div>
                    <div class="col align-self-center">Home</div>
                </div>
            </a>

            {{-- Schedule --}}
            <a href="{{route('/schedule')}}" class="sidebar-link @yield('schedule')">
                <div class="row sidebar-link @yield('schedule')">
                    <div class="col-1 m-3"><i class="fa fa-calendar fa-2x" aria-hidden="true"></i></div>
                    <div class="col align-self-center">Schedule</div>
                </div>
            </a>

            {{-- Sign Out --}}
            <a href="{{ route('logout') }}" class="sidebar-link" >
                <div class="row sidebar-link">
                    <div class="col-1 m-3"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></div>
                    <div class="col align-self-center">Sign Out</div>
                </div>
            </a>
        </div>
    </div>

    <script>
        function logout() {
            event.preventDefault();
            document.getElementById('logout').submit();
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>
