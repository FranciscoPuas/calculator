<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : null;
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : null;
    $operation = isset($_POST['operation']) ? $_POST['operation'] : null;
    $result = 0;

    switch ($operation) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num2 != 0 ? $num1 / $num2 : "Error: División por cero";
            break;
        case "sqrt":
            $result = sqrt($num1);
            break;
        case "power":
            $result = pow($num1, 2);
            break;
        case "sin":
            $result = sin($num1);
            break;
        case "cos":
            $result = cos($num1);
            break;
        case "tan":
            $result = tan($num1);
            break;
        case "log":
            $result = log10($num1);
            break;
        default:
            $result = "Operación no válida";
            break;
    }

    echo $result;
}
?>
