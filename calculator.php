<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>

    <!-- Form for Input -->
    <form method="GET">
        <label for="num1">Enter a number: </label>
        <input type="number" id="num1" name="num1" required>

        <br><br>

        <label for="num2">Enter another number: </label>
        <input type="number" id="num2" name="num2" required>

        <br><br>

        <input type="submit" name="add" value="Add">
        <input type="submit" name="subtract" value="Subtract">
        <input type="submit" name="multiply" value="Multiply">
        <input type="submit" name="divide" value="Divide">
    </form>

    <?php
       
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];

            // Addition function
            function add($a, $b) {
                return $a + $b;
            }

            // Subtraction function
            function subtract($a, $b) {
                return $a - $b;
            }

            function multiply($a, $b) {
                return $a * $b;
            }

            function divide($a, $b) {
                return $a / $b;
            }
            
            if (isset($_GET['add'])) {
                echo "<h3>Result: " . add($num1, $num2) . "</h3>";
            } elseif (isset($_GET['subtract'])) {
                echo "<h3>Result: " . subtract($num1, $num2) . "</h3>";
            } elseif (isset($_GET['multiply'])) {
                echo "<h3>Result: " . multiply($num1, $num2) . "</h3>";
            } elseif (isset($_GET['divide'])) {
                echo "<h3>Result: " . divide($num1, $num2) . "</h3>";
            }
    ?>
</body>
</html>