<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Form</title>
</head>
<body>

<form action="check.php" method= "POST">
    
    <h2>Calculator Form</h2>
    <form id="calculatorForm">
        <label for="firstOperand">First Operand:</label><br>
        <input type="number" id="firstOperand" name="firstOperand" value="5" required><br><br>
        
        <label for="secondOperand">Second Operand:</label><br>
        <input type="number" id="secondOperand" name="secondOperand" value="7" required><br><br>
        
        <label for="operation">Operation to be Performed:</label><br>
        <input type="text" id="operation" name="operation" value="+" required><br><br>

        <button type="submit">Calculate</button>
    </form>

    <div id="result"></div>
