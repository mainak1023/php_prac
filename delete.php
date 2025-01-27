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

// Check if 'id' is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record with the specified id
    $sql = "DELETE FROM `login` WHERE `id` = '$id'";
    $result = $con->query($sql);

    if ($result) {
        echo "Record deleted successfully.";
        header("Location: signin.php"); // Redirect back to the sign-in page after deletion
        exit;
    } else {
        echo "Error deleting record: " . $con->error;
    }
} else {
    echo "No record specified for deletion.";
}

$con->close();
?>
