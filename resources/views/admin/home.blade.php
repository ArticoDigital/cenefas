@extends('layouts.layout')

@section('content')
    <main class="container Panel ">
        <h2 class=" m-b-36 H">Selecciona la categoría </h2>
        <div class="row Home-categories justify-center">

            @foreach ($categories as $category)
                <div class="Home-categoriesItem col-4">
                    <a class="Home-categoriesItemLink"
                       href="{{route('category.show',$category->id)}}">
                        {{$category->name}}
                    </a>
                </div>
            @endforeach
        </div>
    </main>
@endsection

