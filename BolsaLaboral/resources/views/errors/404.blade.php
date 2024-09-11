@extends('layouts.app')
@section('content')
    <div class="main-wrapper">
        <div class="error-box">
            <h1>404</h1>
            <h3><i class="fa fa-warning"></i> ¡Ups! ¡Página no encontrada!</h3>
            <p>La página solicitada no fue encontrada.</p>
            <a href="{{ route('home') }}" class="btn btn-custom">Volver a la página de inicio</a>
        </div>
    </div>
@endsection
