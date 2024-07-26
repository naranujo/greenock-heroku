<?php require_once('inc/init.php'); ?>

<?php require_once('inc/header.php'); ?>

	<section id="slider" class="carousel slide carousel-fade bg-primary pt-2 text-white"  data-interval="6000" data-pause="false" data-ride="carousel">
			<ol class="carousel-indicators">
    		<li data-target="#slider" data-slide-to="0" class="active"></li>
    		<li data-target="#slider" data-slide-to="1"></li>
   			<li data-target="#slider" data-slide-to="2"></li>
   			<li data-target="#slider" data-slide-to="3"></li>
		  </ol>
		  <div class="carousel-inner bg-primary pt-4 pt-md-4">
		  	<div class="carousel-item active">
					<div class="row">
				    <div class="col-md-6 text-right pb-5">
				    	<div class="container text-center  fade-in">
					    	<img src="/imgs/logo-v.svg" class="logov" alt="logo" />
					    	<span class="linea-v"></span>
					    	<div><small><?php echo $slider[$lang] ?></small></div>

				    	<h2 class="text-secondary py-3"><?php echo $slide1_tit[$lang] ?></h2>
				    	<p class="mb-4"><?php echo $slide1_tex[$lang] ?></p>
					    <a href="#nosotros" class="mb-4 js-scroll-trigger d-inline-block font-normal small boton"><?php echo $slider_boton[$lang] ?></a>
							</div>
					 	</div>
			  		<div class="col-md-6" style="background:url('/imgs/slide1.jpg') center center no-repeat;background-size:cover"></div>
					</div>
				</div>
		  	<div class="carousel-item">
					<div class="row">
				    <div class="col-md-6 text-right pb-5">
				    	<div class="container text-center  fade-in">
					    	<img src="/imgs/logo-v.svg" class="logov" alt="logo" />
					    	<span class="linea-v"></span>
					    	<div><small><?php echo $slider[$lang] ?></small></div>

				    	<h2 class="text-secondary py-3"><?php echo $slide2_tit[$lang] ?></h2>
				    	<p class="mb-4"><?php echo $slide2_tex[$lang] ?></p>
					    <a href="#nosotros" class="mb-4 js-scroll-trigger d-inline-block font-normal small boton"><?php echo $slider_boton[$lang] ?></a>
							</div>
					 	</div>
			  		<div class="col-md-6" style="background:url('/imgs/slide2.jpg') center center no-repeat;background-size:cover"></div>
					</div>
				</div>
		  	<div class="carousel-item">
					<div class="row">
				    <div class="col-md-6 text-right pb-5">
				    	<div class="container text-center fade-in">
					    	<img src="/imgs/logo-v.svg" class="logov" alt="logo" />
					    	<span class="linea-v"></span>
					    	<div><small><?php echo $slider[$lang] ?></small></div>

				    	<h2 class="text-secondary py-3"><?php echo $slide3_tit[$lang] ?></h2>
				    	<p class="mb-4"><?php echo $slide3_tex[$lang] ?></p>
					    <a href="#nosotros" class="mb-4 js-scroll-trigger d-inline-block font-normal small boton"><?php echo $slider_boton[$lang] ?></a>
							</div>
					 	</div>
			  		<div class="col-md-6" style="background:url('/imgs/slide3.jpg') center center no-repeat;background-size:cover"></div>
					</div>
				</div>
		  	<div class="carousel-item">
					<div class="row">
				    <div class="col-md-6 text-right pb-5">
				    	<div class="container text-center fade-in">
					    	<img src="/imgs/logo-v.svg" class="logov" alt="logo" />
					    	<span class="linea-v"></span>
					    	<div><small><?php echo $slider[$lang] ?></small></div>

				    	<h2 class="text-secondary py-3"><?php echo $slide4_tit[$lang] ?></h2>
				    	<p class="mb-4"><?php echo $slide4_tex[$lang] ?></p>
					    <a href="#nosotros" class="mb-4 js-scroll-trigger d-inline-block font-normal small boton"><?php echo $slider_boton[$lang] ?></a>
							</div>
					 	</div>
			  		<div class="col-md-6" style="background:url('/imgs/slide4.jpg') center center no-repeat;background-size:cover"></div>
					</div>
				</div>

		  </div>
		</section>

