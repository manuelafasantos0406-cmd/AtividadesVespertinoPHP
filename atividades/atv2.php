<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>resultado da divisão</h1>
    <?php 
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $divisao = $num1 / $num2; 

    echo "<p>A divisão dos dois números é $divisao </p>";
    ?>
</body>
</html>