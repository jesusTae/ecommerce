<style>
    .navbar-dark .navbar-nav .nav-link {
    color: #f8f9fa;
}
</style>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">
        <img src="<?php echo base_url('asset/clientes/img/global.png')?>" width="30" height="30" alt="" loading="lazy">
        Global
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="form-inline">
            <input class="form-control mr-sm-2" id="busquedaGeneral" type="text" placeholder="Buscar.....">
            <button class="btn btn-outline-success my-2 my-sm-0" id="btnBusquedaGeneral" type="button"><i class="fa fa-search" aria-hidden="true"></i> Bucar</button>
        </div>
      
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link totalCarritoBtn" href="#"><span class="badge badge-light totalCarrito"></span> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url('Login/logout');?>" tabindex="-1" aria-disabled="true"><i class="fa fa-power-off" aria-hidden="true"></i> Cerrar sesion</a>
            </li>
        </ul>
  </div>
</nav>