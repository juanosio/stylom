     <!-- Start side bar menu -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Menú de Navegación</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-trigger active">
                                    <a href="{{ route('home') }}">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Inicio</span>
                                    </a>
                                    
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Secretarias</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li>
                                            <a href="{{ route('empleados.index') }}">
                                                <span class="pcoded-mtext">Ver usuarios</span>
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="{{ route('empleados.create') }}">
                                                <span class="pcoded-mtext">Registrar secretaria</span>
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="/admin/usuarios">
                                                <span class="pcoded-mtext">Consultar secretarias</span>
                                            </a>
                                            
                                      </li>
                                       
                                    </ul>
                                </li>
                               
                                <li class="pcoded-hasmenu">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Materias primas</span>
                                        
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('materias-primas.index') }}">
                                                <span class="pcoded-mtext">Ver Materia Prima</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('materias-primas.index') }}">
                                                <span class="pcoded-mtext">Registrar Materia Prima</span>
                                            </a>
                                        </li>
                                       

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Productos</span>
                                        
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('productos.index') }}">
                                                <span class="pcoded-mtext">Ver Productos</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('productos.create') }}">
                                                <span class="pcoded-mtext">Registrar Productos</span>
                                            </a>
                                        </li>
                                        
                                       

                                    </ul>
                                </li>
                                   <li class="pcoded-hasmenu">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Proveedores</span>
                                        
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('proveedores.index') }}">
                                                <span class="pcoded-mtext">Ver Proveedores</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('proveedores.create') }}">
                                                <span class="pcoded-mtext">Registrar Proveedores</span>
                                            </a>
                                        </li>     

                                    </ul>
                                </li>
                            </ul>
                            
                    </nav>

                    <!-- End Sidebar - menu -->