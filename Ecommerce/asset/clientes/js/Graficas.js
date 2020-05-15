//function Graficas(id) {
//    switch (id) {
//        case 1:
//            $("#grafica2").css("display", "none");
//            $.ajax({
//                url: "/Administrator/GetVisitas",
//                type: "Post",
//                data: {

//                },
//                success: function (data) {
//                    var nomusu = [], ingresos = [];
//                    for (var i = 0; i < data.data.length; i++) {
//                        nomusu.push(data.data[i].nomusu);
//                        ingresos.push(data.data[i].ingresos);
//                    }
                    
//                    GraficoBar(nomusu, ingresos);
//                }
//            });
//            break;
//        case 2:
//            $.ajax({
//                url: "/Administrator/Get_EstPedidosCantidadxMes",
//                type: "Post",
//                data: {
//                    fecini: $("#dateIni").val(),
//                    fecfin: $("#dateFin").val(),
//                    tipo: "APR"
//                },
//                success: function (data) {
//                    var mes = [], canped = [];
//                    for (var i = 0; i < data.data.length; i++) {
//                        mes.push(data.data[i].mestext);
//                        canped.push(data.data[i].canped);
//                    }
//                    GraficoBar(mes, canped);
//                }
//            });
//            break;
//    }
    
//}

//function GraficoBar(nomusu, ingresos) {
//    $("#myfirstchart").empty();
//    new Morris.Bar({
//        barSizeRatio: 0.09,
//        // ID of the element in which to draw the chart.
//        element: 'myfirstchart',
//        // Chart data records -- each entry in this array corresponds to a point on
//        // the chart.
//        data: [
//            { Nomusu: nomusu, Ingresos: parseInt(ingresos) },
//            //{ year: '2009', value: 10 },
//            //{ year: '2010', value: 5 },
//            //{ year: '2011', value: 5 },
//            //{ year: '2012', value: 20 }
//        ],
//        // The name of the data record attribute that contains x-values.
//        xkey: 'Nomusu',
//        // A list of names of data record attributes that contain y-values.
//        ykeys: ['Ingresos'],
//        // Labels for the ykeys -- will be displayed when you hover over the
//        // chart.
//        labels: ['Ingresos']
//    });
//}

//function ShowElem() {
//    $("#grafica2").css("display", "flex");
//    $("#myfirstchart").empty();
//}