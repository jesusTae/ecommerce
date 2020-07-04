$(document).ready(function(){

    slaiderfun();
    todoArticulos();
    verUndCarrito();
    var Vtbl = '';
    var Vdescripcion = '';

    //-- Click on QUANTITY
    $(".btn-minus").on("click",function(){
        var now = $(".section > div > #undProducto").val();
        if ($.isNumeric(now)){
            if (parseInt(now) -1 > 0){ now--;}
            $(".section > div > #undProducto").val(now);
        }else{
            $(".section > div > #undProducto").val("1");
        }
    });

    $(".btn-plus").on("click",function(){
        var now = $(".section > div > #undProducto").val();
        if ($.isNumeric(now)){
            $(".section > div > #undProducto").val(parseInt(now)+1);
        }else{
            $(".section > div > #undProducto").val("1");
        }
    });
    
    alertify.defaults.transition = "slide";
    alertify.defaults.theme.ok = "btn btn-primary";
    alertify.defaults.theme.cancel = "btn btn-danger";
    alertify.defaults.theme.input = "form-control";

   //MODAL CARD CROUSEL PRODUCTS
   $('.items').slick({
        dots: true,
        infinite: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 4,	
        slidesToScroll: 4,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

        ]
    });
    

   
});
 //LLAMADO A EL CAROUSEL
function slaiderfun(){
   
    $.ajax({
        type : "POST",
        url  : urlSlaider,
        dataType : "JSON",
        data : {},
        contentType: false,
        processData: false,
        success: function(data){
            var html    = '';
            var html2   = '';
            var active  = '';
            var i;
            if(data != 0)
            {
                for(i=0; i<data.length; i++)
                {  
                    if(data[i].p_id  == 1){ active = "active"}else{active = ""}
                    html  += `   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="`+active+`"></li>`;
                    html2 += `  <div class="carousel-item `+active+`">
                                    <img class="d-block w-100" src="`+url+data[i].p_img+`" alt="First slide" id="buscarSlider"
                                    data-product_code   =   "`+data[i].p_tbl+`"
                                    data-product_code1  =   "`+data[i].p_elegido+`"
                                    data-product_code2  =   "`+data[i].descripcion+`">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5></h5>
                                        <p></p>
                                    </div>
                                </div>`;
                }

                $('#slaider').html(html);
                $('#slaider2').html(html2);
            }else{  
                $('#slaider').html('');
                $('#slaider2').html('');
            }
        }
    });

}

