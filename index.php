<?php
if (isset($_POST['submit'])) {
    $input = $_POST['input'];
    $result = evaluateExpression($input);
}

function evaluateExpression($expression) {
    // Menangani perhitungan dengan eval
    try {
        return eval("return $expression;");
    } catch (Exception $e) {
        return 'Error';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kalkulator</title>
</head>
<body>
    <div class="container">
    <h1>Kalkulator Sederhana</h1>
        <input type="text" id="display" class="display" value="" disabled>
        <div class="buttons">
                <button type="button" class="btn" onclick="appendValue('1')">1</button>
                <button type="button" class="btn" onclick="appendValue('2')">2</button>
                <button type="button" class="btn" onclick="appendValue('3')">3</button>
                <button type="button" class="btn" onclick="appendValue('+')">+</button>
                
                <button type="button" class="btn" onclick="appendValue('4')">4</button>
                <button type="button" class="btn" onclick="appendValue('5')">5</button>
                <button type="button" class="btn" onclick="appendValue('6')">6</button>
                <button type="button" class="btn" onclick="appendValue('-')">-</button>

                <button type="button" class="btn" onclick="appendValue('7')">7</button>
                <button type="button" class="btn" onclick="appendValue('8')">8</button>
                <button type="button" class="btn" onclick="appendValue('9')">9</button>
                <button type="button" class="btn" onclick="appendValue('*')">*</button>

                <button type="button" class="btn" onclick="appendValue('0')">0</button>
                <button type="button" class="btn" onclick="appendValue('.')">.</button>
                <button type="button" class="btn" onclick="clearDisplay()">C</button>
                <button type="button" class="btn" onclick="appendValue('/')">/</button>

                <button type="submit" class="btn" name="submit">=</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>