<br><br><br>
<link rel="stylesheet" href="<?php echo base_url('asset/clientes/css/card.css')?>">
  <!-- Owl-carousel CDN -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<div class="container">
	<button class="btn btn-success flotante totalCarritoBtn">
		<span class="badge badge-light totalCarrito"></span> 
		<i class="fa fa-shopping-cart" aria-hidden="true"></i>
	</button>
	<button class="btn btn-success flotante2">
		<i class="fa fa-filter" aria-hidden="true"></i>
	</button>

	<button class="btn btn-danger flotante3" id="quitarfiltro" title="Quitar filtro">
		<i class="fa fa-filter" aria-hidden="true"></i><i class="fa fa-times-circle-o fa-lg" aria-hidden="true"></i>
	</button>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators" id="slaider">
			
		</ol>
		<div class="carousel-inner"  id="slaider2">
			
		</div>
	
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only ">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon text-dark" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- PRODUCTOS NUEVOS -->			
		<br>			
		<h3 class="text-success">LO NUEVO</h3>
		<hr>
		<div class="items">
			<?php 	
				$this->db->select('*');
				$this->db->from('tbl_articulos');
				$this->db->where('estado',1);
				$this->db->where('tipopromo',2);
				$rest1=$this->db->get(); 
				foreach ($rest1->result()as $row1): 
			?>
				<div>
				<div class="owl-item">
                                <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="<?= base_url('').$row1->imageurl?>" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                        <div class="bbb_viewed_price text-success">$<?= number_format($row1->valart); ?></div>
                                        <div class="bbb_viewed_name"><?=  substr($row1->nomart,0,20); ?>..</div>
										<button type="button" class="verSliderClick3 btn btn-outline-success fa fa-search" 
											data-product_code="<?=$row1->id?>"
											data-product_code1="<?=$row1->imageurl?>"
											data-product_code4="<?=$row1->nomart?>"
											data-product_code5="<?=$row1->valart?>"
											data-product_code7="<?=$row1->descripción?>"
											"> Ver</button>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount"></li>
                                        <li class="item_mark item_new">Nuevo</li>
                                    </ul>
                                </div>
                            </div>
					</div>
			<?php endforeach;?>
		</div>
		<!-- MAS VENDIDOS -->			
		<br>			
		<h3 class="text-success">LO MAS VENDIDO</h3>
		<hr>
		<div class="items">
			<?php 	
				$this->db->select('*');
				$this->db->from('tbl_articulos');
				$this->db->where('estado',1);
				$this->db->where('tipopromo',4);
				$rest2=$this->db->get(); 
				foreach ($rest2->result()as $row2): 
			?>
				<div>
				<div class="owl-item">
                                <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="<?= base_url('').$row2->imageurl?>" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                        <div class="bbb_viewed_price text-success">$<?= number_format($row2->valart); ?></div>
                                        <div class="bbb_viewed_name"><?=  substr($row2->nomart,0,20); ?>..</div>
										<button type="button" class="verSliderClick3 btn btn-outline-success fa fa-search" 
											data-product_code="<?=$row2->id?>"
											data-product_code1="<?=$row2->imageurl?>"
											data-product_code4="<?=$row2->nomart?>"
											data-product_code5="<?=$row2->valart?>"
											data-product_code7="<?=$row2->descripción?>"
											"> Ver</button>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount"></li>
                                        <li class="item_mark item_new"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                            </div>
					</div>
			<?php endforeach;?>
		</div>
		<!--RECOMENDADOS -->			
		<br>			
		<h3 class="text-success">LO RECOMENDADOS</h3>
		<hr>
		<div class="items">
			<?php 	
				$this->db->select('*');
				$this->db->from('tbl_articulos');
				$this->db->where('estado',1);
				$this->db->where('tipopromo',3);
				$rest3=$this->db->get(); 
				foreach ($rest3->result()as $row3): 
			?>
				<div>
				<div class="owl-item">
                                <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="<?= base_url('').$row3->imageurl?>" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                        <div class="bbb_viewed_price text-success">$<?= number_format($row3->valart); ?></div>
                                        <div class="bbb_viewed_name"><?=  substr($row3->nomart,0,20); ?>..</div>
										<button type="button" class="verSliderClick3 btn btn-outline-success fa fa-search" 
											data-product_code="<?=$row3->id?>"
											data-product_code1="<?=$row3->imageurl?>"
											data-product_code4="<?=$row3->nomart?>"
											data-product_code5="<?=$row3->valart?>"
											data-product_code7="<?=$row3->descripción?>"
											"> Ver</button>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount"></li>
                                        <li class="item_mark item_new"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                            </div>
					</div>
			<?php endforeach;?>
		</div>
	<!-- TODOS LOS PRODUCTOS-->
	<br><br>
	<div class="row" id="contenido"></div>
	<div class="row" id="paginacion"></div>

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


	<!-- Modal -->
	<div class="modal fade bd-example-modal-lg" id="ModalVerProductos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  		<div class="modal-dialog modal-lg">
    		<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-product-hunt" aria-hidden="true"></i> <span id="nombreProducto1"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 product_img text-center" style="  border-right: 1px solid #28A745;">
							<img src="" class="imagenP" id="urlProducto" >
						</div>
						<div class="col-md-6 product_content">
							<h4 class="text-success" id="nombreProducto2"></h4>
							<hr>
							<div class="scroll_text">
								<p id="descripcionProducto"></p>
							</div>
							<hr>
							<h3 class="cost text-success" id="precioProducto">
								 
							</h3>
							<div class="space-ten"></div>
								<div class="btn-ground">
									<div class="section" style="padding-bottom:20px;">
										<h6 class="title-attr"><small>CANTIDAD</small></h6>                    
										<div>
											<div class="btn-minus btn btn-success"><span class="fa fa-minus"></span></div>
											<input class="form-control"  id="undProducto" value="1">
											<input class="form-control" type="hidden" id="idProducto">
											<input class="form-control" type="hidden" id="precioProducto2">
											<div class="btn-plus btn btn-success"><span class="fa fa-plus"></span></div>
										</div>
										<br><br>
										<button type="button" class="btn btn-outline-success" id="addCarrito"><span class="fa fa-shopping-cart"></span> Agregar</button>
									</div>
								</div>
							</div>
               			</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modalFiltro" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-filter" aria-hidden="true"></i> Filtros</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body scroll_text2">
				<br>
				<div class="card">
					<article class="card-group-item">
						<header class="card-header bg-success">
							<h6 class="title text-white">Rango de precios </h6>
						</header>
						<div class="filter-content">
							<div class="card-body">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>Minimo</label>
										<input type="number" class="form-control" id="manimoF" placeholder="$0" min="0">
									</div>
									<div class="form-group col-md-6 text-right">
										<label>Maximo</label>
										<input type="number" class="form-control" id="maximoF" placeholder="$1,0000" min="0">
									</div>
								</div>
							</div> <!-- card-body.// -->
						</div>
					</article> <!-- card-group-item.// -->
				</div>
				<br>
				<div class="card">		
					<article class="card-group-item">
						<header class="card-header bg-success">
							<h6 class="title text-white">Categorias </h6>
						</header>
						<div class="filter-content">
							<div class="card-body">
							<hr>
							<?php $consulta = $this->db->query("SELECT id,codgru,nomgru FROM tbl_categorias WHERE estado = 1");
							 	foreach ($consulta->result() as $row): 
							?>
								<label class="form-check">
									<input class="form-check-input common_selector categoriasF" type="checkbox" name="categoriasF<?= $row->id?>" value="<?= $row->codgru?>">
									<span class="form-check-label">
										<?= $row->nomgru?>
									</span>
								</label> <!-- form-check.// -->
								<hr>
							<?php endforeach;?>		
							</div> <!-- card-body.// -->
						</div>
					</article> <!-- card-group-item.// -->
				</div> <!-- card.// -->

			</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<!-- Modal -->
	<div class="modal fade bd-example-modal-lg" id="ModalPago" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  		<div class="modal-dialog modal-lg">
    		<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-product-hunt" aria-hidden="true"></i> Comprar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6" style="  border-right: 1px solid #28A745;">
							
						</div>
						<div class="col-md-6 product_content">
							<div class="form-group">
								<label>Elije forma de pago</label>
								<select name="formapago" class="form-control">
								<option disabled selected>Selecciona un medio de pago</option>
									<option value="1">Efectivo</option>
									<option value="2">Tajeta</option>
								</select>
							</div>
							
							<div class="form-group">
								<label>Direccion de domicilio</label>
								<input type="text" class="form-control" name="direccion" placeholder="Direccion de domicilio...">
							</div>

							<div class="form-group">
								<label>Telefono de contacto</label>
								<input type="number" class="form-control" name="telefono" placeholder="Telefono de contacto...">
							</div>
							
							
               			</div>
					</div>
				</div>
				<div class="modal-footer">

					
					<div id="verapayco">
						<button type="button" class="btn btn-success" id="btnGuardarVenta">Guardar</button>
					</div>
					
					<button type="button" class="btn btn-danger" data-dismiss="modal" >Cerrar</button>
				</div>
			</div>
		</div>
	</div>


	<script>
		var urlInicio  			= "<?php echo site_url('clientes/ControladorInicio/todo')?>";
		var url  				= "<?php echo base_url('')?>";
		var urlGuardarCarrito  	= "<?php echo site_url('clientes/ControladorCarrito/guardar')?>";
		var urlTotalCarrito  	= "<?php echo site_url('clientes/ControladorCarrito/total')?>";
		var urlTodoCarrito  	= "<?php echo site_url('clientes/ControladorCarrito/todo')?>";
		var urleliminarCarrito  = "<?php echo site_url('clientes/ControladorCarrito/eliminar')?>";
		var urlSlaider  		= "<?php echo site_url('clientes/ControladorInicio/slaider')?>";
		var urlSlaiderProducto1 = "<?php echo site_url('clientes/ControladorCarrito/slaiderproducto1')?>";
		var urlSite  			= "<?php echo site_url('')?>";
	</script>
	<script src="<?php echo base_url('asset/clientes/ajax/principal/principal.js')?>" type="text/javascript"></script>
