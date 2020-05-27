$(document).ready(function(){
    verUndCarrito();


    $(".CategoriasVer").on("click",function(){
        var categoria   = $(this).data('product_code');
        var nombrecate  = $(this).data('product_code1');

       

        $.confirm({
            title: 'Mensaje!',
            content: 'Deseas ir a la categoria <strong>'+nombrecate+'</strong>!',
            buttons: {
                SI: {
                    btnClass: 'btn btn-outline-success',
                    action: function () {
                        $( "#formulario"+categoria).submit();
                    }
                },
                
                NO: {
                    btnClass: 'btn btn-outline-danger',
                    action: function () {
                        alertify.error('Operacion Cancelada');
                    }
                }
            }
        });
        
    });
    
});

//FUNCION DE LLAMADO DE LAS UNIDADES DE PRODUCTOS 
function verUndCarrito(){
    $.ajax({
        type : "POST",
        url  : urlTotalCarrito,
        dataType : "JSON",
        data : {},
        success: function(data){
            var i;
            if(data != 0)
            {
                for(i=0; i<data.length; i++)
                {  
                    if(data[i].total==null)
                    {
                        $(".totalCarrito").text(0);
                        $("#sumTotalCarrito").text(0);
                    }else{
                        $(".totalCarrito").text(data[i].total);
                        $("#sumTotalCarrito").text(Intl.NumberFormat('de-DE').format(data[i].totalsum));
                    }
                }
            }
        
        }
    });
}


//ABRIR MODAL DE EL CARRITO DE COMPRA
$('.totalCarritoBtn').on('click',function(){

    tablaCarrito();
    $('#verModalCarrito').appendTo("body").modal('show');

});

//MODAL DE CARRITO DE COMPRA CON TABLA
function tablaCarrito(){
    $.ajax({
        type : "POST",
        url  : urlTodoCarrito,
        dataType : "JSON",
        data : {},
        success: function(data){
            tablecarrito = $('#tablaCarrito').DataTable({
                "data": data,
                "bDestroy": true,
                "dom": 'B<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
                "order": [[ 0, "asc" ]],
                "lengthMenu": [ [10, 25, 50, -1], [10,25, 50, "Todo"] ],
                "searching": false,
                "autoWidth": false,
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                },
                "initComplete": function () {
                     //Apply text search
                    this.api().columns([0,1,2,3]).every(function () {
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
                    /*
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

                    });*/

                },
                "columns": [
                    {   
                        "data": null,
                        "mRender": function(data, type, full) {
                       
                        return '<div class="text-center"><a><img src="'+url+full.imageurl+'" alt="Imagen del porducto"  class="thumbnail" width="40px" /></a></div>';

                        }
                    },
                    { "data": "nomart"},
                    { "data": "c_und"},
                    { "data": "c_totalvalor", render: $.fn.dataTable.render.number(",", ".", 0, '$ ')},
                    {   
                        "data": null,
                        "mRender": function(data, type, full) {
                       
                        return '<div class="text-center"><button type="button" class="btn btn-outline-danger fa fa-trash-o" id="eliminarCarrito"></button></div>';

                        }
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
}

//ELIMINAR PRODUCTOS DEL CARRITO DE COMPRA
$('#tablaCarrito').on('click','#eliminarCarrito',function(){

    var data        = tablecarrito.row( $(this).parents('tr') ).data();
    var fecha       = data.c_fecha;
    var articulo    = data.c_producto;
    var total       = data.c_totalvalor;
    var nombre      = data.nomart;
   

    var formData = new FormData();
    formData.append('fecha',fecha );
    formData.append('articulo',articulo );
    formData.append('total',total );

   /*
    alertify.confirm('<h3 class="text-center fa fa-trash-o"> Eliminar</h3>', '<h6 class="text-center">Deseas quitar a '+nombre+'</h6>', function(){ 

            $.ajax({
                type : "POST",
                url  :  urleliminarCarrito ,
                dataType : "JSON",
                data : formData,
                contentType: false,
                processData: false,
                success: function(data){
                    verUndCarrito();
                    $('#verModalCarrito').modal('hide');
                }
            });
    }
    , function(){ alertify.error('Operacion Cancelada')});*/

    $.confirm({
        title: 'Eliminar!',
        content: 'Deseas quitar a <strong>'+nombre+'</strong>!',
        buttons: {
                SI: {
                    btnClass: 'btn btn-outline-success',
                    action: function () {
                        $.ajax({
                            type : "POST",
                            url  :  urleliminarCarrito ,
                            dataType : "JSON",
                            data : formData,
                            contentType: false,
                            processData: false,
                            success: function(data){
                                verUndCarrito();
                                $('#verModalCarrito').modal('hide');
                            }
                        });
                    }
                },
                
                NO: {
                    btnClass: 'btn btn-outline-danger',
                    action: function () {
                        alertify.error('Operacion Cancelada');
                    }
                }
            
        }
    });

});

//COMPRAR
$('#btnComprar').on('click',function(){

    var totalCarrito = $("#sumTotalCarrito").text();

    if(totalCarrito <= 0){
        $.alert({
            title: 'Alerta!',
            content: '<h6 class="text-center">El monto total es cero debe elegir productos!</h6>',
            buttons: {
                CERRAR: {
                    btnClass: 'btn btn-outline-danger',
                    action: function () {}
                }
            }
        });

        return false;
    }else{
        
        $.confirm({
            title: 'Mensaje!',
            content: 'Deseas comprar todo lo que se encuentra en su carrito de compra?',
            buttons: {
                    SI: {
                        btnClass: 'btn btn-outline-success',
                        action: function () {
                            alertify.error('Felicidades');
                        }
                    },
                    
                    NO: {
                        btnClass: 'btn btn-outline-danger',
                        action: function () {
                            alertify.error('Operacion Cancelada');
                        }
                    }
                
            }
        });

    }



});
 
