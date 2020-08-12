<body onload="PreLoaderFunction()">
    <!-- Preloader -->
    <div id="loading"></div>
    <!-- Preloader -->
    
{{-- Navbar Start --}}
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('frontend_assets/images/logo5.png') }}" alt="Logo" style="width:220px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-right">
                <li class="nav-item">
                    <a class="nav-link text-muted" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="/rent_register">Rent out your driveway</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted" href="#">Help</a>
                </li>

                @guest
                
                <li class="nav-item">
                    <a class="nav-link text-muted" href="{{url('login')}}">Login</a>
                </li>

                <li style="margin:7px;" class="nav-item">
                <a href="{{url('register')}}" class="btn-signup">SignUp</a>
                </li>
                @endguest

                @auth
                <li style="margin:7px;" class="nav-item">

                <form action="{{route('logout')}}" method="post" >
                    @csrf
                <button type="submit" class=" btn btn-info">Sign-out</button>
                </form>
                </li>
                @endauth
            </ul>
        </div>
    </nav>
    {{-- Navbar end --}}