@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        @include('admin.includes.show-errors')
        <h2 class="Panel-h2">Nuevo archivo</h2>
        <form action="{{route('file.store')}}" enctype="multipart/form-data" method="post" class="row Panel-inputs">
            @csrf
            <div class="col-l-8 col-16">
                <select name="country_id" id="FileCountries">
                    <option value="">Seleccione un país</option>
                    @foreach($countries as $id => $country)
                        <option {{old('country_id') == $id?'':''}} value="{{$id}}">{{$country}}</option>
                    @endforeach
                </select>
                <label for="">
                    <p class="margin-0">Seleccione el archivo de previsualización</p>
                    <input style="margin: 0" type="file" name="preview">
                </label>
                <input type="text" name="name" value="{{old('name')}}" placeholder="Nombre del archivo">

            </div>
            <div class="col-l-8 col-16">
                <select name="category_id" id="FileCategories">
                    <option value="{{old('category_id')}}">
                        {{old('category_name')?'category_name':'Seleccione un categoría'}}
                    </option>
                </select>
                <label for="">
                    <span class="margin-0">Seleccione el archivo a editar</span>
                    <input style="margin: 0" type="file" name="file">
                </label>

            </div>
            <article class="col-16">
                <button>Crear</button>
            </article>
        </form>
    </main>
@endsection