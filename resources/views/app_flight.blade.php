<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <link href="{{ url('http://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ url('css/materialize.min.css') }} "  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
          <nav>
              <ul id="dropdown1" class="dropdown-content">
              <li><a href="{{ url('master/currency') }}">Currency</a></li>
              <li><a href="{{ url('master/country') }}">Country</a></li>
              <li><a href="{{ url('master/lang') }}">Language</a></li>
              <li><a href="{{ url('master/airport') }}">Airport</a></li>

          </ul>
          <nav>
            <div class="nav-wrapper title "> 
              <a href="#!" class="brand-logo">Project API</a>
              <ul class="right hide-on-med-and-down">
                <!-- <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li> -->
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Master<i class="material-icons right">arrow_drop_down</i></a></li>
              </ul>
            </div>
          </nav>

            
       <!--  <nav>
          <div class="nav-wrapper">
            <a href="{{ url('/') }}" class="brand-logo center">Project API </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="{{ url('master/currency') }}">Currency</a></li>
              <li><a href="{{ url('master/country') }}">Country</a></li>
              <li><a href="{{ url('master/lang') }}">Language</a></li>
              <li><a href="{{ url('master/airport') }}">Airport</a></li>
              
            </ul>
          </div>
        </nav>
               -->  
      <div class="container">
    @yield('content')
    </div>

    
      <!--Import jQuery before materialize.js-->
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script type="text/javascript" src="{{ url('https://code.jquery.com/jquery-2.1.1.min.js') }}"></script>
      <script type="text/javascript" src="{{ url('js/materialize.min.js') }}"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
  

      @yield('footer')

    </body>
  </html>