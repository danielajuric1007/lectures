<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
            html, body {
                background: url("img/slika1.jpg");
                text-align: center;
                height: 100%;
                width: 100%;
                -webkit-background-size: cover;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;

            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            a:hover {
                color: #fff;
                background-color: #0077b3;
            }
            
            .card{
                color: black;
                position: absolute;
                top: 50%;
                left:10%;

                width: 450px;
                height: 520px;
                background: rgba(0,0,0,0.5);
                color: #fff;
                padding: 50px 30px;
                              
            }

            .form-img{
                width: 80px;
                height: 80px;
                border-radius: 50%;
                position:absolute;
                top: -40px;
                left: calc(50% - 30px);

            }

            .card-header{
                text-align:center;
                font-size: 25px;
                margin: 0;
                padding: 0 0 20px;

            }

            .card label{
                margin:0;
                padding: 0;
                font-weight: bold;
                text-align: left;
                
            }
            .card input{
                border-bottom: 1px solid #fff;
                background: transparent;
                height: 40px;
                color: #fff;
                font-size: 16px;
                width: 200px;
                margin-bottom:20px;

            }

            .card a, button{
                display: block;
                border-radius: 40px;
                text-align: center;
                text-decoration: none;
                color: #fff;
                margin-top:35px;
                padding: 10px;
                cursor:pointer;
                color: #000;
                


                /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#d0e4f7+0,73b1e7+24,0a77d5+50,539fe1+79,87bcea+100;Blue+Pipe+%231 */
background: #d0e4f7; /* Old browsers */
background: -moz-linear-gradient(top,  #d0e4f7 0%, #73b1e7 24%, #0a77d5 50%, #539fe1 79%, #87bcea 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #d0e4f7 0%,#73b1e7 24%,#0a77d5 50%,#539fe1 79%,#87bcea 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #d0e4f7 0%,#73b1e7 24%,#0a77d5 50%,#539fe1 79%,#87bcea 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d0e4f7', endColorstr='#87bcea',GradientType=0 ); /* IE6-9 */

            }

            .card-lecture{
                color: black;
                width: 500px;
                height: 450px;
                background: rgba(0,0,0,0.5);
                color: #fff;
                padding: 30px 40px 50px 30px;
            }

            .card-img-top{
                width: 250px;
                height: 200px;
                position:center;
                padding: 0px 20px 10px 5px;
            }

            .card-lecture-body{
                color: white;
            }

            
        </style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md" style="background-color: #005580;">
            <div class="container">
                <a class="navbar-brand" style="color:white" href="{{ url('/lectures') }}">
                    Lekcije
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto " >
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" >
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<script src="https://cdn.tiny.cloud/1/6txl6hi0nsvumna5jymr25d6kcyi0h8f5c69jtjr76xwukjn/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector:'#description',
        plugins: 'link image table wordcount lists emoticons',
    
    });
</script>
</body>

</html>
