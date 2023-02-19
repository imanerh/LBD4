<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>TP3</title>
</head>
<body>

    <h3>Calculatrice</h3>
    <form method="post">
        <input type="text" name="op1"><br>
        <input type="radio" name="operation" id="+" value="+">
        <label for="+">+</label><br>
        <input type="radio" name="operation" id="-" value="-">
        <label for="-">-</label><br>
        <input type="radio" name="operation" id="x" value="x">
        <label for="x">x</label><br>
        <input type="radio" name="operation" id="/" value="/">
        <label for="/">/</label><br>
        <input type="text" name="op2"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form> 

    <?php 

        if (in_array("op1", array_keys($_POST)) & in_array("op2", array_keys($_POST)) & in_array("operation", array_keys($_POST))) {
            $x = $_POST["op1"];
            $y = $_POST["op2"];
            $operation = $_POST["operation"];
            echo "<br><b>Result:</b> $x $operation $y = ";
            if ($operation == "+") {
                echo $x + $y;
            } 
            else if ($operation == "x") {
                echo $x * $y;
            } 
            else if ($operation == "-") {
                echo $x - $y;
            } 
            else if ($operation == "/") {
                echo $x / $y;
            } 
        }
    
    ?>

</body>
</html>