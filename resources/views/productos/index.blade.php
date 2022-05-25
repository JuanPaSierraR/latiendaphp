@extends('layouts.principal')

@section('contenido')
<div class="row">
    <h1 class="cyan-text accent-2">Catalogo de productos</h1>
   
   
</div>
@foreach($productos as $producto)
<div class="row">
    <div class="card col s16 m6 ">
        <div class="card-content">
            <img src="{{ asset('img/'.$producto->Imagen) }}" />

        </div>
    <div class="card-tabs ">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test4">Nombre:</a></li>
        <li class="tab"><a class="active" href="#test5">Descripcion</a></li>
        <li class="tab"><a href="#test6">Precio</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="test4"> {{$producto->Nombre}}</div>
      <div id="test5">{{$producto->Desc}}</div>
      <div id="test6">{{$producto->Precio}}</div>
    </div>
  </div>
  </div>

@endforeach

@endsection