<main class="container" id="main">

	<section  id="content" class="row pt-5">

	<?php /* COLUMNA IZQUIERDA */ ?>
		<div class="col-md-6 col-left  pt-5 ">
				
			<div id="nosotros" class="px-5 bg-white">	
				<div class="titulo pb-5" <?php echo $animleft ?>>
					<h6><?php echo $seccion1[$lang] ?></h6>
					<div class=" d-flex justify-content-start">
						<img src="/imgs/flor-light.svg" class="pull-left flor" />
						<h1 class="h2 pt-1 pull-right d-inline-block" ><?php echo $seccion1_tit[$lang] ?></h1>
					</div>
				</div>
				<p <?php echo $animleft ?>><b><?php echo $seccion1_tex1[$lang] ?> </b></p>
				<p <?php echo $animleft ?>><?php echo $seccion1_tex2[$lang] ?></p>
				<p <?php echo $animleft ?>><?php echo $seccion1_tex3[$lang] ?></p>
			</div>
			<div class="mx-5 pr-0 pr-lg-5 py-5">
				<img src="/imgs/nosotros2.jpg"  class="w-100" <?php echo $animleft ?>/>
			</div>
			<div class="pt-4 pb-0 pr-2 pr-lg-5 pl-lg-5 pl-2 mx-lg-5 d-inline-block " id="confianza" <?php echo $animleft ?>>
				<img src="/imgs/confianza_<?php echo $lang ?>.svg" class="w-100 ml-1 ml-lg-5" />
			</div>
			<div id="clientes" class="bg-primary  text-white rounded-top-right mt-5 py-5 pl-4 pr-3"  <?php echo $animleft ?>>
				<div class="titulo pb-5 text-secondary" <?php echo $animleft ?>>
					<h6 class="text-white"><?php echo $seccion3[$lang] ?></h6>
					<div class=" d-flex justify-content-start">
						<img src="/imgs/flor-dark.svg" class="flor" />
						<h2 class="pt-1 "><?php echo $seccion3_tit[$lang] ?></h2>				
					</div>
				</div>
				<p class="px-3" <?php echo $animleft ?>><b><?php echo $seccion3_tex1[$lang] ?></b></p>
				<p class="px-3" <?php echo $animleft?>><?php echo $seccion3_tex2[$lang] ?> </p>
				<p class="px-3" <?php echo $animleft ?>><?php echo $seccion3_tex3[$lang] ?> </p>
			</div>
			<div class="px-4 px-lg-5 py-4 mx-lg-2 my-lg-4" <?php echo $animleft ?>>
				<img src="/imgs/team.svg" class="w-100" />
			</div>
			<div id="servicios" class="d-none d-md-block bg-primary text-white py-5" <?php echo $animleft ?>>
				<div class="titulo pb-5" <?php echo $animleft ?>>
					<div class="d-flex justify-content-start">
						<img src="/imgs/half-tree.svg" class="half-tree mr-3" />
						<div><h5 class="py-3 pl-3"><?php echo $seccion5[$lang] ?></h5>
							<h2 class="text-secondary pr-3"><?php echo $seccion5_tit[$lang] ?></h2>
						</div>
					</div>
				</div>
				<div class="mt-2 px-5" <?php echo $animleft ?>>
					<p class=""><span style="font-weight: 700;"><?php echo $seccion5_item1[$lang] ?></span><br><br>
					<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item1_txt1[$lang] ?></p>
					<hr />
				</div>
				<div  class="px-5" <?php echo $animleft ?>>
				<p class=""><span style="font-weight: 700;"><?php echo $seccion5_item2[$lang] ?></span><br><br>
					<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item2_txt1[$lang] ?> </p>
					<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item2_txt2[$lang] ?> </p>
					<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item2_txt3[$lang] ?> </p>
					<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item2_txt4[$lang] ?> </p>
					<hr />
				</div>
				<div class="mb-5 px-5" <?php echo $animleft ?>>
				<p class=""><span style="font-weight: 700;"><?php echo $seccion5_item5[$lang] ?></span><br><br>
						<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item5_txt1[$lang] ?></p>
						<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item5_txt2[$lang] ?></p>
					<hr />
				</div>
				<div class="mb-5 px-5" <?php echo $animright ?>>
				<p class=""><span style="font-weight: 700;"><?php echo $seccion5_item4[$lang] ?></span><br><br>
					<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item4_txt1[$lang] ?></p>
				</div>
			</div>

		</div>

