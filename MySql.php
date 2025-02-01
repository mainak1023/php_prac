<?php
    echo "welcome to the stage where we are ready to get connected to a database! <br>";
    
    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";

    //create a connection
    $conn = mysqli_connect($servername, $username, $password);

    //Die if connection is not successful
    if (!$conn){
        die("sorry, connection failed: " .mysqli_connect_error());
    }
    else{
    echo "connection is successful!";
    }
?>