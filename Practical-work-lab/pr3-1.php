<?php
if (isset($_POST['calculate'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            if ($b == 0) {
                $result = "Cannot divide by zero";
            } else {
                $result = $a / $b;
            }
            break;
        default:
            $result = "Invalid operator";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
</head>

<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        <input type="aber" name="a" placeholder="Enter first aber" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="aber" name="b" placeholder="Enter second aber" required>
        <input type="submit" name="calculate" value="Calculate">
    </form>
    <?php if (isset($_POST['calculate'])): ?>
        <h4>Result:
            <?php echo $result; ?>
        </h4>
    <?php endif; ?>
</body>

</html>