@extends('partial.head')
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/kurt.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/profile')}}">Profile</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/experience')}}">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/portofolio')}}">Portofolio</a></li>
                </ul>
            </div>
        </nav>

        @yield('content')
     
        </div>