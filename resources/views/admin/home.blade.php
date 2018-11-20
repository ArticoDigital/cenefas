@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        @if(Session::has('message'))
            <div class="{{Session::get('message')['type']}}">{{Session::get('message')['message']}}</div>
        @endif
        <h2 class="Panel-h2">Ganadores</h2>
        <div class="row justify-between middle-items">
            <div class="col-4">
                <a href="{{route('winnerNew')}}" class="button">Nuevo ganador <i class="fas fa-user-plus"></i></a>
            </div>
            <form class="col-12 justify-end row" method="post" action="{{route('search')}}">
                @csrf
                <label for="" class="Panel-search">
                    <input type="text" name="search" placeholder="Buscar">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </label>

            </form>
        </div>
        <div class="table-container">
            <table>
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th>Semana</th>
                    <th class="is-text-center">Editar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($winners as $winner)
                    <tr>
                        <td>{{$winner->id}}</td>
                        <td>{{$winner->name}}</td>
                        <td>{{$winner->city}}</td>
                        <td>{{$winner->weekAt}}</td>
                        <td class="row justify-center Panel-edit">
                            <a href="{{route('winnerEdit',$winner->id)}}"><i class="fas fa-user-edit"></i></a>
                            <form action="{{route('winnerDelete', $winner->id)}}" method="post" class="delete">
                                @csrf
                                @method('DELETE')
                                <a href=""><i class="fas fa-user-times"></i></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $winners->links() }}
        </div>
    </main>
@endsection

