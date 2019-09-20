<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />    

    <title>PRUEBAS de APIS, CRUDs, MySQL, LARAVEL, REACTjs, VUEjs</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">

  </head>

  <body>

    <nav class="navbar navbar navbar-expand-md fixed-top flex-md-nowrap p-0 shadow">
    
      <div class="navbar-header col-sm-2" style="width:12%;">

        <a class="navbar-brand" href="#">

        </a>

      </div>

      <div class="" style="max-width:75%; width:75%;">
        <h4 id="titulo">Sistema Integral</h4>
      </div>
          <img width="112px" height="63px" class="logo-extra" src="" ismap="">

      <div class="col-lg-2 col-md-2 col-sm-2 pull-right" style="width:12%;">
        @section('menufijo')
        @show
      </div>

    </nav>

    <div class="row" style="padding:0px !important; margin-left:5px; margin-right:5px;">
 
      <div class="menu_izqu col-md-2 pull-left">
            @section('menuppal')
            @show
     </div>

      <div class="col-md-10" style="flex: 0 0 87%; width: 87% !important; max-width: 87% !important;" >
        
        <div clas="row">

            <div class="izquierda col-md-5 pull-left">
            <div class="panel panel-default">
                <div class="container-fluid" style="margin-top:0px;">
                </div>
                <div class="container-fluid" style="margin-top:0px;">
                @yield('content')
                </div>
            </div>
            </div>

            <div class="derecha col-md-5 pull-right">
            <div class="panel panel-default">
                <div class="container-fluid" style="margin-top:0px;">
                </div>
                <div class="container-fluid" style="margin-top:0px;">
                </div>
            </div>
            </div>

        </div>

        <div class="publicprv col-md-2 pull-right">
          <div class="panel panel-default">
            @section('publicidad')
            @show
          </div>
        </div>
      </div>

    </div>

    <div class="copyright row navbarr">

      <div class="col-12" style="margin-top:7px !important;">
        <div id="foo" style="height:14px; color:white; bottom: 0;" >
          <center>  &copy; Copyright 2018-2028 herlbeng &#174; - Todos los derechos reservados</center>
        </div>
      </div>
    </div>

    <!-- menu slide -->

    @section('foot-js')
    @show

  </body>
</html>