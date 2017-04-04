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
                    <a href="{{ url('/recursos/alta') }}">Iniciar<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                </li>
                
                
                <li id="mostrar">
                    Salir
                </li>
                
                
                <li id="fondocolor">
                    <a href="{{ url('/auth/logout') }}" >Cerrar Sesion de  {{ Auth::user()->name }}</a>
                </li>
            </ul>
        </div>