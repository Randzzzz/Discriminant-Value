<?php
if (isset($_POST['getResult'])) {

    $num1 = $_POST['a'];
    $num2 = $_POST['b'];
    $num3 = $_POST['c'];

    $x = $num2 * $num2;
    $y = -4 * $num1 * $num3;
    $result = $x + $y;

    echo "<h2>The result is " . $result . "</h2>";
}
?>