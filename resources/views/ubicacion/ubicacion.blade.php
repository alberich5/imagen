@extends('sistema.plantilla')

@section('content')


        <div class="container-fluid"  id="disenoform">
            
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-info">
                        <div class="panel-heading" id="titulos">
                            <h1 class="panel-title"><b><center>Ubicacion del Servicio</center></b></h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    
                                    <div>
                                        @include('alertas.success')

                                            @include('errors.mensaje')
                                            
                                            {!! Form::open() !!}

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
                                                <div class="wrap">
                                                    <form action="" class="formulario">
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="checkbox" id="checkbox1">
                                                            <label for="checkbox1">otro</label>
                                                        </div>
                                                    </form>
                                                </div>
                                                 <!--Observaciones-->
                                                <div class="form-group">
                                                    {!! Form::label('Niveles de Riesgo:') !!}
                                                    {!! Form::select('color', ['Rojo' => 'BAJO',
                                                                                 'Azul' => 'MEDIANO',
                                                                                 '5' => 'ALTO'],null,['class'=>'form-control']) !!}
                                                </div>

                                                <div class="form-group">
                                                    <input type="button" class="btn btn-primary" value="Guardar" onClick="swal('Operacion exitosa!', 'Se ha Guardado la informacion!', 'success');">
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


<script type="text/javascript">
    document.getElementById('id_del_campo').disabled = false;
    </script>