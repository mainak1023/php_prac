<?php
    include "conn.php";

    //create a db

    $sql = "CREATE DATABASE practice";
    mysqli_query($conn, $sql);

?>
