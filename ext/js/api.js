$(document).ready(function () {

    $("#bt1").click(function () {

        getpoke();
    });

})

function getpoke(){

    var Json= "http://localhost/PhpstormProjects/progexam_1_3sem/api.php/Orders";

    $.getJSON(Json,function (data) {
        for (var i = 0; i < data.length; i++) {
            var obj = data[i].ORD_ID;
            var amount = data[i].ORD_AMOUNT;
            $("#orderlist").append("orderid=" + obj+"  OrderAmount="+amount+"\n");
        }
    });


}