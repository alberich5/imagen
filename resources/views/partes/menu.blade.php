<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ url('/') }}">
                        Sipab Inicio <span class="glyphicon glyphicon-home" aria-hidden="true">
                    </a>
                </li>
                <li id="mostrar">
                    REGISTRAR
                </li>
                <li>
                    <a href="{{ url('/contrato') }}">Contrato<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                </li>
                <li>
                   <a href="{{ url('/ubicacion') }}">Ubicacion del servicio<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                </li>
                <li>
                    <a href="{{ url('/modalidad') }}">Modalidad de servicio<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                </li>
                <li>
                    <a href="{{ url('/pago') }}">Pago Mensual<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                </li>
                
               @if (Auth::user()->name == 'Admin')
                   
                    
                    <li>
                        <a href="">Personas<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                    </li>
               @endif
               
               
                
               
                
                
                <li id="mostrar">
                    Salir
                </li>
                
                
                <li id="fondocolor">
                    <a href="{{ url('/auth/logout') }}" >Cerrar Sesion de  {{ Auth::user()->name }}</a>
                </li>
            </ul>
        </div>