<style>
	.card{
	width: 250px;
	height: 350px;
	background: #f4f4f4;
	position: relative;
	border-radius: 10px;
	box-shadow: 0;
	transform: scale(0.95);
	transition: box-shadow .5s ease-in-out,
				transform .5s ease-in-out;
	overflow: hidden;
	font-family: sans-serif;
}
.card:hover{
	transform: scale(1);
	box-shadow: 5px 20px 30px rgba(0,0,0,.2);
}
.imgBox{
	width: 100%;
	height: 80%;
	overflow: hidden;
}
.imgBox img{
	width: 100%;
	height: 100%;
}
.details{
	position: absolute;
	width: 100%;
	height: 50%;
	background: #f4f4f4be;
	padding: 10px 20px;
	bottom: -30%;
	transition: .5s;
}
.details:hover{
	bottom: 0;
}
.textContent{
	position: relative;
	margin-top: 10px;
	color: #555;
}
.details .textContent h3{
	font-size: 20px;
	padding: 5px 0;
}
.price{
	position: absolute;
	top: 0;
	right: 0;
	font-size: 20px;
}
.details h4{
	font-size: 18px;
	margin-top: 15px;
	padding: 10px 0;
	font-weight: bold;
	color: #555;
}
.details ul{
	display: flex;
}
.details ul li{
	list-style: none;
	width: 15px;
	height: 15px;
	margin: 5px;
	cursor: pointer;
}
.details ul li:nth-child(1){
	background: #00f;
}
.details ul li:nth-child(2){
	background: #f00;
}
.details ul li:nth-child(3){
	background: #0ff;
}
.details ul li:nth-child(4){
	background: #ff0;
}
.details ul li:nth-child(5){
	background: #f0f;
}
.details button{
	width: 100%;
	padding: 5px 0;
	margin: 10px 0;
	background: #45b9e0;
	color: #fff;
	border-radius: 5px;
	border: none;
	outline: none;
	cursor: pointer;
}
.details button:hover{
	background: #5acef4;
}
.description{
	background: #92879b;
	position: absolute;
	width: 140px;
	height: 140px;
	top: -70px;
	right: -70px;
	border-radius: 0 0 200px 200px;
	transition: all .5s, border-radius 1s, top 1s;
}
.description .icon{
	position: absolute;
	top: 85px;
	right: 85px;
	color: #fff;
	opacity: 1;
}
.description:hover{
	width: 100%;
	height: 80%;
	right: 0;
	top: 0;
	border-radius: 0;
}
.description:hover .icon{
	opacity: 0;
}
.description .contents{
	color: #fff;
	padding: 5%;
	transform: scale(0.5);
	transform: translateY(-200%);
	transition: opacity .2s, transform .8s;
	opacity: 0;
}
.description:hover .contents{
	transform: scale(1);
	opacity: 1;
	transform: translateY(0);
}
.description h2{
	margin: 20px 0;
	text-align: center;
}
</style>
<br><br><br>
<div class="container">
	<input type="hidden" value="<?= $result ;?>" id="categoriaPost">
	<div class="text-center">
		<a href="<?= site_url('app/ControladorInicio'); ?>" class="btn btn-outline-success my-2 my-sm-0" id="btnAtras" ><i class="fa fa-hand-o-left" aria-hidden="true"></i> Volver a Categorias</a>
	</div>
	<hr>
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

	
	<div class="row text-center" id="contenido"></div>
	<div class="row text-center" id="paginacion"></div>

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

	<script src="<?php echo base_url('asset/app/ajax/principal/categorias.js')?>" type="text/javascript"></script>
	
	