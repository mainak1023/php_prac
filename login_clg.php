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

        $sql="SELECT * FROM `login`";
        $result=mysqli_query($con, $sql);
        $num=mysqli_num_rows($result);
        $success=0;
        if($num>0){
            while($row=mysqli_fetch_assoc($result)){
                if($row['email'] == $email && $row['password']==$pass){
                    $success=1;
                    break;
                }
            }
            if($success==1){
                echo "login Successfully";
            }else{
                echo "login Unsuccessful<br>";
                echo 'please <a href="signin.php"> sign in </a';
            }
        }
    }
 ?>
</body>
</html>