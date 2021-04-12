<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div id="main-container">
    <h1>Plataforma de Estudos</h1>
    <form id="register-form" action="autentication_login.php" method="POST">
      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>

      <div class="half-box spacing">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" placeholder="Digite sua senha" data-password-validate data-required>
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

      <div class="full-box">
        <input id="btn-login" type="submit" value="Login">
      </div>

      <div>
        <label for="agreement" id="agreement-label">Não possui cadastro?<a href="cadastro.html">Registre-se</a></label>
      </div>

    </form>
  </div>
  <p class="error-validation template"></p>
  <script src="js/scripts.js"></script>
</body>
</html>