<?php /* COLUMNA DERECHA */ ?>

		<div class="col-md-6 col-right  pt-4 ">
			<img src="/imgs/nosotros.jpg" class="w-100" <?php echo $animright ?> />
			<div id="metodologia" class="bg-primary  text-white rounded-top-left py-5 pl-4 pr-3"  <?php echo $animright ?>>
				<div class="titulo pb-5 text-secondary" <?php echo $animright ?>>
					<h6><?php echo $seccion2[$lang] ?></h6>
					<div class=" d-flex justify-content-start">
						<img src="/imgs/flor-dark.svg" class="pull-left flor" />
						<h2 class="pt-1 pull-right d-inline-block"><?php echo $seccion2_tit[$lang] ?></h2>				
					</div>
				</div>
				<p class="px-3" <?php echo $animright ?>><b><?php echo $seccion2_tex1[$lang] ?> </b></p>
				<p class="px-3" <?php echo $animright ?>><?php echo $seccion2_tex2[$lang] ?> </p>
				<p class="px-3 mb-5 pb-5" <?php echo $animright ?>><?php echo $seccion2_tex3[$lang] ?></p>
			</div>
			<img src="/imgs/arbol.jpg"  class="w-100" <?php echo $animright ?> />
			<img src="/imgs/plantita.jpg"  class="w-100" <?php echo $animright ?> />

			<div id="trust" class="bg-light py-5  pl-4 pr-3"  <?php echo $animright ?>>
				<div class="titulo pb-5 pt-2" <?php echo $animright ?>>
					<h6><?php echo $seccion4[$lang] ?></h6>
					<div class=" d-flex justify-content-start">
						<img src="/imgs/flor-light.svg" class="flor" />
						<h2 class="pt-1 "><?php echo $seccion4_tit[$lang] ?></h2>				
					</div>
				</div>
				<p class="px-3" <?php echo $animright ?>><b><?php echo $seccion4_tex1[$lang] ?></b></p>
				<p class="px-3" <?php echo $animright ?>><?php echo $seccion4_tex2[$lang] ?> </p>
				<p class="px-3 mb-5" <?php echo $animright ?>><?php echo $seccion4_tex3[$lang] ?></p>
			</div>

			<div  class="px-5 py-5 bg-primary d-none d-md-block text-white" <?php echo $animright ?>>
				<div <?php echo $animright ?>>
				<p class=""><span style="font-weight: 700;"><?php echo $seccion5_item3[$lang] ?></span><br><br>
					<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item3_txt1[$lang] ?></p>
					<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item3_txt2[$lang] ?></p>
					<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item3_txt3[$lang] ?></p>
					<hr />
				</div>
				<div <?php echo $animright ?>>
					<p class=""><span style="font-weight: 700;"><?php echo $seccion5_item6[$lang] ?></span><br><br>
						<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item6_txt1[$lang] ?></p>
						<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item6_txt2[$lang] ?></p>
						<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item6_txt3[$lang] ?></p>
					<hr />
				</div>
				<div <?php echo $animright ?>>
					<p class=""><span style="font-weight: 700;"><?php echo $seccion5_item7[$lang] ?></span><br><br>
						<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item7_txt1[$lang] ?></p>
						<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item7_txt2[$lang] ?></p>
						<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item7_txt3[$lang] ?></p>
						<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item7_txt4[$lang] ?></p>
					<hr />
				</div>
				<div class="mb-5" <?php echo $animright ?>>
					<p class=""><span style="font-weight: 700;"><?php echo $seccion5_item8[$lang] ?></span><br><br>
						<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item8_txt1[$lang] ?></p>
						<span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item8_txt2[$lang] ?></p>
					<hr />
				</div>
			</div>
	</section>
	
