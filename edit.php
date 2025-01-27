<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create a connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$id = "";
$row = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record with matching id
    $sql = "SELECT * FROM `login` WHERE `id` = '$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($id)) {
    $pass = $_POST['pass'];

    // Update the password for the specified id
    $sql2 = "UPDATE `login` SET `password` = '$pass' WHERE `id` = '$id'";
    $result2 = $con->query($sql2);

    if ($result2) {
        echo "Update successful";
        header("Location: signin.php");
    } else {
        echo "Update failed";
    }
}

$con->close();
?>

<!doctype html>
<html>
<head>
</head>
<body>
    <form action="edit.php?id=<?php echo htmlspecialchars($id); ?>" method="POST">
        <label for="Password">Password</label>
        <input type="text" name="pass" >

        <button type="submit">Submit</button>
    </form>
</body>
</html>
