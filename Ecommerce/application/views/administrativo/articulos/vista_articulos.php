
<section id="main-content">
    <section class="wrapper site-min-height content-panel">
        <h3><i class="fa fa-angle-right"></i> Articulos</h3>
        <div class="row mt">
          	<div class="col-lg-12">
              <button type="button" class="btn btn-success fa fa-list" id="btnCreaArticulos"> Crear Articulo</button>
                <div class="table-responsive">
                    <table class="table table-sm  table-bordered" id="tablaArticulos">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Categoria</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Valor</th>
                                <th>Unidad</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <th></th>
                            <th></th>
                            <th></th>
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
            <div class="form-group last">
                <label class="control-label col-md-3">Importar imagen</label>
                <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="<?php echo base_url('asset/administrativo/img/imgblanco.png')?>" alt="" />
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                            <span class="btn btn-theme02 btn-file">
                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Selecciona imagen</span>
                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                <input type="file" class="default" id="image" name="image"/>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Seleccione categoria</label>
                <select class="form-control categoria" name="categoria" ></select>
            </div>
            <div class="form-group">
                <label>Codigo del articulo</label>
                <input type="text" class="form-control" name="codart" placeholder="Codigo del articulo...">
                <input type="hidden" class="form-control" name="id" >
                <input type="hidden" class="form-control" name="urlimg" >
            </div>
            <div class="form-group">
                <label>Nombre del articulo</label>
                <input type="text" class="form-control" name="nomart" placeholder="Nombre del articulo...">
            </div>
            <div class="form-group">
                <label>Valor del articulo</label>
                <input type="number" class="form-control" name="valart" placeholder="Valor del articulo...">
            </div>
            <div class="form-group">
                <label>Unidad del articulo</label>
                <input type="number" class="form-control" name="qtyart" placeholder="Unidad del articulo...">
            </div>
            <div class="form-group">
                <label>Descripcion del articulo</label>
                <textarea  class="form-control" name="descripción" rows="7" placeholder="Descripcion del articulo..."></textarea>
            </div>
            <hr>
            <button type="button" class="btn btn-danger fa fa-trash-o" id="btnEliminarArticulos"> Eliminar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning fa fa-ban" data-dismiss="modal"> Cerrar</button>
        <button type="button" class="btn btn-success fa fa-hdd-o" id="btnGuardarArticulos"> Guardar</button>
      </div>
    </div>
  </div>
</div>
<!------------------------------------------------MODALS------------------------------------------------------->


<script>
    var urlArticulosTabla       = "<?php echo site_url('administrativo/ControladorArticulos/todo')?>";
    var urlArticulosGuardar     = "<?php echo site_url('administrativo/ControladorArticulos/guardar')?>";
    var urlArticulosEliminar    = "<?php echo site_url('administrativo/ControladorArticulos/eliminar')?>";
    var urlArticulosblanco      = "<?php echo base_url()?>";
    var urlArticuloscategoria   = "<?php echo site_url('administrativo/ControladorArticulos/categoria')?>";
</script>

<script src="<?php echo base_url('asset/administrativo/ajax/articulos/todo.js')?>" type="text/javascript"></script>