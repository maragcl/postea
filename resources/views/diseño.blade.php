<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Document</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">


    <style type="text/css">
  body {
    background-image: url('https://66.media.tumblr.com/e358664df3dceebd5d23872f7abeaefd/tumblr_p64899fvjC1vox13io2_500.jpg');
    background-size: 1370px 2100px;
    justify-content: center;
    border: 30px;
  }


 
  .row{
    justify-content: center;
  }
  
  @media screen and (max-width: 850px){
		body{
      background-image: url('https://data.pixiz.com/output/user/frame/preview/400x400/6/4/4/7/3287446_04026.jpg');
      background-size: 425px 810px;
		}
  }

  </style>

</head>
<body>
@auth
@extends('layouts.app')
@section('content') 
    <div class="container">
        <a href="{{ action('PostController@index') }}"><button type="button" class="btn btn-info" >Todas las publicaciones</button> </a>
    </div>
    @foreach ($publicaciones as $publicacion)
    <div class="row mb-4 justify-content-md-center">
      <div class="cold-md-6">
        <div class="card">
         <div class="card-body">
         </div>
         <img src="{{ asset($publicacion->image) }}" class="card-img-top" alt="...">
         <a href="{{ action('PostController@destroy', $publicacion->id) }}" class="card-link">Eliminar el post</a>
        </div>
     </div>
    </div>
    @endforeach
    </div>
@endauth
@endsection
</body>
</html>