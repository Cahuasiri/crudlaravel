@extends('adminlte::page')

@section('title', 'CRUD laravel 8')

@section('content_header')
    <h1>CRUD con laravel 8 y Bootstrap 5</h1>
@stop

@section('content')
<a href="articulos/create" class='btn btn-primary'>CREAR</a>

<table id="articulos" class="table table-striped">
    <thead>
        <tr>
            <th scope="col"> ID </th>
            <th scope="col"> CODIGO </th>
            <th scope="col"> DESCRIPCION </th>
            <th scope="col"> CANTIDAD </th>
            <th scope="col"> PRECIO </th>
            <th scope="col"> ACCIONES </th>
        </tr>
    </thead>
    <tbody>
        @foreach($articulos as $articulo)
            <tr>
                <td>{{ $articulo->id }}</td>
                <td>{{ $articulo->codigo }}</td>
                <td>{{ $articulo->descripcion }}</td>
                <td>{{ $articulo->cantidad }}</td>
                <td>{{ $articulo->precio }}</td>
                <td>
                    <form action="{{ route ('articulos.destroy',$articulo->id) }}" method="POST">
                        <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Borrar </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function() {
              $('#articulos').DataTable({
                "lengthMenu" : [[5,10,50,-1],[5,10,50,"all"]]
              });
                });
        </script>
@stop