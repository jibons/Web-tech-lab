<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
 
</head>
<body>
    <h2>Simple Calculator</h2>
    <input type="number" id="num1" placeholder="Enter first number">
    <input type="number" id="num2" placeholder="Enter second number">

    <select id="operation">
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
        <option value="%">Modulus (mod)</option>
        <option value="^">Power (^)</option>
    </select>

    <button onclick="calculate()">Calculate</button>

    <p id="result"></p>

   
</body>
</html>
