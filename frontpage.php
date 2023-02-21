<?php

/* Template Name: Front Page Template */

get_header(); ?>

<div id="content">
	<div class="container mt-4">

<?php
echo do_shortcode('[smartslider3 slider="3"]');
?>
	<div class="row mt-4">
		<div class="col-md-3 col-sm-6 col-6 mb-2">
			<a href="/product-category/produkty-pitaniya/molochnye-produkty/">
				<div class="">
					<div class="cat-icns-index">
					<div class="col-8">
		      <p>Молочная продукция</p>
					</div>
					<div class="col-4">
			<img class="img-fluid" src="https://cdn-icons-png.flaticon.com/512/6070/6070715.png" alt="">
					</div>
				</div></div>
		</a>
		</div>
		<div class="col-md-3 col-sm-6 col-6 mb-2">
			<a href="/product-category/bytovaya-himiya/chistyashhie-sredstva/">
				<div class=" ">
					<div class="cat-icns-index">
					<div class="col-8 p-0 m-0">
										<p>Бытовая химия</p>
					</div>
					<div class="col-4 p-0 m-0">
			<img class="img-fluid" src="/wp-content/uploads/2023/02/himiya.png" alt="">
					</div>
				</div></div>
		</a>
		</div>
		<div class="col-md-3 col-sm-6 col-6 mb-2">
			<a href="/product-category/tovary-dlya-zhivotnyh/korma-dlya-zhivotnyh/">
				<div class=" ">
					<div class="cat-icns-index">
					<div class="col-8">
										<p>Товары для питомцев</p>
					</div>
					<div class="col-4">
			<img class="img-fluid" src="/wp-content/uploads/2023/02/4294752.png" alt="">
					</div>
				</div></div>
		</a>
		</div>
		<div class="col-md-3 col-sm-6 col-6 mb-2">
			<a href="/product-category/produkty-pitaniya/molochnye-produkty/jogurty/">
			<div class=" ">
				<div class="cat-icns-index">


					<div class="col-8">
										<p>Йогурты</p>
					</div>
					<div class="col-4">
			<img class="img-fluid" src="https://cdn-icons-png.flaticon.com/512/8631/8631562.png" alt="">
					</div>
				</div>
					</div>
		</a>
		</div>

	</div>
</div>
<style media="screen">
.cat-icns-index{
box-shadow: 0.4em 0.4em 5px rgba(122,122,122,0.5);
	display: flex;
	justify-content: center;
	align-items: center;
	height: 85px;
	text-align: center;

}
.cat-icns-index img{
	width: 64px;
	height: 64px;
	object-fit: contain;
}
</style>
	<?php get_template_part( 'core/sections/slider' ); ?>
	<?php get_template_part( 'core/sections/product-category' ); ?>
	<?php get_template_part( 'core/sections/tab-products' ); ?>
	<?php get_template_part( 'core/sections/additional-content' ); ?>
</div>

<?php get_footer(); ?>
