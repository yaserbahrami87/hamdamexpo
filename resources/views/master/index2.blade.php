<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="یاسر بهرامی">

    <title>جشنواره اکسپوی سراسری عکس همدم </title>
    <meta name="description" content="جشنواره اکسپوی سراسری عکس همدم ">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link href="/css/bootstrap-rtl.min.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/lightbox-gallery-blurred/jquery.lightbox.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="/favicon.png">
    <link rel="stylesheet" href="/plugins/intl-tel-input/build/css/intlTelInput.css">
    <link href="/slick/slick.css" rel="stylesheet" />
    <link href="/slick/slick-theme.css" rel="stylesheet" />

    @if(isset($headerScript))
        {{$headerScript}}
    @endif

</head>
<body>
@include('sweet::alert')
<main class="container-fluid" id="main_gallery" dir="rtl">
    <div class="container">
        <div class="row">

            <nav class="col-12 navbar navbar-expand-lg navbar-light bg-transparent mb-5">
                <a class="navbar-brand" href="/">
                    <img src="/images/{{$settings->where('setting','logo')->first()->value}}" class="img-fluid" />
                </a>

                <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarVerticalContent" aria-controls="navbarVerticalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarVerticalContent">
                    <ul class="navbar-nav mr-auto p-0">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/">خانه</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark" href="/call" >
                                فراخوان
                            </a>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link  text-dark" href="/gallery/{{$festival->festival}}" >
                                گالری
                            </a>
                            {{--
                            <div class="dropdown-menu">
                                @foreach($festivals as $festival)
                                        <a class="dropdown-item" href="/farsi/gallery/{{$festival->festival_fa}}">{{$festival->festival_fa}}</a>
                                @endforeach
                            </div>
                            --}}
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark" href="/pillars/{{$festival->festival}}" >
                                ارکان جشنواره
                            </a>
                        </li>
                        @guest
                            <li class="nav-item active">
                                <a class="nav-link text-dark" href="/login">ورود / عضویت <span class="sr-only">(current)</span></a>
                            </li>
                        @else
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    {{Auth::user()->fname}}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->is_admin==1)
                                        <a class="dropdown-item" href="/admin">داشبورد</a>
                                    @else
                                        <a class="dropdown-item" href="/panel">داشبورد</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        {{csrf_field()}}
                                    </form>
                                </div>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/panel/competition">ارسال اثر</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark" href="{{route('news.all')}}"   >
                                اخبار
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/contactUs/create">تماس با ما</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    {{$slot}}
</main>
@include('master.footer')
