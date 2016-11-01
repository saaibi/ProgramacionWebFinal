
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

    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" type="text/css" />
    
    {!!Html::script('select2-4.0.3/vendor/jquery-2.1.0.js')!!}
    {!!Html::script('select2-4.0.3/dist/js/select2.js')!!}
    {!!Html::style('select2-4.0.3/dist/css/select2.css',['rel'=>"stylesheet"])!!}
    {!!Html::style('select2-materialize.css',['rel'=>"stylesheet"])!!}
    
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="{{ url('/logout') }}">Salir</a></li>
    </ul>
    <nav>
      <div class="nav-wrapper">
        <a href="{{ url('/') }}" class="brand-logo">Final</a>
        <ul class="right hide-on-med-and-down">
         <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    @else
                        <li><a href="{{ url('/futbolCincos') }}"><span class="glyphicons glyphicons-soccer-ball"></span>Futbol 5</a></li>
                        <li><a href="{{ url('/futbolDoces') }}"><span class="glyphicons glyphicons-soccer-ball"></span>Futbol 12</a></li>
                        <li><a href="{{ url('/baloncestos') }}"><span class="glyphicons glyphicons-basketball"></span>Baloncesto</a></li>
                        <li><a href="{{ url('/voleibols') }}"><span class="glyphicons glyphicons-life-preserver"></span>Voleibol</a></li>
                        <li><a href="{{ url('/bicicrosses') }}"><span class="glyphicons glyphicons-bicycle"></span>Bicicross</a></li>
                        <li><a href="{{ url('/reservas') }}"><span class="glyphicons glyphicons-disk-saved"></span>Reservas</a></li>
                       <!-- Dropdown Trigger -->
                          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                 @endif
        </ul>
      </div>
    </nav>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    {!!Html::script('js/jquery-2.1.0.min.js')!!}
    {!!Html::script('js/controlCitas.js')!!}
    
    <script  src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    
</body>
</html>
