function getpoke(){
    $('#table1 tr').each(function() {
        var userinput = $(this).find("td").eq(0).html();
    });

}
$(document).ready(function() {
    $('#table1').DataTable();
} );