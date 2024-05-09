<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Abel');

        html, body {
            font-family: Abel, Arial, Verdana, sans-serif;
        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
        }

        .card {
            width: 450px;
            height: 250px;
            background-color: #fff;
            background: linear-gradient(#f8f8f8, #fff);
            box-shadow: 0 8px 16px -8px rgba(0, 0, 0, 0.4);
            border-radius: 6px;
            overflow: hidden;
            position: relative;

        }

        .card h1 {
            text-align: center;
        }

        .card .additional {
            position: absolute;
            width: 150px;
            height: 100%;
            background: linear-gradient(#dE685E, #EE786E);
            transition: width 0.4s;
            overflow: hidden;
            z-index: 2;
        }

        .card.green .additional {
            background: linear-gradient(#92bCa6, #A2CCB6);
        }


        .card:hover .additional {
            width: 100%;
            border-radius: 0 5px 5px 0;
        }

        .card .additional .user-card {
            width: 150px;
            height: 100%;
            position: relative;
            float: left;
        }

        .card .additional .user-card::after {
            content: "";
            display: block;
            position: absolute;
            top: 10%;
            right: -2px;
            height: 80%;
            border-left: 2px solid rgba(0, 0, 0, 0.025);
            */
        }

        .card .additional .user-card .level,
        .card .additional .user-card .points {
            top: 15%;
            color: #fff;
            text-transform: uppercase;
            font-size: 0.75em;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.15);
            padding: 0.125rem 0.75rem;
            border-radius: 100px;
            white-space: nowrap;
        }

        .card .additional .user-card .points {
            top: 85%;
        }

        .card .additional .user-card svg {
            top: 50%;
        }

        .card .additional .more-info {
            width: 300px;
            float: left;
            position: absolute;
            left: 150px;
            height: 100%;
        }

        .card .additional .more-info h1 {
            color: #fff;
            margin-bottom: 0;
        }

        .card.green .additional .more-info h1 {
            color: #224C36;
        }

        .card .additional .coords {
            margin: 0 1rem;
            color: #fff;
            font-size: 1rem;
        }

        .card.green .additional .coords {
            color: #325C46;
        }

        .card .additional .coords span + span {
            float: right;
        }

        .card .additional .stats {
            font-size: 2rem;
            display: flex;
            position: absolute;
            bottom: 1rem;
            left: 1rem;
            right: 1rem;
            top: auto;
            color: #fff;
        }

        .card.green .additional .stats {
            color: #325C46;
        }

        .card .additional .stats > div {
            flex: 1;
            text-align: center;
        }

        .card .additional .stats i {
            display: block;
        }

        .card .additional .stats div.title {
            font-size: 0.75rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        .card .additional .stats div.value {
            font-size: 1.5rem;
            font-weight: bold;
            line-height: 1.5rem;
        }

        .card .additional .stats div.value.infinity {
            font-size: 2.5rem;
        }

        .card .general {
            width: 300px;
            height: 100%;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            box-sizing: border-box;
            padding: 1rem;
            padding-top: 0;
        }

        .card .general .more {
            position: absolute;
            bottom: 1rem;
            right: 1rem;
            font-size: 0.9em;
        }


    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom container">
    <div class="col-md-3 mb-2 mb-md-0">
        MAMA
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2">Features</a></li>
        <li><a href="#" class="nav-link px-2">Pricing</a></li>
        <li><a href="#" class="nav-link px-2">FAQs</a></li>
        <li><a href="#" class="nav-link px-2">About</a></li>
    </ul>

    <div class="col-md-3 text-end">
        @auth
            <a href="{{route('dashboard')}}">
                <button type="button" class="btn btn-outline-primary me-2">{{auth()->user()->name}}</button>
            </a>
        @else
            <a href="{{route('login')}}">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
            </a>
            <a href="{{route('register')}}">
                <button type="button" class="btn btn-primary">Sign-up</button>
            </a>
        @endauth

    </div>
</header>


<div id="carouselExampleCaptions" class="carousel slide container-fluid" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('storage/corusel1.webp')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('storage/corusel2.webp')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('storage/corusel3.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="py-5">
    <div class="container-fluid p-5">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary container mb-5">
            <div class="col-lg-6 px-0">
                <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                    efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
            </div>
        </div>


        <div class="row my-5">
            {{--            @foreach($teams as $team)--}}

            {{--            <div class="col-md-6">--}}
            {{--                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">--}}
            {{--                    <div class="col p-4 d-flex flex-column position-static">--}}
            {{--                        <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>--}}
            {{--                        <h3 class="mb-0">{{ $team->name }}</h3>--}}
            {{--                        <div class="mb-1 text-body-secondary">Nov 12</div>--}}
            {{--                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>--}}
            {{--                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">--}}
            {{--                            Continue reading--}}
            {{--                            <svg class="bi"><use xlink:href="#chevron-right"></use></svg>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}
            {{--                    <div class="col-auto d-none d-lg-block">--}}
            {{--                        <img src="{{ $team->logo_path  }}" alt="..." width="200" height="250" class="p-3">--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            @endforeach--}}


            @foreach($teams as $team)
                <div class="col-4 my-2">

                    <a href="{{ route('team.squads', $team->id) }}" class="card  m-auto">
                        <div class="additional">
                            <div class="user-card">
                                <div class="level center">
                                    Level 13
                                </div>
                                <div class="points center">
                                    {{count($team->trophies->data)}} Trophies
                                </div>

                                <img src="{{$team->logo_path}}" width="110"
                                     height="110"
                                     class="rounded-circle shadow-4-strong center">
                            </div>
                            <div class="more-info">
                                <h1>{{ $team->name }}</h1>
                                <div class="coords">
                                    <span>League:</span>
                                    <span>{{ $team->league->data->name }}</span>
                                </div>
                                <div class="coords">
                                    <span>Coach:</span>
                                    <span>{{ $team->coach->data->common_name }}</span>
                                </div>
                                <div class="coords">
                                    <span>Continent</span>
                                    <span>{{ $team->country->data->extra->continent }}</span>
                                </div>
                                <div class="stats">
                                    <div>
                                        <div class="title">Code</div>
                                        <i class="fa fa-trophy"></i>
                                        <div class="value">{{ $team->short_code }}</div>
                                    </div>
                                    <div>
                                        <div class="title">Country</div>
                                        <i class="fa fa-gamepad"></i>
                                        <div class="value">
                                            <img src="{{ $team->country->data->image_path }}" width="30">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="title">FIFA</div>
                                        <i class="fa fa-group"></i>
                                        <div class="value">{{ $team->country->data->extra->fifa }}</div>
                                    </div>
                                    <div>
                                        <div class="title">Coffee</div>
                                        <i class="fa fa-coffee"></i>
                                        <div class="value infinity">∞</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="general">
                            <h1>{{ $team->name }}</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a volutpat mauris, at
                                molestie
                                lacus.
                                Nam vestibulum sodales odio ut pulvinar.</p>
                            <span class="more">Mouse over the card for more info</span>
                        </div>
                    </a>

                </div>
            @endforeach
        </div>
    </div>
</div>


<div class="container">
    <footer class="py-5">
        <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>© 2024 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="#">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg>
                    </a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a></li>
            </ul>
        </div>
    </footer>
</div>
</body>
</html>
