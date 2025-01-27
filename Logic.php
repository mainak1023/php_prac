<?php
    if($_POST['id'] == "mainak"){
        if($_POST['password'] == "1234"){
            echo "Login Success";
        }
        else{
            echo "Invalid Password";
        }
    }
    else{
        echo "Invalid User ID";
    }
    ?>