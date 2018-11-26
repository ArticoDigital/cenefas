@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        @include('admin.includes.show-messages')

        <h2 class="Panel-h2">Actualizar usuario</h2>
        <form action="{{route('user.update',$user->id)}}" method="post" class="row Panel-inputs">
            {{method_field('PUT')}}
            <div class="col-l-8 col-16">
                <input type="text" name="name" value="{{old('name', $user->name)}}" placeholder="Nombre y apellido">
                <input type="password" name="password" placeholder="Contraseña">
                <select name="country_id">
                    <option value="">Selecciona un país</option>
                    @foreach ($countries as $id => $country)
                        <option
                                {{old('country_id', $user->country_id) == $id ?'selected':''}}
                                value="{{$id}}">{{$country}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-l-8 col-16">
                <input type="email" name="email" value="{{old('email', $user->email)}}"
                       placeholder="Correo eléctronico">
                <input type="password" name="password_confirmation" placeholder="Repite contraseña">

                <select name="rol">
                    <option value="">Selecciona un rol</option>
                    @foreach ($roles as $id => $rol)
                        <option
                                {{old('rol', $user->roles->contains($id)) == $rol ?'selected':''}}
                                value="{{$rol}}">{{$rol}}
                        </option>
                    @endforeach
                </select>
            </div>
            <article class="col-16">
                @csrf
                <button>Actualizar</button>
            </article>
        </form>
    </main>
@endsection