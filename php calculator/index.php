<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <form method="post" action="">
            <input type="text" name="display" id="display" value="<?php echo isset($_POST['display']) ? htmlspecialchars($_POST['display']) : ''; ?>" readonly>
            <div class="buttons">
                <input type="button" value="1" onclick="appendToDisplay('1')">
                <input type="button" value="2" onclick="appendToDisplay('2')">
                <input type="button" value="3" onclick="appendToDisplay('3')">
                <input type="button" value="+" onclick="appendToDisplay('+')">
                <input type="button" value="4" onclick="appendToDisplay('4')">
                <input type="button" value="5" onclick="appendToDisplay('5')">
                <input type="button" value="6" onclick="appendToDisplay('6')">
                <input type="button" value="-" onclick="appendToDisplay('-')">
                <input type="button" value="7" onclick="appendToDisplay('7')">
                <input type="button" value="8" onclick="appendToDisplay('8')">
                <input type="button" value="9" onclick="appendToDisplay('9')">
                <input type="button" value="*" onclick="appendToDisplay('*')">
                <input type="button" value="0" onclick="appendToDisplay('0')">
                <input type="button" value="/" onclick="appendToDisplay('/')">
                <input type="button" value="C" onclick="clearDisplay()">
                <input type="submit" value="=" name="calculate">
            </div>
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            $expression = $_POST['display'];
            $result = eval('return ' . $expression . ';');
            echo '<div class="result">Result: ' . htmlspecialchars($result) . '</div>';
        }
        ?>
    </div>

    <script>
        function appendToDisplay(value) {
            document.getElementById('display').value += value;
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }
    </script>
</body>
</html>
