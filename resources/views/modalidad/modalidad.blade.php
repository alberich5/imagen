@extends('sistema.plantilla')

@section('content')





<div class="container-fluid"  id="disenoform">
            
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel">
                        <div class="panel-heading" id="titulos">
                            <h1 class="panel-title"><b><center>Modalidad Servicio</center></b></h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    
                                    <div >
                                        @include('alertas.success')

                                            @include('errors.mensaje')
                                            {!! Form::open() !!}

                                            <!--nombre del bien-->
                                                <div class="form-group">
                                                    {!! Form::label('Turno:') !!}
                                                    {!! Form::select('turno', ['Rojo' => '12',
                                                                                 '5' => '24'],null,['class'=>'form-control']) !!}
                                                </div>
                                            <!--Modalidad de servocio-->
                                                 <div class="form-group">
                                                    {!! Form::label('Modalidad de Servicio:') !!}
                                                    {!! Form::text('modal',null,['class'=>'form-control','placeholder'=>'Modalidad de servicio']) !!}
                                                </div>
                                                <!--Formulario de calendario-->
                                            <div class="form-group">

                                            @include('datepicker')
                                            </div>
                                             <!--Marca-->
                                                <div class="form-group">
                                                    {!! Form::label('Fecha de Inicio:') !!}
                                                    <input type="date" name="hora" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('Fecha de Fin:') !!}
                                                    <input type="date" name="hora" class="form-control">
                                                </div>




                                                <div class="form-group">
                                                <input type="button" class="btn btn-primary" value="Guardar" onClick="swal('Operacion exitosa', 'Se ha Guardado la informacion!', 'success');">
                                                </div>


                                            {!! Form::close() !!}
                                    </div>
                                    
                                </div>     
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>

@endsection