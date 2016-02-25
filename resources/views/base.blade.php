<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Demo Web</title>

    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/theme/theme.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

  </head>

  <body role="document">
 
 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Test laravel 5</a>
        </div>
        <div class="navbar-collapse collapse">
          <div class="navbar-form navbar-right"></div>
          <form class="navbar-form navbar-right" role="form">
          @if (Auth::guest())
            <a href="/login" class="btn btn-success">login</a>
          @else
            <a href="/logout" class="btn btn-danger">Salir</a>
            
          @endif
          </form>

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">

    @yield('contenido')
      
    </div> <!-- /container -->


 </body>
</html>
