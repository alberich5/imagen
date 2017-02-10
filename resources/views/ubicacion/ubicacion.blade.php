@extends('layout.plantilla')

@section('content')

<div class="formulario">
	@include('alertas.success')

		@include('errors.mensaje')
		<center><h1>Ubicacion del Servicio</h1></center>
		{!! Form::open() !!}
		<!--codigo del bien-->
	    	 <div class="form-group">
	    		{!! Form::label('RFC:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Ingresa el RFC']) !!}
	    	</div>
	    <!--nombre del bien-->
	    	<div class="form-group">
	    		{!! Form::label('Nombre Comercial:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre Comercial']) !!}
	    	</div>
	    <!--Marca-->
	    	<div class="form-group">
	    		{!! Form::label('Domicilio:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Ingresa el Domicilio']) !!}
	    	</div>
	    
	    
	    <!--Modelo-->
	    	<div class="form-group">
	    		{!! Form::label('Delegaciones:') !!}
	    		{!! Form::select('color', ['Rojo' => 'VALLES CENTRALES',
	    									 'Azul' => 'HUAJUAPAN DE LEON',
	    									 'Verde' => 'TUXTEPEC','
	    									  4' => 'MATIAS ROMERO',
	    									 '5' => 'PUERTO ESCONDIDO'],null,['class'=>'form-control']) !!}
	    	</div>
	    <!--caracteristicas-->
	    	<div class="form-group">
	    		{!! Form::label('Sub Delegacion:') !!}
	    		{!! Form::select('color', ['Rojo' => 'PINOTEPA NACIONAL',
	    									 'Azul' => 'SALINA CRUZ',
	    									 '5' => 'HUATULCO'],null,['class'=>'form-control']) !!}
	    	
	    	</div>
	    <!--Serie-->
	    	<div class="form-group">
	    		{!! Form::label('minicipio:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Ingresa el Municipio']) !!}
	    	</div>
	    	 <!--Observaciones-->
	    	<div class="form-group">
	    		{!! Form::label('Giro Comercial:') !!}
	    		{!! Form::select('color', ['Rojo' => 'GASOLINERAS',
	    									 'Azul' => 'ESCUELAS',
	    									 'Verde' => 'BANCOS',
	    									 '5' => 'COMERCIOS'],null,['class'=>'form-control']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Otro:') !!}
	    		{!! Form::checkbox('name', 'value', false) !!}
	    		<input type="text" name="" id="id_del_campo">
	    	</div>
	    	 <!--Observaciones-->
	    	<div class="form-group">
	    		{!! Form::label('Niveles de Riesgo:') !!}
	    		{!! Form::select('color', ['Rojo' => 'BAJO',
	    									 'Azul' => 'MEDIANO',
	    									 '5' => 'ALTO'],null,['class'=>'form-control']) !!}
	    	</div>
	    	
	    	<div class="form-group">
	    		<input type="button" class="btn btn-primary" value="Guardar" onClick="swal('Bien Hecho!', 'Se ha Guardado la informacion!', 'success');">
			</div>
	    

		{!! Form::close() !!}
</div>

@endsection


<script type="text/javascript">
    document.getElementById('id_del_campo').disabled = false;
    </script>