function appendValue(value) {
    document.getElementById('display').value += value;
}

function clearDisplay() {
    document.getElementById('display').value = '';
}

function calculateResult() {
    const expression = document.getElementById('display').value;

    // Use AJAX to send the data to the PHP server and get the result
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '', true); // Send data to the current PHP file
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function ()