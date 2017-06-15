@extends('admin/template/main')

@section('title', 'Crear Usuario')


@section('content')

 <h1>Creacion de Usuarios</h1>



{!! Form::open(['route' => 'users.store' , 'method' => 'POST']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
	</div>

	
<!--
	<div class="form-group">
		{!! Form::label('name', 'Activo') !!}
		{!! Form::radio('USUA_ACTI', 1, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
	</div>

	-->

	<div class="form-group">
		{!! Form::label('email', 'Correo Electronico') !!}
		{!! Form::email('mail', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@dominio.com', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('cargo', 'Cargo') !!}
		{!! Form::text('cargo', null, ['class' => 'form-control', 'placeholder' => 'Cargo del Usuario', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('password', 'Contraseña') !!}
		{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*********', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('type', 'Tipo') !!}
		{!! Form::select('tipo', ['' => 'Seleccione una opcion','usuario' => 'Usuario','admin' => 'Administrador'],null,['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}

@endsection