<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Final</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> {{--
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <!-- Data table-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" type="text/css" />

    <!-- select 2-->
    {!!Html::script('select2-4.0.3/vendor/jquery-2.1.0.js')!!} {!!Html::script('select2-4.0.3/dist/js/select2.js')!!} {!!Html::style('select2-4.0.3/dist/css/select2.css',['rel'=>"stylesheet"])!!}

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
     <!-- estyles  -->
    <link href="{{asset('Styles/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <style>
        body {
            font-family: 'Lato';
            
        }
        .fa-btn {
            margin-right: 6px;
        }
        .navbarInverse{
            background-color: #C52B28;
            border-radius: 20px;
            border-color: rgb(152, 109, 108);
            border-width: 2px;
        }
        .rojolink{
            color: #C9302C;
        }
    </style>
</head>

<body id="app-layout">
    <nav class="navbarInverse navbar">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('Banner/logo_unac.png')}}" alt="Home" style="width: 30pt"></img>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
    
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                    </li>
                    <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                    </li>
                    @else
                    <li><a href="{{ url('/futbolCincos') }}"><i style="font-size:14px" class="fa">&#xf1e3;</i> Futbol 5</a>
                    </li>
                    <li><a href="{{ url('/futbolDoces') }}"><i style="font-size:14px" class="fa">&#xf1e3;</i> Futbol 12</a>
                    </li>
                    <li><a href="{{ url('/baloncestos') }}"><i style="font-size:14px" class="fa">&#xf17d;</i> Baloncesto</a>
                    </li>
                    <li><a href="{{ url('/voleibols') }}"><i style="font-size:14px" class="fa">&#xf1cd;</i> Voleibol</a>
                    </li>
                    <li><a href="{{ url('/bicicrosses') }}"><i class="material-icons" style="font-size:16px">directions_bike</i> Bicicross</a>
                    </li>
                    <li><a href="{{ url('/reservas') }}"><span class="glyphicon glyphicon-saved"></span> Reservas</a>
                    </li>




                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}" style="color: #C9302C"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{--
    <script src="{{ elixir('js/app.js') }}"></script> --}}

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    {!!Html::script('js/jquery-2.1.0.min.js')!!} {!!Html::script('js/controlReservas.js')!!}

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
</body>

</html>