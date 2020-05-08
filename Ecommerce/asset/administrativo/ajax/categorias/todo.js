$(document).ready(function(){

    $.ajax({
        type : "POST",
        url  : urlCategoriasTabla,
        dataType : "JSON",
        data : {},
        success: function(data){
            table = $('#tablaCategorias').DataTable({
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
                    this.api().columns([0,1,2]).every(function () {
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

                    this.api().columns([3]).every(function () {
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
                    { "data": "id"}, 
                    { "data": "nomgru"},
                    { "data": "usuario"},
                    { "data": "fecha"},
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

$('#btnCreaCategorias').on('click',function(){

    $('[name="id"]').val(0);
    $('[name="nomgru"]').val('');
   
    $("#btnEliminarCategorias").addClass("invisible");

    $('#exampleModal').appendTo("body").modal('show');
});

$('#btnGuardarCategorias').on('click',function(){

    var id       = $('[name="id"]').val();
    var nomgru   = $('[name="nomgru"]').val();

    if(nomgru=="")
    {
        alertify.error('Digite el Nombre de la categoria');
        $('[name="nomgru"]').focus();
        return false;
    }

    var formData = new FormData();
    formData.append('id',id );
    formData.append('nomgru',nomgru );

    $.ajax({
        type : "POST",
        url  : urlCategoriasGuardar,
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
                    .alert("<h3 class='text-center'>Mensaje!</h3>","<h5 class='text-center'>Esta categoria ya se encuentra registrada.</h5>", function(){
                });
            }
         }
    });
    return false;
});

$('#tablaCategorias tbody').on('click','tr',function() {
       
    var data = table.row( $(this) ).data();

    var id = data.id  ;
    var nomgru = data.nomgru;
   
    $('[name="id"]').val(id);
    $('[name="nomgru"]').val(nomgru);

    $("#btnEliminarCategorias").removeClass("invisible");
   
    $('#exampleModal').appendTo("body").modal('show');
});

$('#btnEliminarCategorias').on('click',function(){

    var id = $('[name="id"]').val();
    var nomgru = $('[name="nomgru"]').val();

    var formData = new FormData();
    formData.append('id',id );
    formData.append('nomgru',nomgru );
   
    alertify.confirm('<h3 class="text-center fa fa-trash-o"> Eliminar</h3>', '<h6 class="text-center">Deseas eliminar a '+nomgru+'</h6>', function(){ 

            $.ajax({
                type : "POST",
                url  :  urlCategoriasEliminar ,
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