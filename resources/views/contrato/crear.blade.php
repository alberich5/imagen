@extends('sistema.plantilla')
@section('scripts')
            function defecto(){
                $('#hombres').val("0");
                $('#mujeres').val("0");
                $("#nuevo_servicio").attr('style','visibility: hidden');
            }
            
            function sumarH(){
                var valor = document.contrato.hombres.value; 
                
                if(valor==""){
                    document.altas.contrato.value="1";
                }else{
                    valor=parseInt(valor)+1;
                    document.contrato.hombres.value=valor;
                }
            }
            function restarH(){
                var valor = document.contrato.hombres.value;
                if(valor==""){
                    document.contrato.hombres.value="0";
                }else{
                    valor = parseInt(valor);
                    if(valor==0){
                        document.contrato.hombres.value="0";
                        
                    }else{
                        valor = valor-1;
                        document.contrato.hombres.value=valor;
                    } 
                } 
            }
            
            function sumarM(){
                var valor = document.contrato.mujeres.value; 
                
                if(valor==""){
                    document.contrato.mujeres.value="1";
                }else{
                    valor=parseInt(valor)+1;
                    document.contrato.mujeres.value=valor;
                }
            }
            function restarM(){
                var valor = document.contrato.mujeres.value;
                if(valor==""){
                    document.contrato.mujeres.value="0";
                }else{
                    valor = parseInt(valor);
                    if(valor==0){
                        document.contrato.mujeres.value="0";
                        
                    }else{
                        valor = valor-1;
                        document.contrato.mujeres.value=valor;
                    } 
                } 
            }

            $(document).ready(function(){  
  
                $("#otro_serv").click(function() {
                    if($("#otro_serv").is(':checked')) {  
                        //alert("Está activado");
                        $("#nuevo_servicio").attr('style','visibility: visible');
                        
                    } else {  
                        //alert("No está activado");
                        $("#nuevo_servicio").attr('style','visibility: hidden');
                    }  
                });  
              
            });
@endsection
@section('content')
<div class="container-fluid"  id="disenoform">
            
            <div class="row" id="disenoform2">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-info">
                        <div class="panel-heading" id="titulos">
                            <h3 class="panel-title"><b><center>CONTRATO</center></b></h3>
                        </div>
                        <div class="panel-body"  >
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    
                                    
                                   

                                    <div  >
                                        @include('alertas.success')

                                            @include('errors.mensaje')


                                            <center><h1>Contrato</h1></center>
                                            <form name="contrato">
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
                                                <!--codigo del bien-->
                                                 <div class="form-group">
                                                    {!! Form::label('RFC:') !!}
                                                    {!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Ingresa el RFC']) !!}
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
                                                    {!! Form::label('Servicio:') !!}
                                                    {!! Form::select('color', ['Rojo' => 'SUSPENCION',
                                                                                 'Azul' => 'CANCELACION',
                                                                                 '5' => 'PENDIENTE PAGO'],null,['class'=>'form-control']) !!}
                                                </div>
                                                

                                                <div class="checkbox">
                                                    <label>
                                                      <input type="checkbox"  id="otro_serv" name="otro_serv" value="nuevo_serv">Otro Servicio
                                                    </label>
                                                </div>

                                                <div id="nuevo_servicio" style="visibility: visible">
                                                    <input type="text" name="otro_servicio" class="form-control" placeholder="Ingrese el nuevo servicio" >
                                                </div>
                                                <!--Numero de elementos-->
                                                <label for="elementos">N° Elementos Hombres</label>
                                                <div class="form-inline" >

                                                  <input type="text" class="form-control" id="hombres" placeholder="000" style="width: 290px;">
                                                  <div class="form-group" style="width: 30px;">
                                                    <button type="button" class="btn btn-default btn-sm" style="height: 20px;" onclick="sumarH();">
                                                    <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>

                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm" style="height: 20px;" onclick="restarH();">
                                                      <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
                                                    </button>
                                                  </div>

                                                </div>

                                                <label for="elementos">N° Elementos Mujeres</label>
                                                <div class="form-inline" >

                                                  <input type="text" class="form-control" id="mujeres" placeholder="000" style="width: 290px;">
                                                  <div class="form-group" style="width: 30px;">
                                                    <button type="button" class="btn btn-default btn-sm" style="height: 20px;" onclick="sumarM();">
                                                    <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>

                                                    </button>
                                                    <button type="button" class="btn btn-default btn-sm" style="height: 20px;" onclick="restarM();">
                                                      <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
                                                    </button>
                                                  </div>

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


                                        </form>
                                    </div>
                                </div>
                                
                                        
                                    
                            </div>
                            
                        </div>
                        
                        
                    </div>
                        
                </div>
            </div>
        </div>
@endsection

