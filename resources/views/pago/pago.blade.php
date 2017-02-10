@extends('layout.plantilla')

@section('content')

<div class="formulario">
	@include('alertas.success')

		@include('errors.mensaje')
			<center><h1>Pago Mensual</h1></center>
		{!! Form::open() !!}
		
	    <!--nombre del bien-->
	    	<div class="form-group">
	    		{!! Form::label('Folio:') !!}
	    		{!! Form::number('folio',null,['class'=>'form-control','placeholder'=>'Ingresa Folio']) !!}
	    	</div>
	   <!--nombre del bien-->
	    	<div class="form-group">
	    		{!! Form::label('Tipo de Servicio:') !!}
	    		{!! Form::select('tipo', ['Rojo' => 'NORMAL',
	    									 '5' => 'ESPECIAL'],null,['class'=>'form-control']) !!}
	    	</div>
	    <!--nombre del bien-->
	    	<div class="form-group">
	    		{!! Form::label('Mes:') !!}
	    		{!! Form::select('mes', ['Rojo' => 'ENERO',
	    									 'Azul' => 'FEBRERO',
	    									 'Verde' => 'MARZO',
	    									 '4' => 'ABRIL',
	    									 '6' => 'MAYO',
	    									 '7' => 'JUNIO',
	    									 '8' => 'JULIO',
	    									 '9' => 'AGOSTO',
	    									 '10' => 'SEPTIEMBRE',
	    									 '11' => 'OCTUBRE',
	    									 '12' => 'NOVIEMBRE',
	    									 '5' => 'DICIEMBRE'],null,['class'=>'form-control']) !!}
	    	</div>
	    	<!--nombre del bien-->
	    	<div class="form-group">
	    		{!! Form::label('Monto de Linea de Captura:') !!}
	    		{!! Form::number('folio',null,['class'=>'form-control','placeholder'=>'Ingresa el monto de linea de captura']) !!}
	    	</div>
	    	<!--nombre del bien-->
	    	<div class="form-group">
	    		{!! Form::label('Importe Pagado:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Ingresa el Importe Pagado']) !!}
	    	</div>
	    	<!--nombre del bien-->
	    	<div class="form-group">
	    		{!! Form::label('Adueudo Total Anual del Ejercicio:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Ingresa el Importe Pagado']) !!}
	    	</div>
	    
	    	
	    	<div class="form-group">
	    		<input type="button" class="btn btn-primary" value="Guardar" onClick="swal('Bien Hecho!', 'Se ha Guardado la informacion!', 'success');">
			</div>
	    

		{!! Form::close() !!}
</div>

@endsection