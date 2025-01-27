<!doctype html>
<html>
    <head>
</head>
<body>
    <form action="" method="POST">
        <label for="email">email</label>
        <input type="text" name="email"> <br>

        <label for="Password">password</label>
        <input type="Password" name="pass">

        <button type="submit"> Submit </button>
</form>
 <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="users";

    $con=new mysqli($servername,$username,$password,$dbname);
    if(!$con){
        die("connection faild". mysqli_connect_error());
    }
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $sql="INSERT INTO `login`(`email`, `password`) VALUES ('$email','$pass')";
        $result=mysqli_query($con, $sql);
        if($result){
            echo "insert successfully";
        }
    }
    ?>

    <table border='1' cellpadding='2'>
        <tr> 
            <th>Email</th> 
            <th>Password</th> 
            <th>Edit</th> 
            <th>Delete</th>
        </tr>

    <?php
    $sql2="SELECT * FROM `login`";
    $result2=mysqli_query($con,$sql2);
    $num2=mysqli_num_rows($result2);

    if($num2>0){
        while($row2=mysqli_fetch_assoc($result2)){
            ?>
            <tr>
                <td> <?php echo $row2['email'] ?> </td>
                <td> <?php echo $row2['password'] ?> </td>
                <td> <a href="edit.php?id=<?php echo $row2['id'] ?>"> Edit </a> </td>
                <td> <a href="delete.php?id=<?php echo $row2['id'] ?>"> Delete </a> </td>
            </tr>
            <?php
        
        }
    }
 ?>
  </table>
</body>
</html>