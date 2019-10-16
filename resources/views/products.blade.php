@extends("partials.web.layout")


@section('content')

<!-- Content page -->


<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url({{ asset('assets/web/images/heading-pages-02.jpg') }});">
		<h2 class="l-text2 t-center">
			Mujer
		</h2>
		<p class="m-text13 t-center">
			Nuevos diseños de la coleccion para mujer 2019
		</p>
	</section>


	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categorias
						</h4>

						

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="{{ route('all.filter')}}" class="s-text13 active1">
									Todos
								</a>
							</li>

							<li class="p-t-4">
								<a href="{{ route('women.filter')}}" class="s-text13">
									Mujer
								</a>
							</li>

							<li class="p-t-4">
								<a href="{{ route('men.filter')}}" class="s-text13">
									Hombre
								</a>
							</li>

							<li class="p-t-4">
								<a href="{{ route('kids.filter')}}" class="s-text13">
									Niños
								</a>
							</li>


						</ul>

						<!--  -->
						<h4 class="m-text14 p-b-7">
							Filtros
						</h4>
				

							<li class="p-t-4">
								<a href="{{ route('vestidos.filter')}}" class="s-text13">
									Vestidos
								</a>
							</li>

							<li class="p-t-4">
								<a href="{{ route('pantalones.filter')}}" class="s-text13">
									Pantalones
								</a>
							</li>

							<li class="p-t-4">
								<a href="{{ route('camisas.filter')}}" class="s-text13">
									Camisas
								</a>
							</li>

							<li class="p-t-4">
								<a href="{{ route('kids.filter')}}" class="s-text13">
									Niños
								</a>
							</li>

						</ul>


					
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="">
								<select onclick="redireccionar(this);" class="browser-default custom-select" name="sorting">
								    <option>Ordenar</option>
									<option value="1">Ordenar por defecto</option>
									<option value="2">Precio: bajo a alto</option>
									<option value="3">Precio: alto a bajo</option>
								</select>
							</div>

							<div class="">
								<select  onclick="precio(this);" class="browser-default custom-select" name="sorting">
									<option>Precio</option>
									<option value='1'>1000 - 100000</option>
									<option value='2'>100000 - 200000</option>
									<option value="3">200000 - 300000</option>
									<option value="4">300000 - 400000</option>

								</select>
							</div>
						</div>

						
					</div>

					<!-- Product -->
					<div class="row">
					<?php foreach($filter as $item): ?>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							

              

							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="{{ $item->foto}}" width="50px"
                                                                        height="320px" id="foto">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Añadir al carrito</button></div>
									</div>
								</div>

								<div class="block2-txt p-t-20"><a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5 carrito"  id="nombre">{{ $item->nombre}}</a><span class="block2-price m-text6 p-r-5 carrito" id="precio">{{ $item->precio}} Bs</span></div>
							</div></div>
						<?php endforeach ?>
					</div>

					<!-- Pagination -->
				{{$filter->render()}}
				</div>
			</div>
		</div>
	</section>
<script>


	function redireccionar(obj) {
var valorSeleccionado = obj.options[obj.selectedIndex].value; 
   if ( valorSeleccionado == 1 ) {
      document.location = '{{ route('all.filter') }}' ;
   }
   if ( valorSeleccionado == 2 ) {
      document.location = '{{ route('highertolower.filter') }}' ;
   }
   if ( valorSeleccionado == 3 ) {
      document.location = '{{ route('lowertohigher.filter') }}' ;
   }
// etc..
}
</script>

<script>


	function precio(obj) {
var valorSeleccionado = obj.options[obj.selectedIndex].value; 
   if ( valorSeleccionado == 1 ) {
      document.location = '{{ route('range1.filter') }}' ;
   }
   if ( valorSeleccionado == 2 ) {
      document.location = '{{ route('range2.filter') }}' ;
   }
   if ( valorSeleccionado == 3 ) {
      document.location = '{{ route('range3.filter') }}' ;
   }
   if ( valorSeleccionado == 4 ) {
      document.location = '{{ route('range4.filter') }}' ;
   }
// etc..
}
</script>
@endsection