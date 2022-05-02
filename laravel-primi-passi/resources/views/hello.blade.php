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

  a{
    text-decoration: none;
    color: currentColor;
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

  header{
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-bottom: 30px;
    background-color: blue;
    padding: 20px;
    color: white;
    text-transform: uppercase;
  }
  header a:hover{
    text-decoration: underline
  }

</style>
<body>
<header>
    <a href="{{ route('contatti') }}"> Contatti </a>
    <a href="{{ route('about') }}"> About </a>
    <a href="{{route('gallery')}}"> Gallery </a>
    <a href="{{route('where')}}"> Where </a>
  </header>
  <div class="container">
    <h1 class="title">{{$title}}</h1>

  </div>
</body>
</html>
