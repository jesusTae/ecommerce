<br><br><br>
<div class="container">
	<button class="btn btn-success flotante totalCarritoBtn">
		<span class="badge badge-light totalCarrito"></span> 
		<i class="fa fa-shopping-cart" aria-hidden="true"></i>
	</button>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<?php 
		$rest1 = $this->db->query("SELECT * FROM tbl_promociones WHERE p_estado = 1");
		$active='';
		?>
		<ol class="carousel-indicators">
			<?php 
			foreach ($rest1->result()as $row1):
				if($row1->p_id  == 1){$active = 'active';}else{$active='';}
			?>
			<li data-target="#carouselExampleIndicators" data-slide-to="<?= $row1->p_id;?>" class="<?= $active?>"></li>	
			<?php endforeach; ?>
		</ol>
		<div class="carousel-inner">
		<?php 
			foreach ($rest1->result()as $row1):
				if($row1->p_id  == 1){$active = 'active';}else{$active='';}
			?>
			<div class="carousel-item <?= $active?>">
            	<img class="d-block w-100" src="<?= base_url('').$row1->p_img?>" alt="First slide" id="buscarSlider">
                <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
		</div>
		<?php endforeach; ?>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only ">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br>
	<h5 class="text-center">Categorias</h5>

	<div id="shop_app" class="row">
        <!-- Start Section Body Part 2 -->
        <section id="" class="col-12 text-center">
            <div class="row shop_feature_products" >
				<?php 
				$rest = $this->db->query("SELECT * FROM tbl_categorias WHERE estado = 1");
				
				foreach ($rest->result()as $row):
				?>
				<div class="col-6 CategoriasVer" data-product_code="<?= $row->id?>" data-product_code1="<?= $row->nomgru?>">
					<form action="<?= site_url('app/ControladorInicio/productos') ?>" method="post" id="formulario<?= $row->id ?>">
					<div class="product_featured_tile">
						<img src="" alt="" class="product_brand">
						<span class="product_img">
							<img src="<?= base_url('').$row->img?>" alt="">
						</span> 
						<span class="product_title">
							<?= $row->nomgru ?>
							<span class="product_cat">
								UA Select FG
								<input type="hidden" name="categoria" value="<?= $row->id ?>">
								<input type="hidden" name="nombre" value="<?= $row->nomgru ?>">
							</span>
						</span>  
						<span class="product_price">
						</span> 
					</div>
					</form>
				</div>
				<?php endforeach; ?>
			</div>
        </section>
        <!-- End Section Body Part 2 -->
    </div>

</div>
	<!-- Modal -->
	<div class="modal" id="verModalCarrito" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito de compra</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<h4>Total: $<span id="sumTotalCarrito"></span></h4>
					</div>
					<div class="col-md-6">
						<button class="btn btn-outline-success pull-right" id="btnComprar" type="button"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Comprar</button>
					</div>
				</div>

				<div class="table-responsive">
					<table class="table table-sm  table-bordered" id="tablaCarrito">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Und</th>
                                <th>Total</th>
								<th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
			</div>
			<div class="modal-footer">

			</div>
			</div>
		</div>
	</div>
	<script>
		var urlInicio  			= "<?php echo site_url('app/ControladorInicio/todo')?>";
		var url  				= "<?php echo base_url('')?>";
		var urlGuardarCarrito  	= "<?php echo site_url('app/ControladorCarrito/guardar')?>";
		var urlTotalCarrito  	= "<?php echo site_url('app/ControladorCarrito/total')?>";
		var urlTodoCarrito  	= "<?php echo site_url('app/ControladorCarrito/todo')?>";
		var urleliminarCarrito  = "<?php echo site_url('app/ControladorCarrito/eliminar')?>";
	</script>
	<script src="<?php echo base_url('asset/app/ajax/principal/principal.js')?>" type="text/javascript"></script>