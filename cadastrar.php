<?php
    include_once './conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h1>C, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
    <h1>Cadastrar</h1>
    <?php
      $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($dados['CadUsuario'])){
            $query_usuario = "INSERT INTO usuarios (nome,email) 
            VALUES (:nome, :email) ";

            // Preparando query
            $cad_usuario = $conn->prepare($query_usuario);
            $cad_usuario->bindParam(':nome', $dados['nome'],PDO::PARAM_STR);
            $cad_usuario->bindParam(':email', $dados['email'],PDO::PARAM_STR);
            $cad_usuario->execute();

            //Mostrar usuario cadastro realizado
            if ($cad_usuario->rowCount()){
                echo "<p style='color: green;'>Usario cadastrado com sucesso!</p>";
            }else{
                echo "<p style ='color: #ff0000;'>Erro: Usuario não cadastrado com sucesso!</p>";
            };
        }

    ?>
    <form name="cad-usuario" method="POST" action="">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo"> <br><br>

        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="Seu melhor email"> <br><br>

        <input type="submit" value="Cadastrar" name="CadUsuario">
    </form>
</body>
</html>