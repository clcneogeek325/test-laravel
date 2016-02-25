@extends('base')

@section('contenido')

nombre: {!! $user->nombres !!}

{!! Form::model($user,['method'=>'PATCH',
				'action'=>['UserController@update',$user->id]]) !!}
	

			<div class="form-group">
				{!! Form::label('nombre','Nombre: ') !!}
				{!! Form::text('nombre',null,['class'=>'form-control'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('apellidos','Apellidos: ') !!}
				{!! Form::text('apellidos',null,['class'=>'form-control'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('edad','Edad: ') !!}
				{!! Form::number('edad',null,['class'=>'form-control'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('username','Escribe un nombre de usuario: ') !!}
				{!! Form::text('username',null,['class'=>'form-control']) !!}
			</div>
			
			 <div class="form-group">
				{!! Form::label('email','Correo: ') !!}
				{!! Form::email('email',null,['class'=>'form-control']) !!}
			</div>
				  
		
			{!! Form::submit('Guardar',['class'=>'btn btn-primary btn-lg']) !!}

{!! Form::close()!!}
@endsection



