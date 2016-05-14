<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <style media="screen">
      body {
        -webkit-text-size-adjust: 100%;
      }
    </style>
    <title>僕はヒーロー！！</title>
    <script src="{{{asset('/assets/jquery/jquery.min.js')}}}"></script>
    <script src="{{{asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>
    <link href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}" rel="stylesheet">
    <link href="{{{asset('/assets/css/main.css')}}}" rel="stylesheet">
    @yield('stylesheet')
  </head>
  <body>
    <div class="content">
      <div>
        @section('content')

        @show
      </div>
    </div>
  </body>
</html>
