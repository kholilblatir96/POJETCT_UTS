<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        </div>
    </div>
</body>
</html>