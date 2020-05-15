<!DOCTYPE html>
<html>
<head>
<title>Trekking a Ecommerce Category Flat Bootstarp Responsive Website Template | Products :: w3layouts</title>
<link href="<?php echo base_url('asset/clientes/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('asset/clientes/js/jquery-3.2.1.min.js') ?>"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo base_url('asset/clientes/css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="<?php echo base_url('asset/clientes/js/js/move-top.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/clientes/js/js/easing.js') ?>"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!--//slider-script-->
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
<link rel="stylesheet" href="<?php echo base_url('asset/clientes/css/etalage.css') ?>">
<script src="<?php echo base_url('asset/clientes/js/jquery.etalage.min.js') ?>"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script> 

</head>
<body>
<!--header-->
	<div class="header">
		<div class="container">
		<div class="header-top">		
			<div class="logo">
				 <a href="<?php echo site_url('/'); ?>" style="color: brown">Globalsoft</a>
            </div>
                <div class="top-nav">
                    <span class="menu"><img src="<?php echo base_url('asset/clientes/img/menu.png')?>" alt=""> </span>
                    <ul class="icon1 sub-icon1">
                         <li  ><a href="<?php echo site_url('/'); ?>" style="color: brown">Inicio</a></li>
                         <li><a href="<?php echo site_url('/clientes/ControladorProductos'); ?>" style="color: brown">Productos</a></li> 
                        <li><a href="#"style="color: brown">Carrito</a>
                        <ul class="sub-icon1 list">
                          <h3>Items agregados</h3>
                          <div class="shopping_cart">
                              <div class="cart_box">
                                 <div class="message">
                                     <div class="alert-close"> </div> 
                                        <div class="list_img"><img src="<?php echo base_url('asset/clientes/img/15.jpg')?>" class="img-responsive" alt=""></div>
                                        <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>
                                        <p>Aliquam dignissim porttitor tortor </p>
                                        <a href="#" class="offer">Ver Producto</a>
                                        </div>
                                      <div class="clearfix"></div>
                                  </div>
                                </div>
                               <div class="cart_box">
                                 <div class="message1">
                                     <div class="alert-close1"> </div> 
                                        <div class="list_img"><img src="<?php echo base_url('asset/clientes/img/16.jpg')?>" class="img-responsive" alt=""></div>
                                        <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>
                                        <p>Aliquam dignissim porttitor tortor </p>
                                        <a href="#" class="offer">Ver Producto</a>
                                        </div>
                                      <div class="clearfix"></div>
                                  </div>
                                </div>
                            </div>
                              <div class="check_button"><a href="<?php echo site_url('/clientes/ControladorCarrito'); ?>">View Cart</a></div>
                          <div class="clearfix"></div>
                        </ul>
</li>
                    </ul>
                    <!--script-->
                <script>
                    $("span.menu").click(function(){
                        $(".top-nav ul").slideToggle(500, function(){
                        });
                    });
            </script>
<div class="clearfix"> </div>
			</div>
		</div>
		</div>
		
		<!---->
			<div class="container">
		<div class="single">
			<div class="col-md-9">
				<div class="single_grid">
				<div class="grid images_3_of_2">
				<ul id="etalage">

							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image img-responsive" src="<?php echo base_url('asset/clientes/img/sin.jpg ')?>" alt="" >
									<img class="etalage_source_image img-responsive" src="<?php echo base_url('asset/clientes/img/sin-1.jpg ')?>" alt="" >
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="<?php echo base_url('asset/clientes/img/sin1.jpg ')?>" alt="" >
								<img class="etalage_source_image img-responsive" src="<?php echo base_url('asset/clientes/img/sin-2.jpg ')?>" alt="" >
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="<?php echo base_url('asset/clientes/img/sin.jpg ')?>"  alt="" >
								<img class="etalage_source_image img-responsive" src="<?php echo base_url('asset/clientes/img/sin-1.jpg ')?>" alt="" >
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="<?php echo base_url('asset/clientes/img/sin2.jpg ')?>" alt=""  >
								<img class="etalage_source_image img-responsive" src="<?php echo base_url('asset/clientes/img/sin-3.jpg ')?>" alt="" >
							</li>
						    
						</ul>

						 <div class="clearfix"> </div>		
				  </div> 
				  <!---->
				  <div class="span1_of_1_des">
				  <div class="desc1">
					<h3>Productos de prueba </h3>
					<p>Este es un producto de prueba para la vista de descripcion en la cual se mostrara informacion del producro seleccionado como los precios, descripcion, imagen y cantidad.</p>
					<h5>$. 6,990</h5>
					<div class="available">
						<h4>Opciones:</h4>
						<ul>
							<li>Talla:
								<select>
									<option>L</option>
									<option>XL</option>
									<option>S</option>
									<option>M</option>
								</select>
							</li>
							<li>Cantidad:
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</li>
						</ul>
						<div class="form-in">
							<a href="#" class="hvr-shutter-in-horizontal">Agregar al carrito</a>
						</div>

					</div>
					<div class="share-desc">
						<div class="share">
							<h4>Compartir producto:</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="<?php echo base_url('asset/clientes/img/facebook.png')?>" title="facebook"></a></li>
								<li><a href="#"><img src="<?php echo base_url('asset/clientes/img/twitter.png ')?>" title="Twiiter"></a></li>
				    		</ul>
						</div>
						<div class="clearfix"></div>
					</div>
			   	 </div>
			   	</div>
          	    <div class="clearfix"></div>
          	  </div>
			  <!---->
			  <div class="possible-single">
					<h4>Mas:</h4>
						<div class="tab1">
							<ul class="place">
								<li><img src="<?php echo base_url('asset/clientes/img/cir.png ')?>" alt=""></li>
								<li>Descripcion 1</li>
							</ul>
						<p style="display: none; overflow: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab2">
							<ul class="place">
								<li><img src="<?php echo base_url('asset/clientes/img/cir.png ')?>" alt=""></li>
								<li>Descripcion 2</li>
							</ul>
						<p style="display: none; overflow: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab3">
							<ul class="place">
								<li><img src="<?php echo base_url('asset/clientes/img/cir.png ')?>" alt=""></li>
								<li>Descripcion 3</li>
							</ul>
						<p style="display: none; overflow: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab4">
							<ul class="place">
								<li><img src="<?php echo base_url('asset/clientes/img/cir.png ')?>" alt=""></li>
								<li>Descripcion 4</li>
							</ul>
						<p style="display: none; overflow: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab5">
							<ul class="place">
								<li><img src="<?php echo base_url('asset/clientes/img/cir.png ')?>" alt=""></li>
								<li>Descripcion 5</li>
							</ul>
						<p style="display: block; overflow: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab6">
							<ul class="place">
								<li><img src="<?php echo base_url('asset/clientes/img/cir.png ')?>" alt=""></li>
								<li>Descripcion 6</li>
							</ul>
						<p style="display: block; overflow: hidden;">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						
						<!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 p").hide();
								$(".tab2 p").hide();
								$(".tab3 p").hide();
								$(".tab4 p").hide();
								$(".tab5 p").hide();
								$(".tab6 p").hide();
								$(".tab1 ul").click(function(){
									$(".tab1 p").slideToggle(300);
									$(".tab2 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 p").slideToggle(300);
									$(".tab1 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 p").slideToggle(300);
									$(".tab4 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 p").slideToggle(300);
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
								})
								$(".tab5 ul").click(function(){
									$(".tab5 p").slideToggle(300);
									$(".tab4 p").hide();
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
									$(".tab6 p").hide();
									
								})
								$(".tab6 ul").click(function(){
									$(".tab6 p").slideToggle(300);
									$(".tab5 p").hide();
									$(".tab4 p").hide();
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();																	
								})
								
								
							});
						</script>
						<!-- script -->
					</div>
				</div>
			</div>
		</div>
					
	<!---->
	

			<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
