@extends('layouts.layout')

@section('content')
    <main class="container Panel">
        @if(Session::has('message'))
            <div class="{{Session::get('message')['type']}}">{{Session::get('message')['message']}}</div>
        @endif
        
    </main>
@endsection

