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
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Materias primas</span>
                                        
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('materias-primas.index') }}">
                                                <span class="pcoded-mtext">Materia Prima en stock</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('materias-primas.create') }}">
                                                <span class="pcoded-mtext">Realizar pedido de materia prima</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('materias-primas.index') }}">
                                                <span class="pcoded-mtext">Ordenes de compra de materia Prima</span>
                                            </a>
                                        </li>
                                       

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
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

                                <li class="pcoded-hasmenu">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                                        <span class="pcoded-mtext">Usuarios</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li>
                                            <a href="{{ route('empleados.index') }}">
                                                <span class="pcoded-mtext">Ver usuarios</span>
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="{{ route('empleados.create') }}">
                                                <span class="pcoded-mtext">Registrar trabajadores</span>
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="{{ route('empleados.index') }}">
                                                <span class="pcoded-mtext">Ver trabajadores</span>
                                            </a>
                                            
                                        </li>
                                        
                                    
                                       
                                    </ul>
                                </li>

                                 <li class="pcoded-hasmenu">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                                        <span class="pcoded-mtext">Mantenimiento</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li>
                                            <a href="{{ route('empleados.index') }}">
                                                <span class="pcoded-mtext">Repaldar base de datos</span>
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="{{ route('empleados.create') }}">
                                                <span class="pcoded-mtext">Restaurar base de datos</span>
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="{{ route('empleados.index') }}">
                                                <span class="pcoded-mtext">Ver trabajadores</span>
                                            </a>
                                            
                                        </li>
                                        
                                    
                                       
                                    </ul>
                                </li>


                            </ul>
                            
                    </nav>

                    <!-- End Sidebar - menu -->