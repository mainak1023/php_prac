<?php
function isPrime($number) {
    if ($number <= 1) return false;
    if ($number <= 3) return true;

    if ($number % 2 == 0 || $number % 3 == 0) return false;

    $i = 5;
    while ($i * $i <= $number) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) return false;
        $i += 6;
    }

    return true;
}

$result = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = intval($_POST['number']);
    $result = isPrime($number) ? "Yes" : "No";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        h1 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 1rem;
            margin-bottom: 8px;
            color: #555;
        }
        input {
            width: 80%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            font-size: 1.2rem;
            margin-top: 20px;
            color: #444;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Prime Number Checker</h1>
        <form method="post">
            <label for="number">Enter a number:</label>
            <input type="number" id="number" name="number" required>
            <button type="submit">Check</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
            <div class="result">
                <strong><?php echo htmlspecialchars($number); ?></strong> is <strong><?php echo htmlspecialchars($result); ?></strong> a prime number.
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
