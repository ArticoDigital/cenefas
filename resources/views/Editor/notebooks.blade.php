@extends('layouts.layout')

@section('content')
    <main class="container Panel">

        <h2 class="Panel-h2">Selecciona para descargar</h2>
        <div class="row  middle-items Panel-inputs">
            @foreach($notebooks as $notebook)
                <div class="row middle-items col-5 p-8">
                    <input class="margin-0" type="checkbox" id="check{{$notebook->id}}">
                    <label for="check{{$notebook->id}}">
                        <figure>
                            <img src="{{$notebook->preview}}" alt="">
                        </figure>
                    </label>
                </div>
            @endforeach
            <button class="m-t-20 is-full-width">Descargar</button>
        </div>
    </main>
@endsection