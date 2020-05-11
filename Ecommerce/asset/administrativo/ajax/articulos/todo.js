$(document).ready(function(){

    $.ajax({
        type : "POST",
        url  : urlArticulosTabla,
        dataType : "JSON",
        data : {},
        success: function(data){
            table = $('#tablaArticulos').DataTable({
                "data": data,
                "bDestroy": true,
                "dom": 'B<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
                "order": [[ 0, "asc" ]],
                "lengthMenu": [ [10, 25, 50, -1], [10,25, 50, "Todo"] ],
                "searching": true,
                "autoWidth": false,
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                },
                "initComplete": function () {
                     //Apply text search
                    this.api().columns([1,2,3,4]).every(function () {
                        var title = $(this.footer()).text();
                    
                        $(this.footer()).html('<input type="text" class="form-control "  placeholder="Buscar..." />');
                        var that = this;
                        $('input',this.footer()).on('keyup change', function () {
                            if (that.search() !== this.value) {
                                that
                                    .search(this.value)
                                    .draw();
                            }
                        });

                    });

                    this.api().columns([5]).every(function () {
                        var title = $(this.footer()).text();
                    
                        $(this.footer()).html('<input type="date" class="form-control form-control-sm" placeholder="Buscar..." />');
                        var that = this;
                        $('input',this.footer()).on('keyup change', function () {
                            if (that.search() !== this.value) {
                                that
                                    .search(this.value)
                                    .draw();
                            }
                        });

                    });

                },
                "columns": [
                    { "data": null,
                        "mRender": function(data, type, full) {
                           
                            return '<div class=col-md-12 text-center"><img src="'+urlArticulosblanco+'/'+full.imageurl+'" alt="Imagen del porducto"  class="thumbnail" width="40px" /></div>';
                        }
                    },
                    { "data": "codart"},
                    { "data": "nomart"},
                    { "data": "valart", render: $.fn.dataTable.render.number(",", ".", 0, '$ ')},
                    { "data": "qtyart"},
                    { "data": "fecha"},
                ],
                "columnDefs": [
                    {
                        "targets": [0],
                        "className": "text-center"   
                    },
                ],
                buttons: [
                /* {
                        extend: 'excelHtml5',
                        title: 'Estados',
                        text: '<i class="fa fa-file-excel-o"></i> Excel',
                    
                    },*/
                ]
            });
        }
    });
    
});

$('#btnCreaArticulos').on('click',function(){

    $('[name="id"]').val(0);
    $('[name="urlimg"]').val('');
    $('[name="codart"]').val('');
    $('[name="nomart"]').val('');
    $('[name="valart"]').val('');
    $('[name="qtyart"]').val('');
    $('[name="descripción"]').val('');
   
    $('[name="codart"]').prop( "disabled", false );

    $("#btnEliminarArticulos").addClass("invisible");

    $('#exampleModal').appendTo("body").modal('show');
});

$('#btnGuardarArticulos').on('click',function(){

    var id           =  $('[name="id"]').val();
    var urlimg       =  $('[name="urlimg"]').val();
    var codart       =  $('[name="codart"]').val();
    var nomart       =  $('[name="nomart"]').val();
    var valart       =  $('[name="valart"]').val();
    var qtyart       =  $('[name="qtyart"]').val();
    var descripción  =  $('[name="descripción"]').val();

    if(codart=="")
    {
        alertify.error('Digite el Codigo del articulo');
        $('[name="codart"]').focus();
        return false;
    }

    if(nomart=="")
    {
        alertify.error('Digite el Nombre del articulo');
        $('[name="nomart"]').focus();
        return false;
    }

    if(valart=="")
    {
        alertify.error('Digite el Valor del articulo');
        $('[name="valart"]').focus();
        return false;
    }

    if(descripción=="")
    {
        alertify.error('Digite las Descripcion del articulo');
        $('[name="descripción"]').focus();
        return false;
    }

    if(qtyart=="")
    {
        alertify.error('Digite las Unidades del articulo');
        $('[name="qtyart"]').focus();
        return false;
    }

    var formData = new FormData();
    var files =   $('#image')[0].files[0];

   
    if(files==undefined)
    {
        alertify.error('Seleccione una imagen para el articulo');
        return false;
    }

    formData.append('file',files);
    formData.append('id',id );
    formData.append('urlimg',urlimg );
    formData.append('codart',codart );
    formData.append('nomart',nomart );
    formData.append('valart',valart );
    formData.append('qtyart',qtyart );
    formData.append('descripción',descripción );

    $.ajax({
        type : "POST",
        url  : urlArticulosGuardar,
        dataType : "JSON",
        data : formData,
        contentType: false,
        processData: false,
        success: function(data){
            
            if(data==0)
            {
                alertify
                    .alert("<h3 class='text-center'>Mensaje!</h3>","<h5 class='text-center'>Esta accion fue guardada exitosamente.</h5>", function(){
                    location.reload();
                });
            }else{
                alertify
                    .alert("<h3 class='text-center'>Mensaje!</h3>","<h5 class='text-center'>Este articulo ya se encuentra registrada.</h5>", function(){
                });
            }
         }
    });
    return false;
});

$('#tablaArticulos tbody').on('click','tr',function() {
       
    var data = table.row( $(this) ).data();

    var id          = data.id  ;
    var urlimg      = data.imageurl;
    var codart      = data.codart;
    var nomart      = data.nomart;
    var valart      = data.valart;
    var qtyart      = data.qtyart;
    var descripción = data.descripción;
   
    $('[name="id"]').val(id);
    $('[name="urlimg"]').val(urlimg);
    $('[name="codart"]').val(codart);
    $('[name="nomart"]').val(nomart);
    $('[name="valart"]').val(valart);
    $('[name="qtyart"]').val(qtyart);
    $('[name="descripción"]').val(descripción);

    $('[name="codart"]').prop( "disabled", true );

    $("#btnEliminarArticulos").removeClass("invisible");
   
    $('#exampleModal').appendTo("body").modal('show');
});

$('#btnEliminarArticulos').on('click',function(){

    var id = $('[name="id"]').val();
    var nomart = $('[name="nomart"]').val();

    var formData = new FormData();
    formData.append('id',id );
    formData.append('nomart',nomart );
   
    alertify.confirm('<h3 class="text-center fa fa-trash-o"> Eliminar</h3>', '<h6 class="text-center">Deseas eliminar a '+nomart+'</h6>', function(){ 

            $.ajax({
                type : "POST",
                url  :  urlArticulosEliminar ,
                dataType : "JSON",
                data : formData,
                contentType: false,
                processData: false,
                success: function(data){
                    location.reload();
                }
            });
    }
    , function(){ alertify.error('Operacion Cancelada')});
});