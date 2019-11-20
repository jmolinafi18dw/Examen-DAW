@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="" method="">
    @csrf
    Nombre:<br>
    <input type="text" name="nombre">
    <br><br>
    email:<br>
    <input type="text" name="email">
    <br><br>
    password:<br>
    <input type="text" name="password">
    <br><br>
    likes:<br>
    <input type="text" name="likes">
    <br><br>

    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
