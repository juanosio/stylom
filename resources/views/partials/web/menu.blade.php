<!-- Menu -->
<div class="wrap_menu">
    <nav class="menu">
        <ul class="main_menu">
            <li>
                <a href="{{ route('welcome.filter') }}">Inicio</a>
                <!-- <ul class="sub_menu">
                    <li><a href="index.html">Homepage V1</a></li>
                    <li><a href="home-02.html">Homepage V2</a></li>
                    <li><a href="home-03.html">Homepage V3</a></li>
                </ul> -->
            </li>

            <li>
                <a href="{{ route('all.filter') }}">Articulos</a>
            </li>

            <li>
                <a href="{{ route('carrito') }}">Carrito</a>
            </li>

            <li>
                <a href="{{ route('about') }}">Sobre nosotros</a>
            </li>

            <li></li>

            
        </ul>
    </nav>
</div>

	
  
    @if (Auth::guest())
    <div class="header-icons">
					<a href="{{ route('login') }}" class="header-wrapicon1 dis-block">
                        Iniciar Sesión
						<!-- <img src="assets/web/images/icons/icon-header-01.png" class="header-icon1" alt="ICON"> -->
                    </a>
                    <a href="{{ route('register') }}" class="header-wrapicon1 dis-block ml-4">
                        Regístrate
						<!-- <img src="assets/web/images/icons/icon-header-01.png" class="header-icon1" alt="ICON"> -->
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="assets/web/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti" id="cantidad">
                                    

                        </span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown" id="carrito">
							

							

							
						</div>


					</div>
				</div>
			</div>
		</div>
@else
<div class="header-icons">

        <div class="dropdown"  data-toggle="dropdown">
        <img src="{{ asset('assets\admin\images\avatar-4.jpg')}}" class="img-radius" width="" height="45px" alt="User-Profile-Image">
 <button class="">
{{ Auth::user()->name }} {{ Auth::user()->lastname }}
 </button>
<div class="dropdown-menu">
 <li>
                                            

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="feather icon-log-out"></i> Cerrar Sesión
                                        
                                    </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        </li>
</div>
        </div>

                  


					</li>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="assets/web/images/icons/icon-header-02.png"  class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti" id="cantidad">
                                    

                        </span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown" class="overflow-auto" id="carrito">
							

							

							
						</div>

					</div>
				</div>
@endif

			</div>
		</div>


        <!-- Header cart noti -->
        <div class="header-cart header-dropdown">
            <ul class="header-cart-wrapitem">
                <li class="header-cart-item">
                    <div class="header-cart-item-img">
                        <img src="assets/web/images/item-cart-01.jpg" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt">
                        <a href="#" class="header-cart-item-name">
                            White Shirt With Pleat Detail Back
                        </a>

                        <span class="header-cart-item-info">
                            1 x $19.00
                        </span>
                    </div>
                </li>

                <li class="header-cart-item">
                    <div class="header-cart-item-img">
                        <img src="assets/web/images/item-cart-02.jpg" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt">
                        <a href="#" class="header-cart-item-name">
                            Converse All Star Hi Black Canvas
                        </a>

                        <span class="header-cart-item-info">
                            1 x $39.00
                        </span>
                    </div>
                </li>

                <li class="header-cart-item">
                    <div class="header-cart-item-img">
                        <img src="assets/web/images/item-cart-03.jpg" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt">
                        <a href="#" class="header-cart-item-name">
                            Nixon Porter Leather Watch In Tan
                        </a>

                        <span class="header-cart-item-info">
                            1 x $17.00
                        </span>
                    </div>
                </li>
            </ul>

            <div class="header-cart-total">
                Total: $75.00
            </div>

            <div class="header-cart-buttons">
                <div class="header-cart-wrapbtn">
                    <!-- Button -->
                    <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                        View Cart
                    </a>
                </div>

                <div class="header-cart-wrapbtn">
                    <!-- Button -->
                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                        Check Out
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="{{ asset('assets/admin/popper/js/popper.min.js') }}"></script>  <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/icon/feather/css/feather.css') }}">

        <!-- Chartlist chart css -->
        <link rel="stylesheet" href="{{ asset('assets/admin/bower_components/chartist/css/chartist.css')}}" type="text/css" media="all">
    
         <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/jquery.mCustomScrollbar.css') }}">

    <style>
#carrito {
    width: 325px;
  height: 500px;
     overflow: auto !important;
}
</style>