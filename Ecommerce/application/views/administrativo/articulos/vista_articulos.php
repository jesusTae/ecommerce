
<section id="main-content">
    <section class="wrapper site-min-height content-panel">
        <h3><i class="fa fa-angle-right"></i> Articulos</h3>
        <div class="row mt">
          	<div class="col-lg-12">
              <button type="button" class="btn btn-success fa fa-user-circle-o" id="btnCreaCategorias"> Crear Articulo</button>
                <div class="table-responsive">
                    <table class="table table-sm  table-bordered" id="tablaArticulos">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Usuario</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tfoot>
                        <tbody>
                        </tbody>
                    </table>
                </div>

          	</div>
        </div>
    </section>
      <!-- /wrapper -->
</section>	
    <!------------------------------------------------MODALS------------------------------------------------------->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-list"></i> Articulos</h4>
        </div>
        <div class="modal-body scroll_text">
        <form>
            <br>
            <div class="form-group">
                <label>Nombre Categoria</label>
                <input type="text" class="form-control" name="nomgru" placeholder="Nombre Categoria...">
                <input type="hidden" class="form-control" name="id" >
            </div>
            <hr>
            <button type="button" class="btn btn-danger fa fa-trash-o" id="btnEliminarCategorias"> Eliminar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning fa fa-ban" data-dismiss="modal"> Cerrar</button>
        <button type="button" class="btn btn-success fa fa-hdd-o" id="btnGuardarCategorias"> Guardar</button>
      </div>
    </div>
  </div>
</div>
<!------------------------------------------------MODALS------------------------------------------------------->


<script>
    var urlArticulosTabla      = "<?php echo site_url('administrativo/ControladorArticulos/todo')?>";
    var urlArticulosGuardar    = "<?php echo site_url('administrativo/ControladorArticulos/guardar')?>";
    var urlArticulosEliminar   = "<?php echo site_url('administrativo/ControladorArticulos/eliminar')?>";
</script>

<script src="<?php echo base_url('asset/administrativo/ajax/articulos/todo.js')?>" type="text/javascript"></script>