$(document).ready(function(){

    $.ajax({
        type : "POST",
        url  : urlArticulosTabla,
        dataType : "JSON",
        data : {},
        success: function(data){
            
            for(var i = 0; i < data.length; i++){
                $('<div class="col-md-4">' +
                    '<div class="intro-item" style="cursor: pointer" data-toggle="modal" data-target="#ProductView">' +
                        '<center>' +
                            '<figure>' +
                                '<img src="' + data[i].imageurl + '" alt="#" width="200" height="200" class="border_radius">' +
                            '</figure>' +
                            '<div class="product-info">' +
                                '<h5>' + data[i].nomart + '</h5>' +
                                '<p class="art_descrip">' + data[i].descripción + '</p>' +
                                '<p class="art_descrip">$' + data[i].valart + '</p>' +
                            '</div>' + 
                        '</center>' +
                    '</div>' +
                '</div>').appendTo("#products_array");
            }
        }    
    });
});