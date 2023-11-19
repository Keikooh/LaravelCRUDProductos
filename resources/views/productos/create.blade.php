@extends('layouts.app')

@section('content')
    <h1 class="text-center">Nuevo producto</h1>

    <div class='container'>
        <form action="{{route('ProductosStore')}}" method="post">
        {{-- Laraver provee una herramienta para que no se pueda inyectar  --}}
            @csrf
            <div clas="form-group">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control"/>

                @error('nombre')
                    <div style="color:red">{{$message}}</div>
                @enderror
            <div>

            <div clas="form-group">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control"/>

                @error('descripcion')
                    <div style="color:red">{{$message}}</div>
                @enderror
            <div>

            <div clas="form-group">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control"/>

                @error('precio')
                    <div style="color:red">{{$message}}</div>
                @enderror
            <div>

            <div clas="form-group">
                <label for="categoria" class="form-label">Categoria</label>
                <select name="categoria" id="categoria" class="form-select">
                    @foreach( $categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endforeach
                </select>
                @error('categoria')
                    <div style="color:red">{{$message}}</div>
                @enderror
            <div>

            <div class="form-group mt-2">
                <button class="btn btn-primary">Guardar</button>
                <a href="{{route('ProductosIndex')}}" class="btn btn-danger">Cancelar</a>
            <div>
        </form>
    </div>
@endsection