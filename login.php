<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>
<form method="post" id="formlogin">
    <p>Username</p>
    <input id="username" type="text" name="username">
    <p>Password</p>
    <input id="password" type="password" name="password">
    <p>Submit</p>
    <input type="submit">

    <?php

if (isset($_POST['username'])&&isset($_POST['password'])) {
    $startusername = $_POST['username'];
    $startpassword = $_POST['password'];
    include 'databaseconnection.php';

    $sql = "select * from pusers where username ='".$startusername."'";
    $result = $conn->query($sql);
    if ($result!= false) {
        $row = mysqli_fetch_assoc($result);

        $first = $row['username'];
        $second = $row['password'];
    $_SESSION["user"]=$first;
    $_SESSION["password"]=$second;

      header("Location:http://localhost/PhpstormProjects/progexam_1_3sem/index.php");
    }}
    ?>