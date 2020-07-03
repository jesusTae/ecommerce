<section id="main-content">
    <section class="wrapper site-min-height content-panel">
        <h3><i class="fa fa-angle-right"></i> Pedidos</h3>
        <div class="row mt">
          	<div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-sm  table-bordered" id="tablaPedidos">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>codcto</th>
                                <th>tipfac</th>
                                <th>numfac</th>
                                <th>fecfac</th>
                                <th>valfac</th>
                                <th>descfac</th>
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
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-list"></i> Detalles del pedido</h4>
        </div>
        <div class="modal-body scroll_text">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning fa fa-ban" data-dismiss="modal"> Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!------------------------------------------------MODALS------------------------------------------------------->


<script>
    var urlCategorias   =   "<?php echo site_url()?>";
</script>

<script src="<?php echo base_url('asset/administrativo/ajax/pedidos/todo.js')?>" type="text/javascript"></script>