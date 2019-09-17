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
						<h4 class="m-text14 p-b-32">
							Filtros
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Precio
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button -->
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
										Filtro
									</button>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
								</div>
							</div>
						</div>

						

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Buscar productos...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
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
                                                                        height="320px">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Añadir al carrito
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
									
									</a>

									<span class="block2-price m-text6 p-r-5">
									{{ $item->precio}} Bs
									</span>
								</div>
							</div>
							
						</div>
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