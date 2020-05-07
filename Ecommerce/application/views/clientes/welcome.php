<style type="text/css">
	.carousel-item{
		height: 87vh;
	}
	.art_descrip{
		font-size: 10px;
	    font-weight: 500;
	    color: #d33484;
	    line-height: 1.3;
	    margin-bottom: .4rem;
	}
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('asset/clientes/img/slider/Slide1.jpg')?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('asset/clientes/img/slider/Slide2.jpg')?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('asset/clientes/img/slider/Slide3.jpg')?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row" style="height: 10vh;">
	<div class="col-md-4" style="background: #f4f4f4">
		Compras seguras<br>
		Tu datos de pago estarán bajo alta seguridad
	</div>
	<div class="col-md-4" style="background: #f4f4f4">
		Envios Nacionales<br>
		Compra en linea y recibe en la puerta de tu casa
	</div>
	<div class="col-md-4" style="background: #f4f4f4">
		PROMOCIONES ÚNICAS<br>
		Tu datos de pago estarán bajo alta seguridad
	</div>
</div>

<section class="col-md-12" style="padding: 2%">
	<h3>Categorías destacadas</h3>
	<div class="row">
		<div class="col-md-4">
      		<img src="<?php echo base_url('asset/clientes/img/slider/Slide1.jpg')?>" style="height: 23.5em;">
		</div>
		<div class="col-md-4">
			<img src="<?php echo base_url('asset/clientes/img/slider/Slide1.jpg')?>" style="height: 11.2rem; margin-bottom: 4%; width: 26rem;">
			<img src="<?php echo base_url('asset/clientes/img/slider/Slide1.jpg')?>" style="height: 11.2rem; margin-bottom: 4%; width: 26rem;">
		</div>
		<div class="col-md-4">
			<img src="<?php echo base_url('asset/clientes/img/slider/Slide1.jpg')?>" style="height: 23.5em;">
		</div>
	</div>
</section>

<section class="col-md-12" style="padding: 2%">
	<div class="col-md-12" style="margin-left: 12px">
		<div class="card">
			<div class="card-header">
				Ofertas del día
			</div>
			<div class="card-body">
				<center>No hay productos en oferta el día de hoy</center>
			</div>
		</div>

		<div class="card mt-4">
			<div class="card-header">
				Más comprados a crédito
			</div>
			<div class="card-body">
				<div class="col-md-4"> 
                    <div class="intro-item">
                    	<center>
	                        <figure>
	                            <img src="<?php echo base_url('asset/clientes/img/slider/Slide1.jpg')?>" alt="#" width="200" height="200" class="border_radius">
	                        </figure>

	                        <div class="product-info">
	                            <h5>Samsung</h5>
	                            <p class="art_descrip">oferta pago inmediato</p>
	                            <p class="art_descrip">$40.000</p>
	                        </div>
                        </center>
                    </div>
    			</div>
			</div>
		</div>

	</div>
	
</section>

<section class="product-section spad">
    <input type="hidden" id="NewGuid" value="" />
    <div class="container">
        <ul class="product-filter controls">
            <li class="control" data-filter=".NEW">Nueva coleccion</li>
            <li class="control" data-filter="all">Recomendados</li>
            <li class="control" data-filter=".BEST">Mas vendidos</li>
            <li class="control" data-filter=".SALE">Promociones</li>
        </ul>
        <div class="row" id="product-filter">
            <div class="col-md-4"> 
                <div class="intro-item">
                	<center>
                        <figure>
                            <img src="<?php echo base_url('asset/clientes/img/slider/Slide1.jpg')?>" alt="#" width="200" height="200" class="border_radius">
                        </figure>

                        <div class="product-info">
                            <h5>Samsung</h5>
                            <p class="art_descrip">oferta pago inmediato</p>
                            <p class="art_descrip">$40.000</p>
                        </div>
                    </center>
                </div>
			</div>
    	</div>
</section>