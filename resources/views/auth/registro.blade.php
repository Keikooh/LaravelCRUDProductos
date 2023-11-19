@extends('layouts.app_principal')

@section('content')
    <div class='container'>
        <form action="{{route('RegistroStore')}}" method="post">
            {{-- Laraver provee una herramienta para que no se pueda inyectar  --}}
            @csrf
            <div clas="form-group">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                    placeholder="Escribe tu nombre" />

                @error('name')
                    <div style="color:red">{{ $message }}</div>
                @enderror
                <div>

                    <div clas="form-group">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control"
                            value="{{ old('username') }}" placeholder="Crea un usuario" />

                        @error('username')
                            <div style="color:red">{{ $message }}</div>
                        @enderror
                        <div>

                            <div clas="form-group">
                                <label for="email" class="form-label">Correo electronico</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" placeholder="Escribe tu correo"/>

                                @error("email")
                                    <div style="color:red">{{ $message }}</div>
                                @enderror
                                <div>

                                    <div clas="form-group">
                                        <label for="password" class="form-label">Contrasena</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Escribe tu contrasena"/>
        
                                       
                                        <div>

                                            <div clas="form-group">
                                                <label for="password_confirmation" class="form-label">Repetir contrasena</label>
                                                <input type="password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Repite tu contrasena"/>
                
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
