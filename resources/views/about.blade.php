@extends("partials.web.layout")
@section('content')

<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image:  url({{ asset('assets/web/images/heading-pages-06.jpg') }});">
		<h2 class="l-text2 t-center">
			Sobre nosotros
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="assets/web/images/banner-14.jpg" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Nuestra historia
					</h3>

					<p class="p-b-28">
					Esta empresa tiene como visión convertirse en una empresa con un concepto de la moda innovador y novedoso. Queriendo abrir camino a un tipo de moda exclusivo y de diseño a precios asequibles para todo el público; sobre todo un tipo de moda totalmente personalizado y con diseños únicos, deseando aprovechar el auge del comercio digital para promocionar a través de las redes sociales sus productos. 
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
						Nuestra misión es ofrecer a al público objetivo un espacio en el cual este tenga la libertad de usar su creatividad y criterio en el producto que desee comprar. Consideramos  que la moda y la forma de vestir es una manera de expresar el estilo y personalidad de cada uno.

						</p>

						<span class="s-text7">
							- Miriam Rodriguez
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection