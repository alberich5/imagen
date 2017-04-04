<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>SIPAB</title>
        {!!Html::style('css/bootstrap.css')!!}
        {!!Html::style('js/lib/sweetalert.css')!!}
         {!!Html::style('css/contenido.css')!!}
 

        {!!Html::script('js/jquery.js')!!}
        {!!Html::script('js/lib/sweetalert.min.js')!!}
        {!!Html::script('js/push.min.js')!!}
        {!!Html::script('js/bootstrap-datepicker.js')!!}
        
        <!--estilos para el slider-->
        {!!Html::style('css/themes/1/js-image-slider.css')!!}
        {!!Html::script('css/themes/1/js-image-slider.js')!!} 

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script type="text/javascript">@yield('scripts')
         </script>
    </head>
    <body onload="defecto();" background="{{ asset('/images/fondo.jpg') }}" style="background-size: 100% auto; background-position: center top; ">
         @include('menus.menu')
         <section>
            @yield('content')
         </section>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
         <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>