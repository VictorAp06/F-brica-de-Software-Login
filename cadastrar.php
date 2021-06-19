<?php
session_start();

include('conexao.php');

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome']));
$datanascimento = mysqli_real_escape_string($conexao, $_POST['datanascimento']);
$periodo = mysqli_real_escape_string($conexao, $_POST['serie']);
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$confirmacaosenha = mysqli_real_escape_string($conexao, $_POST['confirmacaosenha']);

$sql = "select count(*) as total from usuario where email = 'email';";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "insert into usuario (usuario, senha, email, sobrenome, nome, nascimento, periodo) values('$email', '$senha', '$email', '$sobrenome', '$nome', '$datanascimento', '$periodo');";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit();

?>

