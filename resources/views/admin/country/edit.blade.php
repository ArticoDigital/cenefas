@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        @include('admin.includes.show-errors')
        @include('admin.includes.show-messages')
        <h2 class="Panel-h2">Actualizar país</h2>
        @include('admin.country.includes.form-countries',
            [
                'buttonText' => 'Actualizar',
                'route' => route('country.update',$country->id),
                'method' => method_field('PUT'),
            ])
        @include('admin.categories.form-categories')
        @if($country->categories->count())
            @include('admin.categories.show-categories')
        @endif

        <div id="Modal" class="is-hidden Category-update justify-center middle-items">
            <form id="FormCategory" action="" class="Category-updateForm" method="post">
                @csrf @method('PUT')
                <span id="FormCategoryClose" class="Category-updateClose"><i class="fas fa-times"></i></span>
                <h2 class="m-b-20">Actualizar categoría</h2>
                <input id="FormCategoryInput" type="text" name="name" value="">
                <button>Actualizar</button>
            </form>
        </div>
    </main>
@endsection