$(document).ready(function(){

    todoArticulos();
    verUndCarrito();

   
});

 //LLAMADO A TODOS LOS PRODUCTOS A PANATALLA
function todoArticulos(){

    $('#contenido').html('<div id="loading" style="" ></div>');

    var minimo = $('#manimoF').val();
    var maximo = $('#maximoF').val();
    var categoria = get_filter('categoriasF');

    var formData = new FormData();
    formData.append('minimo',minimo );
    formData.append('maximo',maximo );
    formData.append('categoria',categoria );

    $.ajax({
        type : "POST",
        url  : urlInicio,
        dataType : "JSON",
        data : formData,
        contentType: false,
        processData: false,
        success: function(data){
            var html = '';
            var i;
            if(data != 0)
            {
                for(i=0; i<data.length; i++)
                {  
                    html += `<div class="col-md-3 verProductosClick" style="cursor:pointer;"
                                data-product_code="`+data[i].id+`"
                                data-product_code1="`+data[i].imageurl+`"
                                data-product_code2="`+data[i].categoria+`"
                                data-product_code3="`+data[i].codart+`"
                                data-product_code4="`+data[i].nomart+`"
                                data-product_code5="`+data[i].valart+`"
                                data-product_code6="`+data[i].qtyart+`"
                                data-product_code7="`+data[i].descripción+`"
                                data-product_code8="`+data[i].estado+`"
                            >
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image text-center">
                                <a href="#"> <img class="img" src="`+url+data[i].imageurl+`" style=" width: 200px; height:200px;"> </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> </h6>
                                <h4 class="blog-card-caption">
                                    <a href="#" class="text-success">`+data[i].nomart.substr(0,14)+`...</a>
                                </h4>
                                <p class="blog-card-description">`+data[i].descripción.substr(0,70)+`...</p>
                                <div class="ftr">
                                    <div class="author">
                                        <p class="pull-left text-success">$`+Intl.NumberFormat('de-DE').format(data[i].valart)+`</p>
                                        
                                    </div>
                                    <p class="pull-right ">Und: `+data[i].qtyart+`<del></del></p>
                                </div>
                            </div>
                        </div>
                    </div>`;
                }
                $('#contenido').html(html);
            }else{
                $('#contenido').html(`<div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading"><i class="fa fa-search-minus" aria-hidden="true"></i> No se encontro el filtro</h4>
                        <p>No encontramos lo q estas buscando.</p>
                        <hr>
                        <p class="mb-0">Global.</p>
                    </div>
                </div>`);
            }
        }
    });

}
//AGARRA LAS CLASES DE LOS CHECKBOX
function get_filter(class_name)
{
    var filter = [];
    $('.'+class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}

$('.common_selector').click(function(){
    todoArticulos();
});

$('#manimoF').change(function () {
    todoArticulos();
});

$('#maximoF').change(function () {
    todoArticulos();
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

//AL DAR CLICK SE ABRE EL MODAL DE LAS DESCIPCIONES DE LOS PRODUCTOS
$('#contenido').on('click','.verProductosClick',function(){

    var id          = $(this).data('product_code');
    var img         = $(this).data('product_code1');
    var nombre      = $(this).data('product_code4');
    var valor       = $(this).data('product_code5');
    var descripcion = $(this).data('product_code7');
    
    $("#undProducto").val(1);
    $("#nombreProducto1").text(nombre);
    $("#nombreProducto2").text(nombre);
    $("#descripcionProducto").text(descripcion);
    $("#precioProducto").text('$ '+Intl.NumberFormat('de-DE').format(valor));
    $("#idProducto").val(id);
    $("#precioProducto2").val(valor);
    $("#urlProducto").attr('src', url+img);


    $('#ModalVerProductos').appendTo("body").modal('show');
});

//AL ELEGIR EL PRODUCTO Y GUARDAR
$('#addCarrito').on('click',function(){

    var id      = $("#idProducto").val();
    var und     = $("#undProducto").val();
    var precio  = $("#precioProducto2").val();
    var nombre  = $("#nombreProducto2").text();

    if(und == ""){
        alertify.error("favor llenar");
        return false;
    }

    if(und <= 0){
        alertify.error("producto mayores a 0 und");
        return false;
    }

    var formData = new FormData();
    formData.append('id',id );
    formData.append('und',und );
    formData.append('precio',precio );

    alertify.confirm('<h3 class="text-center fa fa-hdd-o"> Guardar</h3>', '<h6 class="text-center">deseas gregar este articulo <strong>'+nombre+'</strong> al carrito de compra</h6>', function(){ 

        $.ajax({
            type : "POST",
            url  :  urlGuardarCarrito ,
            dataType : "JSON",
            data : formData,
            contentType: false,
            processData: false,
            success: function(data){
                verUndCarrito();
                $('#ModalVerProductos').modal('hide');
               
            }
        });
    }
    , function(){ alertify.error('Operacion Cancelada')});
  
});

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
    , function(){ alertify.error('Operacion Cancelada')});

});

//ABRIR MODAL DE FILTROS
$('.flotante2').on('click',function(){

    $('#modalFiltro').appendTo("body").modal('show');

});