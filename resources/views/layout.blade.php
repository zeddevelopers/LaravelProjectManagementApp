<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title','Laravel')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse" style="margin:0; border-radius:0;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">Laravel</a>
      </div>
      <ul class="nav navbar-nav">
        <li>
          <a href="/project">All Projects</a>
        </li>
        <li>
          <a href="/project/create">Create Project</a>
        </li>
      </ul>
    </div>
  </nav>

  @yield('content')

  <style>
    .error_field{
      border:1px solid #f00;
    }
  </style>

</body>
</html>
