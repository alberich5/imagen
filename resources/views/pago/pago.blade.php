@extends('sistema.plantilla')

@section('content')


<div class="container-fluid"  id="disenoform">
            
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-info">
                        <div class="panel-heading" id="titulos">
                            <h1 class="panel-title"><b><center>Pago Mensual</center></b></h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    
                                    <div >
                                        @include('alertas.success')

                                            @include('errors.mensaje')
                                                
                                            {!! Form::open() !!}
                                            
                                            <div class="form-group">
                                                    {!! Form::label('Actualizar Fecha:') !!}
                                                    {!! Form::date('fecha', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
                                                </div>
                                             <!--nombre del bien-->
                                                <div class="form-group">
                                                    {!! Form::label('Clave:') !!}
                                                    {!! Form::select('clave', ['3BDCAA007' => '3BDCAA007',
                                                                                 '3BDCAA040' => '3BDCAA040',
                                                                                 '3BDCAD003' => '3BDCAD003',
                                                                                 '3BDCAA031' => '3BDCAA031',
                                                                                 '3BDCAA001' => '3BDCAA001',
                                                                                 '3BDCAD003' => '3BDCAD003',
                                                                                 '3BDCAA013' => '3BDCAA013',
                                                                                 '3BDCAA044' => '3BDCAA044',
                                                                                 '3BDCAA045' => '3BDCAA045'],null,['class'=>'form-control']) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('No. Elementos:') !!}
                                                    {!! Form::text('element',null,['class'=>'form-control','maxlength'=>'3','onkeypress'=>'return valida(event)']) !!}
                                                </div>
                                                <!--nombre del bien-->
                                                <div class="form-group">
                                                    {!! Form::label('Consepto de Servicio:') !!}
                                                    {!! Form::select('servicio', ['CON ARMA POR ELEMENTO 12 HORAS POR MES' => 'CON ARMA POR ELEMENTO 12 HORAS POR MES',
                                                                                 '2 CON ARMA POR ELEMENTO 12 HORAS POR MES' => '2 CON ARMA POR ELEMENTO 12 HORAS POR MES',
                                                                                 '3 ESCOLTA, CON UN ARMA POR ELEMENTO EN UN TURNO DE 12 HORAS, POR MES' => '3 ESCOLTA, CON UN ARMA POR ELEMENTO EN UN TURNO DE 12 HORAS, POR MES',
                                                                                 '2 ESPECIAL POR ELEMENTO CON ARMA POR 12 HORAS' => '2 ESPECIAL POR ELEMENTO CON ARMA POR 12 HORAS',
                                                                                 '2 ESCOLTA, CON UN ARMA POR ELEMENTO EN UN TURNO DE 12 HORAS, POR MES' => '2 ESCOLTA, CON UN ARMA POR ELEMENTO EN UN TURNO DE 12 HORAS, POR MES',
                                                                                 
                                                                                 '4 ESCOLTA, CON UN ARMA POR ELEMENTO EN UN TURNO DE 12 HORAS, POR MES' => '4 ESCOLTA, CON UN ARMA POR ELEMENTO EN UN TURNO DE 12 HORAS, POR MES'],null,['class'=>'form-control']) !!}
                                                </div>
                                                 <!--campo de otro-->
                                                <div class="form-group">
                                                    {!! Form::label('Otro:') !!}
                                                    <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" /><br>
                                                </div>
                                                <!--duisplay que se integra la selecionar otro-->
                                                <div id="content" style="display: none;">
                                                   {!! Form::text('otro',null,['class'=>'form-control','placeholder'=>'Nuevo Consepto']) !!}
                                                 </div>
                                            <!--folio del bien-->
                                                <div class="form-group">
                                                    {!! Form::label('Folio:') !!}
                                                    {!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Ingresa Folio','maxlength'=>'11','onkeypress'=>'return valida(event)']) !!}
                                                </div>


                                           <!--tipo de servicio-->
                                                <div class="form-group">
                                                    {!! Form::label('Tipo de Servicio:') !!}
                                                    {!! Form::select('tipo', ['Rojo' => 'NORMAL',
                                                                                 '5' => 'ESPECIAL'],null,['class'=>'form-control']) !!}
                                                </div>
                                            <!--mesess-->
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
                                                <!--monto de liena de cpatura-->
                                                <div class="form-group">
                                                    {!! Form::label('Monto de Linea de Captura:') !!}
                                                    {!! Form::number('monto',null,['class'=>'form-control','placeholder'=>'Ingresa el monto de linea de captura']) !!}
                                                </div>
                                                <!--IMporte d´pagado-->
                                                <div class="form-group">
                                                    {!! Form::label('Importe Pagado:') !!}
                                                    {!! Form::text('importe',null,['class'=>'form-control','placeholder'=>'Ingresa el Importe Pagado','onkeypress'=>'return valida(event)']) !!}
                                                </div>
                                                <!--adeudo total-->
                                                <div class="form-group">
                                                    {!! Form::label('Adueudo Total:') !!}
                                                    {!! Form::text('adeudo',null,['class'=>'form-control','placeholder'=>'Ingresa el Importe Pagado','onkeypress'=>'return valida(event)']) !!}
                                                </div>

                                                <!--nombre del bien-->
                                                <div class="form-group">
                                                    {!! Form::label('Adueudo Total Anual del Ejercicio:') !!}
                                                    {!! Form::text('total',null,['class'=>'form-control','placeholder'=>'$000.00','disabled']) !!}
                                                </div>


                                                <div class="form-group">
                                                    <input type="button" class="btn btn-primary" value="Guardar" onClick="swal('Bien Hecho!', 'Se ha Guardado la informacion!', 'success');">
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


<script>
/* funcion para validar si teclean alguna letra*/
    function valida(e){
        tecla = (document.all) ? e.keyCode : e.which;

        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }
            
        // Patron de entrada, en este caso solo acepta numeros
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }

/* funcion para mostrar contenido de campo otro*/
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>