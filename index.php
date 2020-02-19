<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <script>
        var a = 5;

        var nome = "Herbert";
        var sobrenome = "Martins";

        alert(nome + "" + sobrenome);
    </script>

</head>
<body>
   <?php
        echo "Olá, Mundo!";
        $numero = 5;
        $numero2 = 4;

        $soma = $numero + $numero2;

        echo "<br />";
        echo "<h3>" . $numero . "<h3>";
        

        echo "A soma entre " . $numero . " e " . $numero2 . " é " . $soma;

    ?>     
</body>
</html>