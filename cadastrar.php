<?php
    include_once './conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h1>C, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar</h1>
    <form name="cad-usuario" method="POST" action="">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo"> <br><br>

        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="Seu melhor email"> <br><br>

        <input type="submit" value="Cadastrar" name="CadUsuario">
    </form>
</body>
</html>