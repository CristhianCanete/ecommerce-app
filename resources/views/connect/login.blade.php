@extends('connect.master')

@section('title', 'Login')

@section('content')
    <div class="box box_login shadow">
       {!! Form::open(['url' => '/login']) !!}
       <label for="email">Correo electronico:</label>
       <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>


        <label for="password" class="mtop16">Contraseña:</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-key"></i></span>
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Ingresar', ['class' => 'btn btn-success mtop16']) !!}
        {!! Form::close() !!}
    </div>
@stop