<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Publicaciones</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <style type="text/css">
  body {
    background-image: url('https://www.eluniversohoy.net/wp-content/uploads/2018/07/57778599787j.jpg');
    background-size: 1370px 2100px;
    justify-content: center;
    border: 30px;
  }
  .row{
    justify-content: center;
  }
  @media screen and (max-width: 850px){
		body{
      background-image: url('https://i.imgur.com/PT00LjC.jpg');
      background-size: 425px 810px;
		}
  }
</style>
</head>
<body>
@extends('layouts.app')
@section('content') 
    @auth
    ######
          <div class="container">
          <a href="{{ action('PostController@userPosts')}}"><button type="button" class="btn btn-primary btn-lg">Mis publicaciones</button></a>
          <p> </p>
          </div>
     #####     
          
     @endauth
    <div class="container">
    @foreach ($publicaciones as $publicacion)
    <div class="row mb-4 justify-content-md-center">
      <div class="cold-md-6">
        <div class="card">
         <div class="card-body">
           <h5 class="card-title">
              <a href="{{ action('PostController@show', $publicacion->id) }}">{{ $publicacion->title }}</a>
           </h5>
         </div>
         <img src="{{ Storage::url($publicacion->image) }}" class="card-img-top" alt="...">
        </div>
     </div>
    </div>
    @endforeach
    </div>
@endsection
</body>
</html>