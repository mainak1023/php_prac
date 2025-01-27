<?php include("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table - 1</title>
</head>
<body>
    <form method="$_POST" action="">
        <table>
            <tr align="left">
                <th>Description</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>Number of mangoes</td>
                <td><input type="text" name="mangoes" size="2"></td>
            </tr>

            <tr>
                <td>Number of apples</td>
                <td><input type="text" name="apples" size="2"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="submit information" id="">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["submit"]))
    {
        $mangoes = $_POST["mangoes"];
        $apples = $_POST["apples"];
        $query = "INSERT INTO task1 (mangoes, apples) VALUES ('$mangoes' , '$apples')";
        $data = (mysqli_query($conn, $query));
        if($data){
            echo "<script>
                alert('Data successfully inserted!');
                window.location.href = 'table.php';
            </script>";
            } 
        else{
            echo "<script>
                    alert('Data is not inserted!'):
                    window.location.href = 'table.php';
                    </script>";
        }
    }