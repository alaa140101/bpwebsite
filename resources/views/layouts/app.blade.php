<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BP Website - @yield('title')</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.min.css">
</head>
<body>
  @include('inc.navbar');
  
  <div class="container">
    <div class="jumbotron">
      @yield('content')  
    </div>  
  </div>  
</body>
</html>