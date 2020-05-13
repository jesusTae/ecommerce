<style>


/** card */
.blog-card-blog {
    margin-top: 30px;
}
.blog-card {
    display: inline-block;
    position: relative;
    width: 100%;
    margin-bottom: 30px;
    border-radius: 6px;
    color: rgba(0, 0, 0, 0.87);
    background: #fff;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}
.blog-card .blog-card-image {
    height: 60%;
    position: relative;
    overflow: hidden;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: -30px;
    border-radius: 6px;
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.blog-card .blog-card-image img {
    width: 100%;
    height: 100%;
    border-radius: 6px;
    pointer-events: none;
}
.blog-card .blog-table {
    padding: 15px 30px;
}
.blog-table {
    margin-bottom: 0px;
}
.blog-category {
    position: relative;
    line-height: 0;
    margin: 15px 0;
}
.blog-text-success {
    color: #28a745!important;
}
.blog-card-blog .blog-card-caption {
    margin-top: 5px;
}
.blog-card-caption {
    font-weight: 700;
    font-family: "Roboto Slab", "Times New Roman", serif;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.blog-card-caption, .blog-card-caption a {
    color: #333;
    text-decoration: none;
}

p {
    color: #3C4857;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.blog-card .ftr {
    margin-top: 15px;
}
.blog-card .ftr .author {
    color: #888;
}

.blog-card .ftr div {
    display: inline-block;
}
.blog-card .author .avatar {
    width: 36px;
    height: 36px;
    overflow: hidden;
    border-radius: 50%;
    margin-right: 5px;blog-
}
.blog-card .ftr .stats {
    position: relative;
    top: 1px;
    font-size: 14px;
}
.blog-card .ftr .stats {
    float: right;
    line-height: 30px;
}

.flotante{
	position: fixed;
	right: 10px;
	top: 80px;
	z-index:1000;
	margin-bottom: 0;
	opacity: 0.5;
}

.flotante:hover{
	opacity: 1;
}
.flotante2{
	position: fixed;
	left: 10px;
	top: 80px;
	z-index:1000;
	margin-bottom: 0;
	opacity: 0.5;
}

.flotante2:hover{
	opacity: 1;
}
</style>
<br><br><br><br>
<div class="container">
	<button class="btn btn-success flotante"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
	<button class="btn btn-success flotante2"><i class="fa fa-filter" aria-hidden="true"></i></button>
	<div class="row" id="contenido">
		<!--
    	<div class="col-md-4">
  			<div class="blog-card blog-card-blog">
				<div class="blog-card-image">
					<a href="#"> <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale"> </a>
					<div class="ripple-cont"></div>
				</div>
				<div class="blog-table">
					<h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> </h6>
					<h4 class="blog-card-caption">
						<a href="#">Promo plato misto</a>
					</h4>
					<p class="blog-card-description">Plato arabe compuesto  de arroz de almendra, 2 hojas de parra.</p>
					<div class="ftr">
						<div class="author">
							<p class="pull-left">$200.000</p>
							
						</div>
						<p class="pull-right"><del>$300.000</del></p>
					</div>
				</div>
			</div>
		</div> -->

	</div>

	</div>
	<!-- Modal -->
	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel2">Right Sidebar</h4>
				</div>

				<div class="modal-body">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</p>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->

	<script>
		var urlInicio  = "<?php echo site_url('clientes/ControladorInicio/todo')?>";
		var url  = "<?php echo base_url('')?>";
	</script>

	<script src="<?php echo base_url('asset/clientes/ajax/todosproductos.js')?>" type="text/javascript"></script>