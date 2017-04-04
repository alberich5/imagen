
<div class="inicio">
<div class="row">
    <div class="col-md-2 col-md-offset-10 col-sm-1 col-sm-offset-9">
        <div id="notificacion" style="float: left;" >
           <button id="btn" class="btn btn-primary" style="float: left;">Notificaciones</button>
           <script>
            var btn = document.getElementById('btn');
            btn.addEventListener('click', function(){
                Push.create("Notificaiones Importantes",{
                    body: "Va a vencer el contrato de Pedro Ramirez",
                    icon: "https://image.freepik.com/iconos-gratis/policia_318-9921.jpg",
                    timeout: 15000,
                    onClick: function(){
                        this.close();
                    }

                });
            });


            </script>
        </div>
    </div>
</div>
<div>&nbsp;</div>
			
    <div id="sliderFrame">
            <div id="slider">
                
                    <img src="{{ asset('/images/slider/s2.jpg') }}" alt="Bienvenido a Sipab" />
               
                <img src="{{ asset('/images/slider/9.jpg') }}" />
                <img src="{{ asset('/images/slider/10.jpg') }}" alt="" />
                <img src="{{ asset('/images/slider/11.jpg') }}" alt="#htmlcaption" />
                <img src="{{ asset('/images/slider/9.jpg') }}" />
            </div>
            
        </div>
        
        <hr>
        <h2 align="center">Bienvenidos</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

 </div>	

	


