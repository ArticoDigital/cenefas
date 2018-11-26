@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        @include('admin.includes.show-errors')
        <h2 class="Panel-h2"></h2>
        <form action="{{route('user.store')}}" method="post" class="row middle-items Panel-inputs">
            @csrf
            <div class="col-l-8 col-16">
                <img src="{{$file->preview}}" alt="">
            </div>
            <div class="col-l-8 col-16">
                <input type="text" name="" placeholder="Nombre">
                <input type="text" name="" placeholder="Moneda">
                <input type="text" name="" placeholder="valor">
                <button class="is-full-width"> Crear</button>
            </div>

        </form>
    </main>
@endsection