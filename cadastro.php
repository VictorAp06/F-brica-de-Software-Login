<?php
session_start();
include('cabecalho.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/rodape.css">
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <title>Cadastro</title>
</head>

<body>
    <div id="main-container">
      <h1>Cadastre-se para acessar a Plataforma</h1>
      <form id="form-cadastro" action="cadastrar.php" method="POST">
        <div class="full-box">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2">
          <span class='msg-erro msg-email'></span>
        </div>
        <div class="full-box">
            <label for="name">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" data-min-length="3" data-max-length="16">
            <span class='msg-erro msg-nome'></span>
        </div>
        <div class="full-box">
            <label for="lastname">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome">
            <span class='msg-erro msg-sobrenome'></span>
        </div>
        <div class="box-side data">
              <label for="data-nascimento">Data de Nascimento</label>
              <input type="date" name="datanascimento" id="datanascimento">
              <span class='msg-erro msg-nascimento'></span>
        </div>
        <div class="box-side periodo">
          <label for="periodo"><strong>Período </strong></label><br>
          <select class="select-periodo" name="periodo" id="periodo" data-required>
              <option value="Pré-escolar">Pré-escolar</option>
              <option value="Educação Infantil">Educação Infantil</option>
              <option value="Ensino Fundamental 1">Ensino Fundamental 1</option>
              <option value="Ensino Fundamental 2">Ensino Fundamental 2</option>
              <option value="Ensino Médio">Ensino Médio</option>
          </select>
          <span class='msg-erro msg-periodo'></span>
        </div>
        <div class="full-box">
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
          <span class='msg-erro msg-senha'></span>
        </div>
        <div class="full-box">
          <label for="confirmacaosenha">Confirmação de senha</label>
          <input type="password" name="confirmacaosenha" id="confirmacaosenha" placeholder="Digite novamente sua senha">
          <span class='msg-erro msg-confirmacaosenha'></span>
        </div>
        <div class="inline-box"> 
          <label for="agreement">Eu li e aceito os <a href="#">termos de uso</a><input type="checkbox" name="agreement" id="agreement"></label>
        </div>
        <div class="full-box">
          <input type="submit" name="btn-submit" value="Confirmar">
        </div>
        <?php
          if(isset($_SESSION['usuario_existe'])):
        ?>
        <div class="full-box">
          <h3>Usuário já cadastrado!</h3>
        </div>
        <?php
          endif;
          unset($_SESSION['usuario_existe']);
        ?>
        <?php
          if(isset($_SESSION['status_cadastro'])):
        ?>
        <div class="full-box">
          <h3>Usuário Cadastrado com sucesso</h3>
        </div>
        <?php
          endif;
          unset($_SESSION['status_cadastro']);
        ?>
      </form>
    </div>
    <footer>
        <div class="footer-content">
          <p>
            Copyright &copy; 2021, Fábrica de Software - Todos os diretos reservados
          </p>
          <div class="social-list">
            <ul>
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fab fa-instagram"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
  <script src="js/valida_cadastro.js"></script>
</body>
</html>