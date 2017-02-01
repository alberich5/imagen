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
                    <a href="{{ url('/crear') }}">Bien<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                </li>
                <li>
                   <a href="">Oficina<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                </li>
                <li>
                    <a href="">Movimiento<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                </li>
                
               @if (Auth::user()->name == 'Admin')
                   
                    
                    <li>
                        <a href="">Personas<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                    </li>
               @endif
               
               
                
                <li id="mostrar">
                    REPORTES
                </li>
                
                <li>
                    <a href="">Lista de Bienes<span class="glyphicon glyphicon-search" aria-hidden="true"></a>
                </li>
                <li >
                    <a href="" >Lista de movimientos<span class="glyphicon glyphicon-search" aria-hidden="true"></a>
                </li>
                <li >
                    <a href="" >Catalogo de Bienes<span class="glyphicon glyphicon-search" aria-hidden="true"></a>
                </li>
                 <li id="mostrar">
                    ELIMINAR
                </li>
                <li >
                    <a href="" >Bien<span class="glyphicon glyphicon-trash" aria-hidden="true"></a>
                </li>
                
                
                <li id="mostrar">
                    Salir
                </li>
                
                
                <li id="fondocolor">
                    <a href="{{ url('/auth/logout') }}" >Cerrar Sesion de  {{ Auth::user()->name }}</a>
                </li>
            </ul>
        </div>