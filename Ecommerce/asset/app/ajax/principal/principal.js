$(document).ready(function(){

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
 
