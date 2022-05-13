@extends('adminlte::page')

@section('title', 'CRUD laravel 8')

@section('content')
<a href="categorias/create" class='btn btn-primary'>CREAR</a>

<table id="categorias" class="table table-striped">
    <thead>
        <tr>
            <th scope="col"> ID </th>
            <th scope="col"> CODIGO </th>
            <th scope="col"> DESCRIPCION </th>
            <th scope="col"> ACCIONES </th>
        </tr>
    </thead>
    <tbody>
         @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->codigo }}</td>
                <td>{{ $categoria->descripcion }}</td>              
                <td>
                    <form action="{{ route ('categorias.destroy',$categoria->id) }}" method="POST">
                        <a href="/categorias/{{ $categoria->id }}/edit" class="btn btn-info">Editar</a>
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
              $('#categorias').DataTable({
                "lengthMenu" : [[5,10,50,-1],[5,10,50,"all"]]
              });
                });
        </script>
@stop