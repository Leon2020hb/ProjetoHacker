<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calcular</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
    <h2>Calcular</h2>
<body>
    <?php
    $horas = $_POST["horas"];
    $valor = $_POST["valorHora"];
    $percentual = $_POST["percentual"];

    $salario_bruto = $horas * $valor;
    $desconto = ($percentual/100) * $salario_bruto;
    $salario_liquido = $salario_bruto - $desconto;
 
    echo ("<p> Horas trabalhadas: " . $horas . "</p>");
    echo ("<p> Salário Bruto: " . $salario_bruto . "</p>");
    echo ("<p> Desconto: " . $desconto . "</p>");
    echo ("<p> Salário Líquido: " . $salario_liquido . "</p>");
    ?>
</body>
</html>