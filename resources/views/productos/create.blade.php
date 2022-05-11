@extends('layouts.principal')

@section('contenido')
<div class="row">
  <h1 class =" light-blue-text text-lighten-3">Nuevo producto</h1>
</div>
<div class="row">
    <form method = "post" class="col s12" action = "{{route('productos.store')}}">
      @csrf
      <div class="row">
        <div class="input-field col s8">
        <input type="text" id = "nombre" placeholder = "" class = "validate" name = "nombre">
        <label for="nombre">Nombre del producto</label>
        </div>
        </div>
        <div class="row">
          <div class="input-field col s8">
            <textarea class = "materialize-textarea" name="desc" id="desc "></textarea>
             <label for="desc">Descripcion</label>
          </div>
        </div>
        <div class="row">
        <div class="input-field col s8">
          <input id="precio" type="text" class="validate" name = "precio">
          <label for="precio">precio</label>
        </div>
        </div>
      <div class="row">
        <div class="file-field input-field col s8">
          <div class="btn">
            <span>Imagen de producto...</span>
          <input name = "imagen" type = "file">
        </div>
        <div class="file-path-wrapper">
          <input class= "file-path validate" type="text">
        </div>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s8">
    <select name = "categoria">
      <option value="" disabled selected>Elija categoria</option>
      @foreach($categorias as $categoria)
      <option value="{{$categoria->id}}">
        {{$categoria->Nombre}}
      </option>
      @endforeach
    </select>
    <label>Materialize Select</label>
  </div>
      </div>
      <div class="row">
      <div class="input-field col s8">
    <select name = "marca">
      <option value="" disabled selected>Elija marca</option>
      @foreach($marcas as $marca)
      <option value="{{$marca->id}}">
        {{$marca->Nombre}}
      </option>
      @endforeach
    </select>
    <label>Materialize Select</label>
  </div>
      </div>
      <div class="row">
      <button class="btn waves-effect waves-light" type="submit" >Guardar
  </button>
</div>
          </div>
        </div>
    </form>
  </div>

  @endsection
        