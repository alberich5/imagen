@extends('layout.plantilla')

@section('content')

<div class="formulario">
	@include('alertas.success')

		@include('errors.mensaje')
		<center><h1>Contrato</h1></center>
		{!! Form::open() !!}
		<!--codigo del bien-->
	    	 <div class="form-group">
	    		{!! Form::label('Fecha de Instalacion:') !!}
	    		{!! Form::date('folio',null,['class'=>'form-control','placeholder'=>'Observaciones']) !!}
	    	</div>
	    <!--nombre del bien-->
	    	<div class="form-group">
	    		{!! Form::label('Numero:') !!}
	    		{!! Form::select('color', ['Rojo' => '1',
	    									 'Azul' => '2',
	    									 'Verde' => '3','
	    									  4' => '4',
	    									 '5' => '5'],null,['class'=>'form-control']) !!}
	    	</div>
	    <!--Marca-->
	    	<div class="form-group">
	    		{!! Form::label('Delegaciones:') !!}
	    		{!! Form::select('color', ['Rojo' => 'VALLES CENTRALES',
	    									 'Azul' => 'HUAJUAPAN DE LEON',
	    									 'Verde' => 'TUXTEPEC','
	    									  4' => 'MATIAS ROMERO',
	    									 '5' => 'PUERTO ESCONDIDO'],null,['class'=>'form-control']) !!}
	    	</div>
	    
	    
	    <!--Modelo-->
	    	<div class="form-group">
	    		{!! Form::label('Ambito:') !!}
	    		{!! Form::select('ambito', ['Rojo' => 'MUNICIPAL',
	    									 'Azul' => 'ESTATAL',
	    									 'Verde' => 'FEDERAL',
	    									 '5' => 'PRIVADO'],null,['class'=>'form-control']) !!}
	    	</div>
	    <!--caracteristicas-->
	    	<div class="form-group">
	    		{!! Form::label('Fecha de Terminacion:') !!}
	    		{!! Form::date('folio',null,['class'=>'form-control','placeholder'=>'Observaciones']) !!}
	    	
	    	</div>
	    <!--Serie-->
	    	<div class="form-group">
	    		{!! Form::label('Motivo de Cancelacion:') !!}
	    		{!! Form::select('color', ['Rojo' => 'SUSPENCION',
	    									 'Azul' => 'CANCELACION',
	    									 '5' => 'PENDIENTE PAGO'],null,['class'=>'form-control']) !!}
	    	</div>
	    	 <!--Observaciones-->
	    	<div class="form-group">
	    		{!! Form::label('Razon Social:') !!}
	    		{!! Form::textarea('folio',null,['class'=>'form-control','placeholder'=>'Observaciones']) !!}
	    	</div>
	    	 <!--Observaciones-->
	    	<div class="form-group">
	    		{!! Form::label('Representante legal:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Representante Legal']) !!}
	    	</div>
	    	 <!--Observaciones-->
	    	<div class="form-group">
	    		{!! Form::label('Domicilio Fiscal:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Ingresa el domicilio']) !!}
	    	</div>
	    	<div class="form-group">
	    	<input type="button" class="btn btn-primary" value="Guardar" onClick="swal('Bien Hecho!', 'Se ha Guardado la informacion!', 'success');">
			</div>
	    

		{!! Form::close() !!}
</div>

@endsection