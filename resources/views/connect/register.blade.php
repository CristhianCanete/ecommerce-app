@extends('connect.master')

@section('title', 'Register')

@section('content')
    <div class="box box_register shadow">
        <div class="header">
            <a href="{{ url('/') }}">
                <img src="{{ url('/static/images/logo.png') }}" alt="">
            </a>
        </div>
        <div class="inside">
            {!! Form::open(['url' => '/register']) !!}
            <label for="name">Nombre:</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <label for="lastname">Apellido:</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></i></span>
                {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
            </div>

            <label for="email" class="mtop16">Correo electronico:</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <label for="password" class="mtop16">Contraseña:</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-key"></i></span>
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <label for="cpassword" class="mtop16">Confirmar Contraseña:</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-key"></i></span>
                {!! Form::password('cpassword', ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Registrarse', ['class' => 'btn btn-success mtop16']) !!}
            {!! Form::close() !!}

            <div class="footer mtop16">
                <a href="{{ url('/login') }}">Ya tengo una cuenta? - Ingresar</a>
            </div>
        </div>
    </div>
@stop