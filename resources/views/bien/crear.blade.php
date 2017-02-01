@extends('layout.plantilla')

@section('content')

<div class="formulario">
	@include('alertas.success')

		@include('errors.mensaje')
		
		{!! Form::open() !!}
		<!--codigo del bien-->
	    	 <div class="form-group">
	    		{!! Form::label('Codigo del Bien:') !!}
	    		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'ingresa el codigo del bien']) !!}
	    	</div>
	    <!--nombre del bien-->
	    	<div class="form-group">
	    		{!! Form::label('Nombre del Bien:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Nombre del bien']) !!}
	    	</div>
	    <!--Marca-->
	    	<div class="form-group">
	    		{!! Form::label('Marca:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Marca']) !!}
	    	</div>
	    <!--color-->
	    	<div class="form-group">
	    		{!! Form::label('Color:') !!}
	    		{!! Form::select('color', ['Rojo' => 'Rojo',
	    									 'Azul' => 'Azul',
	    									 'Verde' => 'Verde','
	    									  4' => 'Amarillo',
	    									 '5' => 'Cafe'],null,['class'=>'form-control']) !!}
	    	</div>
	    <!--Modelo-->
	    	<div class="form-group">
	    		{!! Form::label('Modelo:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Modelo']) !!}
	    	</div>
	    <!--caracteristicas-->
	    	<div class="form-group">
	    		{!! Form::label('Caracteristicas:') !!}
	    		{!! Form::textarea('folio',null,['class'=>'form-control','placeholder'=>'Caracteristicas del producto']) !!}
	    	</div>
	    <!--Serie-->
	    	<div class="form-group">
	    		{!! Form::label('Serie:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Serie']) !!}
	    	</div>
	    <!--Smanera de aquisicion-->
	    	<div class="form-group">
	    		{!! Form::label('Modo de Adquisicion:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Modo de Adquisicion']) !!}
	    	</div>	
	     <!--Ofina que se hace responsable-->
	    	<div class="form-group">
	    		{!! Form::label('Oficina que se hace responsable:') !!}
	    		{!! Form::select('color', ['Rojo' => 'Almacen General',
	    									 'Azul' => 'Comunicacion',
	    									 'Verde' => 'Auditoria','
	    									  4' => 'Sistemas',
	    									 '5' => 'Recursos Humanos'],null,['class'=>'form-control']) !!}
	    	</div>
	    <!--Respoansable de Oficna-->
	    	<div class="form-group">
	    		{!! Form::label('Respoansable de Oficna:') !!}
	    		{!! Form::select('color', ['Rojo' => 'Persona 1',
	    									 'Azul' => 'Persona 2',
	    									 'Verde' => 'Persona 3',
	    									 '5' => 'Persona 4'],null,['class'=>'form-control']) !!}
	    	</div>
		<!--Responable del bien-->
	    	<div class="form-group">
	    		{!! Form::label('Respoansable del Bien:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'responsable del bien']) !!}
	    	</div>	
	    <!--condicion del bien-->
	    	<div class="form-group">
	    		{!! Form::label('Condicion del bien:') !!}
	    		{!! Form::select('color', ['Rojo' => 'Bueno',
	    									 'Azul' => 'Regular',
	    									 '5' => 'Malo'],null,['class'=>'form-control']) !!}
	    	</div>
	    <!--Observaciones-->
	    	<div class="form-group">
	    		{!! Form::label('Observaciones:') !!}
	    		{!! Form::textarea('folio',null,['class'=>'form-control','placeholder'=>'Observaciones']) !!}
	    	</div>
	    <!--Fecha-->
	    	<div class="form-group">
	    		{!! Form::label('Fecha:') !!}
	    		{!! Form::date('folio',null,['class'=>'form-control','placeholder'=>'Observaciones']) !!}
	    	</div>
	    	<div class="form-group">
	    	{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}
</div>

@endsection