<?php
function isPalindrome($number) {
    $str = (string)$number;
    return $str === strrev($str);
}

$result = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = intval($_POST['number']);
    $result = isPalindrome($number) ? "Yes" : "No";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Number Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 500px;
        }
        h1 {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #4CAF50;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input {
            width: 80%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Palindrome Number Checker</h1>
        <form method="post">
            <label for="number">Enter a number:</label>
            <input type="number" id="number" name="number" required>
            <button type="submit">Check</button>
        </form>
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
            <div class="result">
                The number <?php echo htmlspecialchars($number); ?> is <?php echo htmlspecialchars($result); ?> a palindrome.
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
