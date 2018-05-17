


	

	<section class="cd-intro">
		<h1>Serkan SAYGILI Mühendislik - Ürün Karşılaştırma</h1>
	</section> <!-- .cd-intro -->


	<section class="cd-products-comparison-table">
		<header>
			<h2>Karşılaştıralacak Modeller</h2>

			<div class="actions">
				<a href="#0" class="reset">Sıfırla</a>
				<a href="#0" class="filter">Filtrele</a>
			</div>
		</header>

		<div class="cd-products-table">
			<div class="features">
				<div class="top-info">Model</div>
				<ul class="cd-features-list">

					<li>  Ürün Fiyatı</li>
						@foreach( $featuresList as $key )
					<li>  {{ $key['productfeatures'] }} </li>
						@endforeach

				</ul>
			</div> <!-- .features -->
			
			<div class="cd-products-wrapper">
				<ul class="cd-products-columns">

						@foreach( $productList as $key )
					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<img height=80 src="http://localhost/comporision/{{UPLOADS_DIR}}{{$key['productimage']}}" alt="product image">
							<h3>{{$key['productname']}} <br> </h3>
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
						<li>{{$key['productprice']}}</li>
								@foreach($key['featuresname']  as $list )
									<li>{{$list}}</li>
								@endforeach
							<!--<li class="rate"><span>5/5</span></li>-->
							
						</ul>
					</li> <!-- .product -->
							@endforeach

				</ul> <!-- .cd-products-columns -->
			</div> <!-- .cd-products-wrapper -->
			
			<ul class="cd-table-navigation">
				<li><a href="#0" class="prev inactive">Prev</a></li>
				<li><a href="#0" class="next">Next</a></li>
			</ul>
		</div> <!-- .cd-products-table -->
	</section> <!-- .cd-products-comparison-table -->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->



