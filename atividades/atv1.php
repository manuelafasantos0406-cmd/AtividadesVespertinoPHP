<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>resultado da multiplicação</h1>
    <?php 
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $num3 = $_POST['numero3'];
    $multiplicacao = $num1 * $num2 * $num3;

    echo "<p>A multiplicação dos três números é $multiplicacao</p>";
    ?>
</body>
</html>