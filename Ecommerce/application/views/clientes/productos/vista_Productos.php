<!DOCTYPE html>
<html>
<head>
<title>Trekking a Ecommerce Category Flat Bootstarp Responsive Website Template | Products :: w3layouts</title>
<link href="<?php echo base_url('asset/clientes/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo base_url('asset/clientes/css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
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
</head>
<body>
<!--header-->
	<div class="header">
		<div class="container">
		<div class="header-top">		
			<div class="logo">
				 <a href="<?php echo site_url('/'); ?>" style="color: white">Globalsoft</a>
            </div>
                <div class="top-nav">
                    <span class="menu"><img src="<?php echo base_url('asset/clientes/img/menu.png')?>" alt=""> </span>
                    <ul class="icon1 sub-icon1">
                         <li  ><a href="<?php echo site_url('/'); ?>" >Inicio</a></li>
                         <li><a href="<?php echo site_url('/clientes/ControladorProductos'); ?>" >Productos</a></li> 
                        <li><a href="#"><i></i></a>
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
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        </div>
		<div class="banner banner-in">
			
		</div>
		<div class="content">
			
		<!---->
		<div class="container">
			<div class="content-product">
				<h3 class="future-men">MEN</h3>
					
				<div class="col-md-4 col-d">
				<div class="men-grid in-men">
					<a href="single.html"><img class="img-responsive" src="images/me6.png" alt=""></a>
						<div class="value-in">
							<p>trekking shoes</p>
							<span>5,00€</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
						</div>	
					</div>
				</div>
				<div class="col-md-4 col-d">
				<div class="men-grid in-men">
					<a href="single.html"><img class="img-responsive" src="images/me7.png" alt=""></a>
						<div class="value-in">
							<p>backpack</p>
							<span>5,00€</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
						</div>	
					</div>
				</div>
				<div class="col-md-4 col-d">
				<div class=" men-grid in-men">
					<a href="single.html"><img class="img-responsive" src="images/me.png" alt=""></a>
						<div class="value-in">
							<p>T-Shirt</p>
							<span>5,00€</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
						</div>	
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="content-product">
				<h3 class="future-women">WOMEN</h3>
					<div class="col-md-4 col-d">
				<div class=" men-grid in-men ">
					<a href="single.html"><img class="img-responsive" src="images/me8.png" alt=""></a>
						<div class="value-in">
							<p>backpack</p>
							<span>15,00€</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
						</div>	
					</div>
				</div>
				<div class="col-md-4 col-d">
				<div class="men-grid in-men">
					<a href="single.html"><img class="img-responsive" src="images/me4.png" alt=""></a>
						<div class="value-in">
							<p>trekking shoes</p>
							<span>5,00€</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
						</div>	
					</div>
				</div>
				<div class="col-md-4 col-d">
				<div class="men-grid in-men">
					<a href="single.html"><img class="img-responsive" src="images/me5.png" alt=""></a>
						<div class="value-in">
							<p>T-Shirt</p>
							<span>5,00€</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
						</div>	
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>