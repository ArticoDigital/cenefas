@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        @include('admin.includes.show-errors')
        <h2 class="Panel-h2">Nuevo país</h2>
        @include('admin.country.includes.form-countries',
            ['buttonText' => 'Crear', 'route' => route('country.store'), 'country'=>''])
    </main>
@endsection