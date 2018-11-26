@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        @if($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2 class="Panel-h2">Nuevo usuario</h2>
        <form action="{{route('user.store')}}" method="post" class="row Panel-inputs">
            <div class="col-l-8 col-16">
                <input type="text" name="name" value="{{old('name')}}" placeholder="Nombre y apellido">
                <input type="password" name="password" placeholder="Contraseña">
                <select name="country_id">
                    <option value="">Selecciona un país</option>
                    @foreach ($countries as $key => $country)
                        <option
                                {{old('country_id') == $key ?'selected':''}}
                                value="{{$key}}">{{$country}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-l-8 col-16">
                <input type="email" name="email" value="{{old('email')}}" placeholder="Correo eléctronico">
                <input type="password" name="password_confirmation" placeholder="Repite contraseña">
                <select name="rol">
                    <option value="">Selecciona un rol</option>
                    @foreach ($roles as $rol)
                        <option
                                {{old('rol') == $rol ?'selected':''}}
                                value="{{$rol}}">{{$rol}}
                        </option>
                    @endforeach
                </select>
            </div>
            <article class="col-16">
                @csrf
                <button> Crear</button>
            </article>
        </form>
    </main>
@endsection