<?php 
    echo "this is my first php page"."</br>";
    $var1 = "Mainak";
    $var2 = 16;
    $var3 = 69.69;
    echo $var1."</br>";
    echo $var2."</br>";
    echo $var3."</br>";

    //local variable
    function marks(){
        $marks = 90;
        echo "Local variable inside the function is : ".$marks;
    }
    marks();
    ?>