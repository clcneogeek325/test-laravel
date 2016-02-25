 @extends('base')

@section('contenido')
<div class="jumbotron">
{!! Form::open(['url'=>'/user/store']) !!}
			{!! csrf_field() !!}

			<div class="form-group">
				{!! Form::label('nombre','Escribe tu nombre completo: ') !!}
				{!! Form::text('nombre',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('apellidos','Escribe tus apellidos: ') !!}
				{!! Form::text('apellidos',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('edad','Edad: ') !!}
				{!! Form::number('edad',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('email','Escribe tu email: ') !!}
				{!! Form::email('email',null,['class'=>'form-control'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('username','Escribe un nombre de usuario: ') !!}
				{!! Form::text('username',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('password','Password: ') !!}
				{!! Form::password('password',['class'=>'form-control']) !!}
			 </div>
			<div class="form-group">
				{!! Form::label('password_confirmation','Password Confirmacion: ') !!}
				{!! Form::password('password_confirmation',['class'=>'form-control']) !!}
			 </div>
			 	  
			{!! Form::submit('Guardar',['class'=>'btn btn-primary btn-lg']) !!}

{!! !Form::close() !!}



</div>

@endsection