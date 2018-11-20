@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        <h2 class="Panel-h2">Nuevo usuario</h2>
        <form enctype="multipart/form-data" action="{{route('winnerStore')}}" method="post" class="row Panel-inputs">
            <div class="col-l-8 col-16">
                <input type="text" name="name" placeholder="Nombre y apellido">
                <input type="file" name="image" placeholder="Foto">
                <input type="text" name="city" placeholder="Ciudad">
            </div>
            <div class="col-l-8 col-16">
                <select type="text" name="week" >
                    <option value="1">(5 de Octubre )</option>
                    <option value="2">(12 de Octubre )</option>
                    <option value="3">(19 de Octubre )</option>
                    <option value="4">(26 de Octubre )</option>
                    <option value="5">(2 de Noviembre )</option>
                    <option value="6">(9 de Noviembre )</option>
                    <option value="7">(16 de Noviembre )</option>
                </select>
                <input type="email" name="email" placeholder="email">
                <input type="text" name="identification" placeholder="Cédula">
            </div>
            <article class="col-16">
                @csrf
                <button> Crear </button>
            </article>
        </form>
    </main>
@endsection

