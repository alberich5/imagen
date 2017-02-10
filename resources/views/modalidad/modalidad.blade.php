@extends('layout.plantilla')

@section('content')

<div class="formulario">
	@include('alertas.success')

		@include('errors.mensaje')
		<center><h1>Modalidad Servicio</h1></center>
		{!! Form::open() !!}
		
	    <!--nombre del bien-->
	    	<div class="form-group">
	    		{!! Form::label('Turno:') !!}
	    		{!! Form::select('turno', ['Rojo' => '12',
	    									 '5' => '24'],null,['class'=>'form-control']) !!}
	    	</div>
	    <!--Marca-->
	    	<div class="form-group">
	    		{!! Form::label('Horario:') !!}
	    		<input type="time" name="hora">
	    	</div>
	    
	    
	    
	    	
	    	<div class="form-group">
	    	<input type="button" class="btn btn-primary" value="Guardar" onClick="swal('Bien Hecho!', 'Se ha Guardado la informacion!', 'success');">
			</div>
	    

		{!! Form::close() !!}
</div>

@endsection