//LLAMADO A TODOS LOS PRODUCTOS A PANATALLA
function todoArticulos(){
   
    $('#contenido').html('<div id="loading" style="" ></div>');

    var busquedaGeneral = $('#busquedaGeneral').val();
    var minimo          = $('#manimoF').val();
    var maximo          = $('#maximoF').val();
    var categoria       = get_filter('categoriasF');
  
    var formData = new FormData();
    formData.append('busquedaGeneral',busquedaGeneral );
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
                    html += `<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 verProductosClick jar" style="cursor:pointer;"
                                data-product_code="`+data[i].id+`"
                                data-product_code1="`+data[i].imageurl+`"
                                data-product_code2="`+data[i].categoria+`"
                                data-product_code3="`+data[i].codart+`"
                                data-product_code4="`+data[i].nomart+`"
                                data-product_code5="`+data[i].valart+`"
                                data-product_code6="`+data[i].qtyart+`"
                                data-product_code7="`+data[i].descripcion+`"
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
                                <p class="blog-card-description">`+data[i].descripcion.substr(0,70)+`...</p>
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

                html2 =`<nav>
                            <ul class="pagination justify-content-center pagination-sm"></ul>
                        </nav>`;
                $('#contenido').html(html);
                $('#paginacion').html(html2);
               
                function getPageList(totalPages, page, maxLength) {
                    if (maxLength < 4) throw "maxLength must be at least 5";
            
                    function range(start, end) {
                        return Array.from(Array(end - start + 1), (_, i) => i + start);
                    }
            
                    var sideWidth = maxLength < 9 ? 1 : 2;
                    var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
                    var rightWidth = (maxLength - sideWidth * 2 - 2) >> 1;

                    if (totalPages <= maxLength) {
                        // no breaks in list
                        return range(1, totalPages);
                    }

                    if (page <= maxLength - sideWidth - 1 - rightWidth) {
                        // no break on left of page
                        return range(1, maxLength - sideWidth - 1)
                        .concat([0])
                        .concat(range(totalPages - sideWidth + 1, totalPages));
                    }
                    
                    if (page >= totalPages - sideWidth - 1 - rightWidth) {
                        // no break on right of page
                        return range(1, sideWidth)
                        .concat([0])
                        .concat(
                            range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages)
                        );
                    }
                    // Breaks on both sides
                    return range(1, sideWidth)
                        .concat([0])
                        .concat(range(page - leftWidth, page + rightWidth))
                        .concat([0])
                        .concat(range(totalPages - sideWidth + 1, totalPages));
                }
            
                $(function() {
                        // Number of items and limits the number of items per page
                        var numberOfItems = $("#contenido .jar").length;
                        var limitPerPage = 8;
                        // Total pages rounded upwards
                        var totalPages = Math.ceil(numberOfItems / limitPerPage);
                        // Number of buttons at the top, not counting prev/next,
                        // but including the dotted buttons.
                        // Must be at least 5:
                        var paginationSize = 6;
                        var currentPage;
            
                        function showPage(whichPage) {
                            if (whichPage < 1 || whichPage > totalPages) return false;
                            currentPage = whichPage;
                            $("#contenido .jar")
                            .hide()
                            .slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage)
                            .show();
                            // Replace the navigation items (not prev/next):
                            $(".pagination li").slice(1, -1).remove();
                            getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                            $("<li>")
                                .addClass(
                                "page-item " +
                                    (item ? "current-page " : "") +
                                    (item === currentPage ? "active " : "")
                                )
                                .append(
                                $("<a>")
                                    .addClass("page-link")
                                    .attr({
                                    href: "javascript:void(0)"
                                    })
                                    .text(item || "...")
                                )
                                .insertBefore("#next-page");
                            });
                            return true;
                        }
            
                        // Include the prev/next buttons:
                        $(".pagination").append(
                            $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
                            $("<a>")
                                .addClass("page-link fa fa-angle-double-left")
                                .attr({
                                href: "javascript:void(0)"
                                })
                                .text("")//Aqui va el nombre del boton
                            ),
                            $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
                            $("<a>")
                                .addClass("page-link fa fa-angle-double-right")
                                .attr({
                                href: "javascript:void(0)"
                                })
                                .text("")//Aqui va el nombre del boton
                            )
                        );
                        // Show the page links
                        $("#contenido").show();
                        showPage(1);
            
                        // Use event delegation, as these items are recreated later
                        $(
                            document
                        ).on("click", ".pagination li.current-page:not(.active)", function() {
                            return showPage(+$(this).text());
                        });
                        $("#next-page").on("click", function() {
                            return showPage(currentPage + 1);
                        });
            
                        $("#previous-page").on("click", function() {
                            return showPage(currentPage - 1);
                        });
                        $(".pagination").on("click", function() {
                            $("html,body").animate({ scrollTop: 0 }, 0);
                        });
                });
            }else{  
                $('#paginacion').html('');
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


$('#slaider2').on('click','#buscarSlider',function(){
 
    var tbl         = $(this).data('product_code');
    var elegido     = $(this).data('product_code1');
    var nombre      = $(this).data('product_code2');
    
    $.confirm({
        title: 'Buscar!',
        content: 'Deseas buscar esta promocion?',
        buttons: {
                SI: {
                    btnClass: 'btn btn-outline-success',
                    action: function () {
                        if(tbl == 1){
                            $("#busquedaGeneral").val('');  
                            $(".categoriasF").prop("checked",false);  
                            $('[name=categoriasF'+elegido+']').prop("checked",true   );
                            todoArticulos();
                          
                        }else{
                    
                            $(".categoriasF").prop("checked",false); 
                            $("#busquedaGeneral").val(nombre);  
                            todoArticulos();
                        }
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

$('#quitarfiltro').click(function(){

    $.confirm({
        title: 'Quitar filtro!',
        content: 'Deseas Quitar el filtro?',
        buttons: {
                SI: {
                    btnClass: 'btn btn-outline-success',
                    action: function () {
                     
                        $("#busquedaGeneral").val('');  
                        $(".categoriasF").prop("checked",false);  
                        todoArticulos();
                       
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

$('#btnBusquedaGeneral').click(function(){
    todoArticulos();
});

$('#busquedaGeneral').on('keypress',function(e) {
    if(e.which == 13) {
        todoArticulos();
    }
});

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

    $.confirm({
        title: 'Mensaje!',
        content: 'Deseas agrega al carro de compra <strong>'+nombre+'</strong>!',
        buttons: {
            SI: {
                btnClass: 'btn btn-outline-success',
                action: function () {
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

//ABRIR MODAL DE FILTROS
$('.flotante2').on('click',function(){

    $('#modalFiltro').appendTo("body").modal('show');

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
                            $("#verModalCarrito").modal('hide');//ocultamos el modal
                            $('#ModalPago').appendTo("body").modal('show');
                            $('#verapayco').html(`	<button type="button" class="btn btn-success" id="btnGuardarVenta">Guardar</button>`);
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


//COMPRAR
$('#ModalPago').on('click','#btnGuardarVenta',function() {
//$('#btnGuardarVenta').on('click',function(){

    var formapago = $('[name="formapago"] option:selected').val();
    var direccion = $('[name="direccion"]').val();
    var telefono  = $('[name="telefono"]').val();
  
    if(formapago == null){
        alertify.error('Seleccione un tipo de pago');
        return false;
    }

    if(direccion == ''){
        alertify.error('llene el campo de direccion');
        return false;
    }

    if(telefono == ''){
        alertify.error('llene el campo de telefono');
        return false;
    }


    var formData = new FormData();
    formData.append('formapago',formapago );
    formData.append('direccion',direccion );
    formData.append('telefono',telefono );
    

    if(formapago == 1){

        $.ajax({
            type : "POST",
            url  :  urlSite+'/clientes/ControladorVenta/guardar' ,
            dataType : "JSON",
            data : formData,
            contentType: false,
            processData: false,
            success: function(data){
                verUndCarrito();
                //todoArticulos();
                //$('#verModalCarrito').modal('hide');
            }
        });
    }
    else if(formapago == 2){

        $.ajax({
            type : "POST",
            url  :  urlSite+'/clientes/ControladorVenta/guardar' ,
            dataType : "JSON",
            data : formData,
            contentType: false,
            processData: false,
            success: function(data){
                verUndCarrito();
                //todoArticulos();
                //$('#verModalCarrito').modal('hide');
            }
        });

        var epayco =` <form>
                        <script
                            src="https://checkout.epayco.co/checkout.js"
                            class="epayco-button"
                            data-epayco-key="491d6a0b6e992cf924edd8d3d088aff1"
                            data-epayco-amount="50000"
                            data-epayco-name="Vestido Mujer Primavera"
                            data-epayco-description="Vestido Mujer Primavera"
                            data-epayco-currency="cop"
                            data-epayco-country="co"
                            data-epayco-test="true"
                            data-epayco-external="false"
                            data-epayco-response="https://ejemplo.com/respuesta.html"
                            data-epayco-confirmation="https://ejemplo.com/confirmacion">
                        </script>
                    </form>`;


        $('#verapayco').html(epayco);


    }
});



$('.verSliderClick1').click(function(){

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

$('.verSliderClick2').click(function(){

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

$('.verSliderClick3').click(function(){

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

