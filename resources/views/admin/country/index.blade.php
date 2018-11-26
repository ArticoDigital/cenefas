@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        @if(Session::has('message'))
            <div class="alert-success">{{Session::get('message')}}</div>
        @endif
        <h2 class="Panel-h2">países</h2>
        <div class="row justify-between middle-items">
            <div class="col-4">
                <a href="{{route('country.create')}}" class="button">Nuevo país <i class="fas fa-globe-americas"></i></a>
            </div>
        </div>
        <div class="table-container">
            <table>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th class="is-text-center">Editar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td>{{$country->name}}</td>
                        <td class="row justify-center Panel-edit">
                            <a href="{{route('country.edit', $country->id) }}">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <form action="{{route('country.destroy',$country->id)}}" method="post" class="deleteElement">
                                @csrf @method('DELETE')
                                <a href=""><i class="fas fa-user-times"></i></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection

