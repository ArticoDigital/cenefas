@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        <h2>Archivos de la categoría {{$category->name}}</h2>
        <section class="m-t-40 m-b-40 row justify-between">
            @foreach ($category->files as $file)
                <article class="col-8 row middle-items">
                    <div class="p-16">
                        <h4>{{$file->name}}</h4>
                        <figure>
                            <a href="{{route('file.show', $file->id)}}">
                                <img src="{{url($file->preview)}}" alt="">
                            </a>
                        </figure>
                    </div>
                </article>
            @endforeach
        </section>

    </main>
@endsection

