<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  img{
    max-width: 100%;
    display: block;
  }
  .container{
    width: 1024px;
    margin: 0 auto;
  }
  .title{
    text-align: center;
    color: red;
    font-size: 60px;
  }
</style>
<body>
  <div class="container">
    <h1 class="title">{{$title}}</h1>

  </div>
</body>
</html>
