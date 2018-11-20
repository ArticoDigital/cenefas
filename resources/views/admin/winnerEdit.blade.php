@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        @if(Session::has('message'))
            <div class="{{Session::get('message')['type']}}">{{Session::get('message')['message']}}</div>
        @endif
        <div class="row justify-between">
            <h2 class="Panel-h2">{{$winner->name}}</h2>
            @if($winner->image)
                <figure class="col-3">
                    <img src="{{Storage::url($winner->image)}}" alt="">
                </figure>
            @endif
        </div>
        <form enctype="multipart/form-data" method="post" action="{{route('winnerUpdate',$winner->id)}}"
              class="row Panel-inputs">
            <div class="col-l-8 col-16">
                <input type="text" name="name" placeholder="Nombre y apellido" value="{{$winner->name}}">
                <input type="file" name="image" placeholder="Foto">
                <input type="text" name="city" placeholder="Ciudad" value="{{$winner->city}}">
            </div>
            <div class="col-l-8 col-16">
                <select type="text" name="week">
                    <option value="1" {{($winner->week == 1)?'selected':''}}>(5 de Octubre )</option>
                    <option value="2" {{($winner->week == 2)?'selected':''}}>(12 de Octubre )</option>
                    <option value="3" {{($winner->week == 3)?'selected':''}}>(19 de Octubre )</option>
                    <option value="4" {{($winner->week == 4)?'selected':''}}>(26 de Octubre )</option>
                    <option value="5" {{($winner->week == 5)?'selected':''}}>(2 de Noviembre )</option>
                    <option value="6" {{($winner->week == 6)?'selected':''}}>(9 de Noviembre )</option>
                    <option value="7" {{($winner->week == 7)?'selected':''}}>(16 de Noviembre )</option>
                </select>
                <input type="email" name="email" placeholder="email" value="{{$winner->email}}">
                <input type="text" name="identification" placeholder="Cédula" value="{{$winner->identification}}">
            </div>
            <article class="col-16">
                @csrf
                <button> Actualizar</button>
            </article>
        </form>
    </main>
@endsection

