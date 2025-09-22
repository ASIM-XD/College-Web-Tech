<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <table>
            <tr>
                <td><a href="./profile.html">Home</a></td>
                <td><a href="./about.html">About</a></td>
                <td><a href="./skills.html">Skills</a></td>
                <td><a href="./project.html">Projects</a></td>
                <td><a href="./login.html">Login</a></td>
                <td><a href="./register.html">Register</a></td>
                <td><a href="./review.html">Review</a></td>
                <td><a href="./MulPage.html">Multiplication</a></td>
                <td><a href="./SimpleInt.html">Simple Interest</a></td>
                <td><a href="./Arith.php" style="color: crimson;">Arithmetic Operations</a></td>
            </tr>
        </table>
    </nav>

    <h2>Arithmetic Operations</h2>

    <form method="get">
        <div class="inputs">
            <label for="num1">Number 1 : </label>
            <input id="num1" type="number" name="num1" required>
            <br><br>

            <label for="num2">Number 2 : </label>
            <input id="num2" type="number" name="num2" required>
            <br><br>

            <label for="operation">Operation : </label>
            <select name="operation" id="operation">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="mul">*</option>
            </select>
            <br><br>

            <input class="submit-btn" type="submit" value="Calculate (GET)">
            <input class="clear-btn" type="reset" value="Reset">
        </div>
    </form>

    <form method="post">
        <div class="inputs">
            <label for="num1p">Number 1 : </label>
            <input id="num1p" type="number" name="num1" required>
            <br><br>

            <label for="num2p">Number 2 : </label>
            <input id="num2p" type="number" name="num2" required>
            <br><br>

            <label for="operationp">Operation : </label>
            <select name="operation" id="operationp">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="mul">*</option>
            </select>
            <br><br>

            <input class="submit-btn" type="submit" value="Calculate (POST)">
            <input class="clear-btn" type="reset" value="Reset">
        </div>
    </form>

    <?php
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["num1"])) {
        $a = $_GET["num1"];
        $b = $_GET["num2"];
        $op = $_GET["operation"];

        if ($op == "add") $result = $a + $b;
        if ($op == "sub") $result = $a - $b;
        if ($op == "mul") $result = $a * $b;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num1"])) {
        $a = $_POST["num1"];
        $b = $_POST["num2"];
        $op = $_POST["operation"];

        if ($op == "add") $result = $a + $b;
        if ($op == "sub") $result = $a - $b;
        if ($op == "mul") $result = $a * $b;
    }

    if ($result !== "") {
        echo "<h3 style=\"text-align: center;background: #ccc;width: fit-content;
        margin: 0 auto;padding: 5px;margin-bottom: 10px;\">Result: $result</h3>";
    }
    ?>
</body>
</html>