<?php /* SERVICIOS MOBILE */ ?>
	<section id="servicios" class="d-block d-md-none row bg-primary text-white" <?php echo $animleft ?>>
			<div  class="col-12 pt-5">
				<div class="titulo pb-5 text-white" <?php echo $animleft ?>>
					<div class=" d-flex justify-content-start">
						<img src="/imgs/half-tree.svg" class="half-tree mr-3" />
						<div><h5 class="py-3 pl-3"><?php echo $seccion5[$lang] ?></h5>
						<h2 class="text-secondary"><?php echo $seccion5_tit[$lang] ?></h2>
					</div>
				</div>
			</div>
			<div  class="col-12 px-5 pb-5">
				<div class="" <?php echo $animleft ?>>
					<p><span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item1[$lang] ?><br>
					<?php echo $seccion5_item1_txt1[$lang] ?></p>
					<hr />
				</div>
				<div class="" <?php echo $animleft ?>>
					<p><span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item2[$lang] ?><br>
					<?php echo $seccion5_item2_txt1[$lang] ?> </p>
					<?php echo $seccion5_item2_txt2[$lang] ?> </p>
					<?php echo $seccion5_item2_txt3[$lang] ?> </p>
					<?php echo $seccion5_item2_txt4[$lang] ?> </p>
					<hr />
				</div>
				<div class="" <?php echo $animleft ?>>
					<p><span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item3[$lang] ?><br>
					<?php echo $seccion5_item3_txt1[$lang] ?></p>
					<?php echo $seccion5_item3_txt2[$lang] ?></p>
					<?php echo $seccion5_item3_txt3[$lang] ?></p>
					<hr />
				</div>
				<div class="" <?php echo $animleft ?>>
					<p><span class="circle bg-secondary  mr-1"></span> <?php echo $seccion5_item4[$lang] ?><br>
					<?php echo $seccion5_item4_txt1[$lang] ?> </p>
					<hr />
				</div>
				<div class="" <?php echo $animleft ?>>
					<p><span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item5[$lang] ?><br>
					<?php echo $seccion5_item5_txt1[$lang] ?></p>
					<?php echo $seccion5_item5_txt2[$lang] ?></p>
					<hr />
				</div>
				<div class="" <?php echo $animleft ?>>
					<p><span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item6[$lang] ?><br>
					<?php echo $seccion5_item6_txt1[$lang] ?> </p>
					<?php echo $seccion5_item6_txt2[$lang] ?> </p>
					<?php echo $seccion5_item6_txt3[$lang] ?> </p>
					<hr />
				</div>
				<div class="" <?php echo $animleft ?>>
					<p><span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item7[$lang] ?><br>
					<?php echo $seccion5_item7_txt1[$lang] ?> </p>
					<?php echo $seccion5_item7_txt2[$lang] ?> </p>
					<?php echo $seccion5_item7_txt3[$lang] ?> </p>
					<?php echo $seccion5_item7_txt4[$lang] ?> </p>
					<hr />
				</div>
				<div class="" <?php echo $animleft ?>>
					<p><span class="circle bg-secondary mr-1"></span> <?php echo $seccion5_item8[$lang] ?><br>
					<?php echo $seccion5_item8_txt1[$lang] ?></p>
					<?php echo $seccion5_item8_txt2[$lang] ?></p>
				</div>
			</div>
	</section>

	<section id="location" class="row py-5">
		<div class="col-md-6"  <?php echo $animleft ?>>
			<!-- ################ MAPA################ -->
			
			
			<div id="svg-container"></div>
			
			
			<!-- ################ MAPA################ -->
		</div>
		<div class="col-md-6">
			<div class="titulo mt-5 py-5 pl-5" <?php echo $animright ?>>
				<h6 class="h5"><b><?php echo $seccion6[$lang] ?></b></h6>
				<div class=" d-flex justify-content-start">
					<img src="/imgs/flor-light.svg" class="flor" />
					<h2 class="pt-1 h4 pl-4 "><?php echo $seccion6_tit[$lang] ?></h2>				
				</div>
			</div>
		</div>
	</section>
	
	<section id="contacto" class="row bg-primary text-white rounded-top-right" <?php echo $animleft ?>>
		<div class="col-md-6" style="background:url('/imgs/contacto.jpg') center center no-repeat;background-size:cover">
			<img src="/imgs/contacto.jpg" class="d-block d-md-none w-100" />
		</div>
		<div class="col-md-6 text-center">
			<div class="titulo pb-3 text-secondary pr-5" <?php echo $animleft ?>>
				<img src="/imgs/flor-dark.svg" class="pull-left flor" />
				<h2 class="pt-5 mt-3 pull-right d-inline-block pr-4"><?php echo $seccion7_tit[$lang] ?></h2>				
			</div>
			<div <?php echo $animleft ?>>
				<b><?php echo $seccion7_tex1[$lang] ?></b><br>
				<b><?php echo $seccion7_tex2[$lang] ?></b><br><br>
				<b><?php echo $seccion7_tex3[$lang] ?></b><br><br><br>
				<?php echo $seccion7_tex4[$lang] ?><br>
				<?php echo $seccion7_tex5[$lang] ?> <br>
			</div>
			<a href="mailto: <?php echo $seccion7_tex6[$lang] ?>" class="d-block mt-4 px-3 text-white" <?php echo $animleft ?>><?php echo $seccion7_tex6[$lang] ?></a>
			<div class="socials d-block py-3">
			<?php /*	<a href="https://linkedin.com" target="_blank" class="text-white h3 mx-2"><span class="fab fa-linkedin-in"></span></a> */ ?>
				<a href="https://goo.gl/maps/QHs2VR4afc8iFL959"  target="_blank" class="text-white h3 mx-2"><span class="fa fa-map-marker-alt"></span></a>
			</div>
		</div>
	</section>

</main>

<?php require_once('inc/footer.php'); ?>
