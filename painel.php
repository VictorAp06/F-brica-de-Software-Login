<?php
include('verifica_login.php');
include('cabecalho.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cabecalho.css">
    <title>Fábrica de Software</title>
</head>
<body>
    <h1>Parabéns você está logado em nossa plataforma <?php echo $_SESSION['usuario']; ?></h1>
    <h2><a href="logout.php">Sair</a></h2>
    div
    <?php
        include('FabricaDeSoftware.php');
        include('rodape.php');
    ?>
</body>
</html>


