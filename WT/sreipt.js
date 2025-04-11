function calculate() {
    // Retrieve input values and convert them to floating-point numbers
    const num1 = parseFloat(document.getElementById("input1").value);
    const num2 = parseFloat(document.getElementById("input2").value);
    const operation = document.getElementById("operation").value;
    let output;
    
    // Determine which operation to perform based on the dropdown selection
    switch (operation) {
        case "+":
            output = num1 + num2;
            break;
        case "-":
            output = num1 - num2;
            break;
        case "*":
            output = num1 * num2;
            break;
        case "/":
            // Check for division by zero
            output = (num2 !== 0) ? num1 / num2 : "Error: Division by zero";
            break;
        case "%":
            output = num1 % num2;
            break;
        case "^":
            output = Math.pow(num1, num2);
            break;
        default:
            output = "Invalid operation";
    }
    
    // Display the result by updating the innerHTML of the result paragraph
    document.getElementById("result").innerHTML = "Result: " + output;
}
