<?php
session_start();
include('conexao.php');

$usuario = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "select id_usuario, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login.php');
    exit();
}
