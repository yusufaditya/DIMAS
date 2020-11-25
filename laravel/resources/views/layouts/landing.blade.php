<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome-free/css/fontawesome.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @yield('plugin')
</head>

<body>
    @yield('style')

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-danger fixed-top">
        <div class="ml-4">
            <a class="navbar-brand text-white" href="{{route('/')}}"><img class="image mb-2" src="assets/img/rimas.png" width="30" height="30"> IMAS</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item  ml-5">
                    <a class="nav-link text-white active" href="{{route('/')}}">Home</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link text-white " href="{{route('/about')}}">About</a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link text-white" href="{{route('/service')}}">Service</a>
                </li>
                <li class="nav-item ml-5 ">
                    <a class="nav-link text-white" href="{{route('/contact')}}">Contact</a>
                </li>
                <li class="nav-item mr-3">
                    <button class="btn btn-primary"> login</button>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End of Navbar -->

    <div class="main content">
        @yield('mainContent')
    </div>
</body>

<!-- script display -->
@yield('script')