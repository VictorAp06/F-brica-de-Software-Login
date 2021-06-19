<?php
session_start();
include('cabecalho.php');
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <title>Login</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/rodape.css">
</head>
<body>
    <div id="main-container">
      <h1>Plataforma de Estudos</h1>
      <form id="register-form" action="autentication_login.php" method="POST">
        <div class="full-box">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
        </div>

        <div class="full-box">
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha" placeholder="Digite sua senha" data-password-validate data-required>
        </div>
        <div class="full-box">
          <input id="btn-login" type="submit" value="Login">
        </div>

        <div>
          <label for="agreement" id="agreement-label">Não possui cadastro?<a href="cadastro.php"> Registre-se</a></label>
        </div>
        
        <?php
          if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="full-box passwordInvalid">
          <h3>Senha ou Usuário Inválido</h3>
        </div>
        <?php
          endif;
          unset($_SESSION['nao_autenticado']);
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
  <script src="js/scripts.js"></script>
</body>
</html>