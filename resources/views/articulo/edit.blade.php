@extends('adminlte::page')

@section('title', 'CRUD Laravel 8')

@section('content_header')
    <h2>Editar Datos</h2>
@stop

@section('content')

    <h2>EDITAR ARTICULOS</h2>
    <form action="/articulos/{{ $articulo->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label"> Codigo </label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" value="{{$articulo->codigo}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Descripcion </label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$articulo->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Cantidad </label>
            <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Precio </label>
            <input id="precio" name="precio" type="number" step="any" value="{{ $articulo->precio }}" class="form-control" tabindex="4">
        </div>
            <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="6"> Guardar </button> 
    </form>    

@stop