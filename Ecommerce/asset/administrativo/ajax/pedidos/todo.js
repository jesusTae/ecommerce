$(document).ready(function(){
   
    verTablaFactura();
});

function verTablaFactura(){

    $.ajax({
        type : "POST",
        url  : urlCategorias+'/administrativo/ControladorPedidos/todo',
        dataType : "JSON",
        data : {},
        success: function(data){
            table = $('#tablaPedidos').DataTable({
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
                    this.api().columns([0,1,2,3,4,5,6]).every(function () {
                        var title = $(this.footer()).text();
                    
                        $(this.footer()).html('<input type="text" class="form-control-sm"  placeholder="Buscar..." />');
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
                    { "data": "codcto"},
                    { "data": "tipfac"},
                    { "data": "numfac"},
                    { "data": "fecfac"},
                    { "data": "valfac"},
                    { "data": "descfac"},
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
}

$('#tablaPedidos tbody').on('click','tr',function() {

    alert('hola');
        //var data = table.row( $(this) ).data();

        //var id      = data.id  ;
    
        //$('#exampleModal').appendTo("body").modal('show');
   
});

