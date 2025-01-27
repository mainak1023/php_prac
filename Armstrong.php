<?php
function isArmstrong($number) {
    $sum = 0;
    $digits = strlen((string)$number);
    $temp = $number;
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $digits);
        $temp = (int)($temp / 10);
    }
    
    return $sum === $number;
}

$result = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = intval($_POST['number']);
    $result = isArmstrong($number) ? "Yes" : "No";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Checker</title>
</head>
<body style="margin: 0; font-family: Arial, sans-serif; background-color: #f9f9f9; display: flex; justify-content: center; align-items: center; height: 100vh;">

    <div style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 400px; text-align: center;">
        <h1 style="color: #333; margin-bottom: 20px;">Armstrong Number Checker</h1>
        <form method="post" style="margin-bottom: 20px;">
            <div style="margin-bottom: 10px;">
                <label for="number" style="font-size: 16px; color: #555;">Enter a number:</label>
            </div>
            <input type="number" id="number" name="number" required 
                style="padding: 10px; width: calc(80% - 20px); border: 1px solid #ccc; border-radius: 5px; margin-bottom: 15px;">
            <button type="submit" 
                    style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
                Check
            </button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
            <h2 style="color: #333;">Result</h2>
            <p style="font-size: 16px; color: #555;">
                The number <strong><?php echo htmlspecialchars($number); ?></strong> is 
                <strong><?php echo htmlspecialchars($result); ?></strong> an Armstrong number.
            </p>
        <?php endif; ?>
    </div>

</body>
</html>
