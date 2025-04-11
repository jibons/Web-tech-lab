<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculator</h1>
    
    <!-- Two input fields for numbers -->
    <input type="number" id="input1" placeholder="Enter first number">
    <input type="number" id="input2" placeholder="Enter second number">
    
    <!-- Dropdown menu for selecting the operation -->
    <select id="operation">
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
        <option value="%">Modulus (mod)</option>
        <option value="^">Power (^)</option>
    </select>
    
    <!-- Button that triggers the calculation -->
    <button onclick="calculate()">Calculate</button>
    
    <!-- Paragraph to display the result -->
    <p id="result"></p>
    
    <!-- Link to the external JavaScript file -->
    <script src="calculator.js"></script>
</body>
</html>
