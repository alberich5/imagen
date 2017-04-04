<div class="container-fluid">
            <nav class="navbar navbar-inverse" id="menus">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Menu de Navegacion</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('home') }}">Inicio</a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      
                        
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
                        
                        
                      <li><a href="{{ url('/operativo/vista') }}">Operativo</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion de elementos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ url('/recursos/alta') }}">Altas</a></li>
                          <li><a href="{{ url('/recursos/baja') }}">Bajas</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      
                      <li><a href="{{ url('/auth/logout') }}" >Cerrar Sesion de  {{ Auth::user()->name }}</a></li>
                    </ul>
                  </div><!--/.nav-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>        