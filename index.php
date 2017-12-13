<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'requireLogin.php';
?>
<html>
<header><title>This is title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="ext/js/api.js"></script>

    <body>
    <button id="bt1" onclick="getpoke()">Click here</button>
    <h1>Index</h1>

    <?php

    include 'databaseconnection.php';

    $sql = "SELECT * FROM Orders";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row

    ?>
<h1>hello</h1>
    <table id='table1' class='table table-striped table-hover table-bordered' width="100%" cellspacing="">
        <thead>
        <tr>

            <td>
                Ordernr
            </td>
            <td>
                Agentnr
            </td>
            <td>Orderamount</td>
            <td>dato</td>
        </tr></thead>
        <tbody>
        <?php

        while ($row = $result->fetch_assoc()) {




            echo "<tr>";
            echo "<td>";
            echo $row["ORD_ID"];

            echo "</td>";

            echo "<td>";
            echo $row["AGENT_ID"];
            echo "</td>";

            echo "<td>";
            echo $row["ORD_AMOUNT"];
            echo "</td>";


            echo "<td>";
            echo $row["ORD_DATE"];
            echo "</td>";

            echo "<td>";
          
            echo "</td>";
            echo "</tr>";


        }



        }
        ?>
        </tbody>
    </table>


    <script>$('#table1').DataTable();</script>

    </body>
</html>