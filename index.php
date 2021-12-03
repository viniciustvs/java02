<?php
    ob_start();
    session_start();
    include('conexao/conecta.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <?php
        // if(isset($_POST['login'])){
        //     $usuario = trim(strip_tags($_POST['usuario']));
        //     $senha = trim(strip_tags(md5($_POST['senha'])));
        //     $select = $conexao->prepare("SELECT * from login WHERE BINARY usuario=:usuario AND BINARY senha=:senha");
        //     $select->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        //     $select->bindParam(':senha', $senha, PDO::PARAM_STR);
        //     $select->execute();
        //     $login = $select->rowCount();
        //     if($login >0){
        //         $usuario = $_POST['usuario'];
        //         $senha = $_POST['senha'];
        //         $_SESSION['aulaUser'] = $usuario;
        //         $_SESSION['aulaPass'] = $senha;

        //         echo 'Logado com sucesso!';
        //     } else {
        //         echo 'Dados inválidos!';
        //     }
        // }
    ?>
    <div class="main">
        <div class="box">
            <form method="post" enctype="multipart/form-data" action="login.php">
                <div class="campo">
                    <label>Usuario</label>
                    <input type="text" name="usuario" id="usuario">
                    <br>
                </div>
                <div class="campo">
                    <label>Senha</label>
                    <input type="password" name="senha" id="senha">
                    <br>
                </div>
                <div class="login">
                    <input type="submit" name="login" value="Login" id="login" onclick="validar()">
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>