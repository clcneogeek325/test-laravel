 @extends('base')

@section('contenido')
<div class="jumbotron">
{!! Form::open(['url'=>'/user/store']) !!}

			<div class="form-group">
				{!! Form::label('email','Escribe tu email: ') !!}
				{!! Form::email('email',null,['class'=>'form-control'])!!}
			</div>
			<div class="form-group">
				{!! Form::label('username','Escribe un nombre de usuario: ') !!}
				{!! Form::text('username',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('password','Clave: ') !!}
				{!! Form::password('password',['class'=>'form-control']) !!}
			 </div>
			 <div class="form-group">
				{!! Form::label('nombres','Escribe tu nombre completo: ') !!}
				{!! Form::text('nombres',null,['class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('apellidos','Escribe tus apellidos: ') !!}
				{!! Form::text('apellidos',null,['class'=>'form-control']) !!}
			</div>
				  
			{!! Form::submit('Guardar',['class'=>'btn btn-primary btn-lg']) !!}

{!! !Form::close() !!}



</div>

@endsection