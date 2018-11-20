@extends('layouts.layout')
@section('content')
    <div class="row middle-items Login justify-center p-40 container">
        <form method="POST" class="Login-form" action="{{ route('login') }}">
            @csrf
            <div class="row middle-items">
                <label for="email" class="col-5">Email : </label>

                <div class="col-11">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid" role="alert">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class=" row middle-items">
                <label for="password" class="col-5">{{ __('Password') }} : </label>
                <div class="col-11">
                    <input id="password" type="password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                           required>
                    @if ($errors->has('password'))
                        <span class="invalid" role="alert">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <div class="row justify-end">
                <a class="btn  is-text-right" href="{{ route('password.request') }}">¿Olvidaste la contraseña?</a>
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Recuerdame</label>
            </div>
            <div class="row justify-end">
                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
            </div>
        </form>
    </div>
@endsection