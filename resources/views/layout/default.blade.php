<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COACHTECH</title>
    <style>
    body {
      font-size:16px;
      margin: 5px;
    }
    h1{
        font-size: 16px;
    }
    .content {
      margin:10px; 
    }
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    <div class="content">
    @yield('content')
    </div>
</body>
</html>