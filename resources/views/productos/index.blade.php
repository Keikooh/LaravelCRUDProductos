@extends('layouts.app')

@section('content')
    <h1 class="text-center">Productos</h1>

    <div class='container' method='get'>
        <form action="{{ route('ProductosCreate') }}">
            <button class='btn btn-primary mb-2' type='submit'>
                <submit class='p-4'>Nuevo</submit>
            </button>
        </form>

        <table class='table table-responsive table-stripped'>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Precio</td>
                <td>Categoria</td>
                <td>Acciones</td>
            </tr>

            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->categoria->nombre}}</td>
                    <td>
                        <div class='d-flex justify-content-center'>
                            <a class='btn btn-success mx-1' href='{{ route('ProductosEdit', $producto->id) }}'>Editar</a>
                            <form action="{{ route('ProductosDestroy', $producto->id) }}"method="POST"
                                class="formulario-eliminar">
                                @csrf
                                @method('DELETE')
                                <button class='btn btn-danger mx-1'>Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        {{-- aqui va la correcion de la paginacion --}}
        {{ $productos->links('pagination::bootstrap-5') }}
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formularios = document.querySelectorAll('.formulario-eliminar');

            formularios.forEach(formulario => {
                formulario.addEventListener('submit', function(e) {
                    e.preventDefault();

                    Swal.fire({
                        title: '¿Estás seguro?',
                        text: '¡Esta acción no es reversible!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sí, eliminar',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
