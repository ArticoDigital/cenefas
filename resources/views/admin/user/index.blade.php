@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        @if(Session::has('message'))
            <div class="alert-success">{{Session::get('message')}}</div>
        @endif
        <h2 class="Panel-h2">Usuarios</h2>
        <div class="row justify-between middle-items">
            <div class="col-4">
                <a href="{{route('user.create')}}" class="button">Nuevo usuario <i class="fas fa-user-plus"></i></a>
            </div>
            <form class="col-12 justify-end row" action="{{route('user.search')}}">
                <label for="" class="Panel-search">
                    <input type="text" name="q" value="{{request()->input('q')}}" placeholder="Buscar">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </label>
            </form>
        </div>
        <div class="table-container">
            <table>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Pais</th>
                    <th class="is-text-center">Editar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{optional($user)->getRoleNames()->first()}}</td>
                        <td>{{optional($user)->country->name}}</td>
                        <td class="row justify-center Panel-edit">
                            <a href="{{route('user.edit', $user->id) }}">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <form action="{{route('user.destroy',$user->id)}}" method="post" class="deleteElement">
                                @csrf @method('DELETE')
                                <a href=""><i class="fas fa-user-times"></i></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </main>
@endsection

