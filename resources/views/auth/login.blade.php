@extends('layouts.app_principal')

@section('content')
    <div class='container'>
        
        <form action="{{ route('LoginStore') }}" method="post">
            {{-- Laraver provee una herramienta para que no se pueda inyectar  --}}
            @csrf
            @if(session('mensaje'))
                <div style="color:red">{{ session('mensaje') }}</div>
            @endif


            <div clas="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" placeholder="Usuario" />

                @error('username')
                    <div style="color:red">{{ $message }}</div>
                @enderror
                <div>



                <div clas="form-group">
                    <label for="password" class="form-label">Contrasena</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Escribe tu contrasena" />
                    @error('password')
                        <div style="color:red">{{ $message }}</div>
                    @enderror

                <div>

                <div class="form-group mt-2">
                    <button class="btn btn-primary">Crear cuenta</button>
                    <a href="{{ route('Dashboard') }}" class="btn btn-danger">Cancelar</a>
                <div>
            </form>
        </div>
@endsection
