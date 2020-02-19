<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form name="form" id="form" method="POST" action="incluir.php">
    <label for="txtNome"> Nome:</label> 
    <input type="text" name="txtNome" id="txtNome" placeholder="Digite o Nome">
    <input type="submit" name="btnSalvar" id="btnSalvar" value="OK">
    <input type="submit" name="btnExcluir" id="btnExcluir" value="Excluir">
    <br></br>

    <label for="txtNome"> Email:</label> 
    <input type="text" name="txtEmail" id="txtEmail" placeholder="Digite seu email">
    <input type="submit" name="btnSalvar" id="btnSalvar" value="OK">
    <input type="submit" name="btnExcluir" id="btnExcluir" value="Excluir">
    <br></br>
    
    <label for="txtNome"> Login:</label> 
    <input type="text" name="txtLogin" id="txtLogin" placeholder="Digite o seu login">
    <input type="submit" name="btnSalvar" id="btnSalvar" value="OK">
    <input type="submit" name="btnExcluir" id="btnExcluir" value="Excluir">
    <br></br>

    <label for="txtNome"> Senha:</label> 
    <input type="text" name="txtSenha" id="txtSenha" placeholder="Digite a sua senha">
    <input type="submit" name="btnSalvar" id="btnSalvar" value="OK">
    <input type="submit" name="btnExcluir" id="btnExcluir" value="Excluir">
    <br></br>

    <form> 
    <br />
    <br />
    <br />
    <?php
        $cn = mysqli_connect("localhost", "root", "", "meusite");

        $q = mysqli_query($cn, "SELECT * FROM estado;");
        while($row = mysqli_fetch_assoc($q)) {
            $r[] = $row;
        }
        mysqli_close($cn);
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(is_null($r)) {
            ?>
                <tr>
                    <td colspan ="3">
                        <strong>Não existe resgistros</strong>
                    </td>
                </tr>
            <?php
                } else { 
                    foreach($r as $i) { 
            ?>
            <tr>
                    <td>
                        <?=$i["id"]?>
                    </td>
                    <td>
                        <?$i["nome"]?>
                    </td>
                    <td>
                        <a href="editar.php?id=<?=$i["id"]?>">Editar</a>
                        <a href="excluir.php?id=<?=$i["id"]?>">Excluir</a>
                    
                    </td>
            </tr>
            <?php
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>