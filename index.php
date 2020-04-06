<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <h3>Simple Calculator</h3>
    <fieldset>
        <legend>Calculator</legend>
        <table>
            <tr>
                <label>
                    <td>First Operand:</td>
                    <td><input type="text" name="firstOperand"></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>Operator:</td>
                    <td><select name="operator">
                            <option>Addition</option>
                            <option>Subtraction</option>
                            <option>Multiplication</option>
                            <option>Division</option>
                        </select></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>Second Operand:</td>
                    <td><input type="text" name="secondOperand"></td>
                </label>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Calculate"></td>
            </tr>
        </table>
    </fieldset>
</form>
<hr>
<?php
$isFirstOperand = $_GET['firstOperand'];
$isSecondOperand = $_GET['secondOperand'];
$isOperator = $_GET['operator'];
echo '<b>Result: </b>';
include 'function.php';
$calculator = new Calculator();
switch ($isOperator) {
    case 'Addition':
        try {
            echo $calculator->addition($isFirstOperand, $isSecondOperand);
        } catch (Exception $exception) {
            echo $exception ->getMessage();
        }
        break;
    case 'Subtraction':
        try {
            echo $calculator->subtraction($isFirstOperand, $isSecondOperand);
        } catch (Exception $exception) {
            echo $exception ->getMessage();
        }
        break;
    case 'Multiplication':
        try {
            echo $calculator->multiplication($isFirstOperand, $isSecondOperand);
        } catch (Exception $exception) {
            echo $exception ->getMessage();
        }
        break;
    case 'Division':
        try {
            echo $calculator->division($isFirstOperand, $isSecondOperand);
        } catch (Exception $exception) {
            echo $exception ->getMessage();
        }
        break;
}
?>
</body>
</html>
