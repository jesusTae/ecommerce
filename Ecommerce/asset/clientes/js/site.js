function AddToCart(codart, url) {
    var cart_bag = readCookie("idcode");
    $.ajax({
        url: url,
        type: "Post",
        data: {
            id: cart_bag,
            codart: codart
        },
        success: function (data) {
            if (data.message) {
                Swal.fire(
                    'Error',
                    data.message,
                    'error'
                );
            } else {
                $("#NewGuid").val(data.id);
                if (document.cookie.length == 0 || document.cookie != "idcode=" + data.id) {
                    document.cookie = "idcode=" + encodeURIComponent(data.id) + "; path=/";
                }
                var cantidad_articulos = parseInt($("#Cart_Count").html()) + parseInt(1);
                $("#Cart_Count").html(cantidad_articulos);
                document.cookie = "cart_count=" + encodeURIComponent(cantidad_articulos) + "; path=/";
            }
        }
    });
}

function readCookie(name) {
    return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + name.replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
}

function SendToCart(id) {
    $.redirect('/Carrito/Index',
        {
            id: id
        });
    if (id != null) {
        $('#Cart_Products').append(data);
    }
}

function PayU() {

    //$.redirect('https://sandbox.api.payulatam.com/payments-api/4.0/service.cgi',
    //{
    //    "test": false,
    //    "language": "en",
    //    "command": "PING",
    //    "language": "es",
    //    "command": "GET_BANKS_LIST",
    //    "merchant": {
    //        "apiLogin": "40d6rO5gf5f1WhW",
    //        "apiKey": "9C4l9jc1RLisKnE7RskM7Rr9FH"
    //    },
    //    "test": false,
    //    "bankListInformation": {
    //        "paymentMethod": "PSE",
    //        "paymentCountry": "CO"
    //    }
    //});

    $.ajax({
        url: "https://sandbox.api.payulatam.com/payments-api/4.0/service.cgi",
        type: "Post",
        contentType: 'application/json; charset=utf-8',
        data: {
            "test": false,
            "language": "en",
            "command": "PING",
            "merchant": {
                "apiLogin": "40d6rO5gf5f1WhW",
                "apiKey": "9C4l9jc1RLisKnE7RskM7Rr9FH"
            }
        },
        success: function (data) {
            console.log(data);
        }
    });
}

function MujerView(codgru) {
    $.redirect('/Explorar/Explorar',
        {
            codgru: codgru,
            view: 'Mujer',
            cantidad: 100
        });
}

function CrearBotonPayu(montoPago, id) {
    if (montoPago > 0) {
        $.ajax({
            dataType: "json",
            method: "GET",
            url: "/Carrito/obtenerInfoPago",
            data: {
                "MontoPago": montoPago,
                "email": $("#email").val(),
                "id": id
            }
        }).done(function (infopago) {
            var url = window.location.hostname;
            var port = window.location.port;
            var protocol = window.location.protocol;

            var html_button = "<form method='post' id='myForm' action='https://sandbox.gateway.payulatam.com/ppp-web-gateway/'>\
              <input name='merchantId'    type='hidden'  value='"+ infopago.merchantId + "'   >\
              <input name='accountId'     type='hidden'  value='"+ infopago.accountId + "'   >\
              <input name='description'   type='hidden'  value='"+ infopago.description + "'   >\
              <input name='referenceCode' id='referenceCode' type='hidden'  value='"+ infopago.referenceCode + "'   >\
              <input name='amount'        type='hidden'  value='"+ infopago.amount + "'   >\
              <input name='tax'           type='hidden'  value='"+ infopago.tax + "'   >\
              <input name='taxReturnBase' type='hidden'  value='"+ infopago.taxReturnBase + "'   >\
              <input name='currency'      type='hidden'  value='"+ infopago.currency + "'   >\
              <input name='signature'     type='hidden'  value='"+ infopago.signature + "'   >\
              <input name='test'          type='hidden'  value='"+ infopago.test + "'   >\
              <input name='buyerEmail'    type='hidden'  value='"+ infopago.buyerEmail + "'   >\
              <input name='id'    type='hidden'  value='"+ infopago.id + "'   >\
              <input name='responseUrl'    type='hidden'  value='" + protocol + '//' + url + ':' + port + '/Carrito/Success' + "'   >\
              <input name='confirmationUrl'    type='hidden' value='" + protocol + '//' + url + ':' + port + '/Carrito/Success' + "'   >\
            </form>";

            $("#idPayuButtonContainer").append(html_button);
            document.getElementById("myForm").submit();
        });
    }
}

function QuickView(name, cost, descrip, image, codart, stock) {
    $(".modal-title").html(name);
    $("#ModalImage").attr("src", "../img/" + image);
    $("#ModalDescription").html(descrip);
    $("#ModalPrice").html(cost);
    $("#ModalStock").html('Stock: '+ stock);
    $("#codart").val(codart);
    $("#ProductView").modal()
}

function EliminarProducto(id, codart, price) {
    $.ajax({
        url: 'EliminarProducto',
        type: "Post",
        data: {
            id: id,
            codart: codart
        },
        success: function (data) {
            if (data.message) {
                Swal.fire(
                    'Error',
                    data.message,
                    'error'
                );
            } else {
                var bag_count = readCookie("cart_count");
                var delete_count = $("#Cantidad_" + codart + id).html();
                var new_bagCount = parseInt(bag_count) - parseInt(delete_count);
                document.cookie = "cart_count=" + encodeURIComponent(new_bagCount) + "; path=/";
                $("#Cart_Count").html(new_bagCount);
                $("#Product_" + codart + id).remove();
                var subtotal = parseInt(parseInt($("#Subtotal_Compra").html()) - parseInt(price));
                $("#Subtotal_Compra").html(subtotal);
                $("#Total_Compra").html(parseInt(subtotal) + parseInt(0));
                if ($("#Total_Compra").html() <= 0) {
                    $("#idPayuButtonContainer").css("display", "none");
                }
            }
        }
    });
}

function ReservarConsecutivo() {
    if ($("#email").val() == null || $("#email").val() == "") {
        Swal.fire(
            'Error',
            "Debe iniciar session antes de realizar la compra",
            'error'
        );
        window.location.href = "/Login/Login";
    } else {
        $.ajax({
            url: "/Carrito/ReservarConsecutivo",
            type: "Post",
            data: {
                id: $("#id").val(),
                email: $("#email").val(),
                amount: $("#Total_Compra").html()
                
            },
            success: function (data) {
                if (data.success == true) {
                    document.cookie = "cart_count=; expires=@DateTime.Now; path=/;";
                    document.cookie = "idcode=; expires=@DateTime.Now; path=/;";
                    //$("#referenceCode").val(data.message);
                    //CrearBotonPayu($("#Total_Compra").html(), $("#id").val());
                    Swal.fire(
                        'Success',
                        "Se realizó el pedido satisfactoriamente",
                        'success'
                    );
                    window.location.href = "/";
                } else {
                    Swal.fire(
                        'Error',
                        data.message,
                        'error'
                    );
                }
            }
        });
    }
}
