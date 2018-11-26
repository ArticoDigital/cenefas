@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        @include('admin.includes.show-messages')
        <h2 class="Panel-h2">Archivos</h2>
        <div class="row justify-between middle-items">
            <div class="col-4">
                <a href="{{route('file.create')}}" class="button">Nuevo archivo <i class="fas fa-file"></i></a>
            </div>
        </div>
        <div class="table-container">
            <table>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>País</th>
                    <th>Categoría</th>
                    <th class="is-text-center">Editar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($files as $file)
                    <tr>
                        <td>{{$file->name}}</td>
                        <td>{{$file->category->country->name}}</td>
                        <td>{{$file->category->name}}</td>
                        <td class="row justify-center Panel-edit">
                            <a href="{{route('file.edit', $file->id) }}">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <form action="{{route('file.destroy',$file->id)}}" method="post"
                                  class="deleteElement">
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

