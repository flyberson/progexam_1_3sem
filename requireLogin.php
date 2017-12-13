<?php
/**
 * Created by PhpStorm.
 * User: flyberson_2
 * Date: 10-11-17
 * Time: 4:38 PM
 */

    if(isset($_SESSION['user']) && $_SESSION['user'] != "")
    {
        //Task to do
    }

    else{
        header("Location:http://localhost/PhpstormProjects/progexam_1_3sem/login.php");
        exit;
    }

