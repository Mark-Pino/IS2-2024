@extends('layouts.app')
@section('content')
    <div class="main-wrapper">
        <div class="account-content">
            <a href="{{ route('form/job/list') }}" class="btn btn-primary apply-btn">Aplicar Trabajo</a>
            <div class="container">
                <!-- Logo de la Cuenta -->
                <div class="account-logo">
                    <a href="index.html"><img src="{{ URL::to('assets/img/logo2.png') }}" alt="Soeng Souy"></a>
                </div>
                {{-- mensaje --}}
                {!! Toastr::message() !!}
                <!-- /Logo de la Cuenta -->
                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Iniciar sesión</h3>
                        <p class="account-subtitle">Accede a nuestro panel de control</p>
                        <!-- Formulario de Cuenta -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Ingresa tu correo electrónico">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Contraseña</label>
                                    </div>
                                </div>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Ingresa tu contraseña">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label></label>
                                    </div>
                                    <div class="col-auto">
                                        <a class="text-muted" href="{{ route('forget-password') }}">
                                            ¿Olvidaste tu contraseña?
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Iniciar sesión</button>
                            </div>
                            <div class="account-footer">
                                <p>¿No tienes una cuenta aún? <a href="{{ route('register') }}">Regístrate</a></p>
                            </div>
                        </form>
                        <!-- /Formulario de Cuenta -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
