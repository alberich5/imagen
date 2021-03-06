<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIPAB</title>
  
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/simple-sidebar.css')!!}
    {!!Html::style('css/contenido.css')!!}
    {!!Html::style('js/lib/sweetalert.css')!!}

    <!--estilos para el slider-->
    {!!Html::style('css/themes/1/js-image-slider.css')!!}
    {!!Html::script('css/themes/1/js-image-slider.js')!!} 
    

    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/lib/sweetalert.min.js')!!}
    {!!Html::script('js/push.min.js')!!}
    {!!Html::script('js/bootstrap-datepicker.js')!!}
    
 
</head>

<body>

    <div id="wrapper">

        <!-- Menu lateral -->
        @include('partes.menu')


        <!-- Contenido del boton -->
        @include('partes.boton') 
       



        @yield('content')

    </div>
    <!-- fin del wrapper -->

    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
   
     

    <!-- scrip de lazamiento del boton -->
   

</body>

</html>
