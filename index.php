<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/principal.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <title>Fábrica de Software</title>
</head>
<body>
    
    <div class="container">

        <div class="hamburguer">
            <div class="line" id="line1"></div>
            <div class="line" id="line2"></div>
            <div class="line" id="line3"></div>
        </div>

        <header>
            <div class="img-wrapper">
                <img src="imagens/background-header.jpg" alt="">
            </div>
            <div class="banner">
                <h1>Fábrica de Software - Uniube</h1>
                <p>Ensino a distância infantil</p>
                <button>Saiba mais</button>
            </div>
        </header>

        <aside class="sidebar">
            <nav>
                <ul class="menu">
                    <li class="menu-item"><a href="#" class="menu-link">Home</a></li>
                    <li class="menu-item"><a href="#conteudos" class="menu-link">Conteudos</a></li>
                    <li class="menu-item"><a href="login.php" class="menu-link">Login</a></li>
                    <li class="menu-item"><a href="" class="menu-link">Contatos</a></li>
                    <li class="menu-item"><a href="sobre.php" class="menu-link">Sobre</a></li>
                </ul>
            </nav>
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </aside>
    
        <section class="sessao-conteudos" id="conteudos">
            <div class="sessao-header">
              <h1>Conteúdos</h1>
            </div>
            <div class="conteudos">
              <div class="conteudo">
                <div class="conteudo-header">
                  <i class="fas fa-book"></i>
                  <h3>Educação Infantil</h3>
                </div>
                <div class="conteudo-text">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui vel obcaecati eaque quos, labore quibusdam incidunt dolores vitae velit voluptates esse omnis enim, dolorem eveniet. Rem ab obcaecati totam ipsum!</p>
                </div>
              </div>
              <div class="conteudo">
                <div class="conteudo-header">
                  <i class="fas fa-list"></i>
                  <h3>Ensino Fundamental</h3>
                </div>
                <div class="conteudo-text">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore pariatur asperiores incidunt quod, sed aspernatur eos commodi ex nostrum consequuntur aut vero cum illum perferendis earum, eveniet hic itaque. Quod.</p>
                </div>
              </div>
              <div class="conteudo">
                <div class="conteudo-header">
                  <i class="fas fa-pencil-alt"></i>
                  <h3>Disciplina</h3>
                </div>
                <div class="conteudo-text">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ex eius voluptatem deleniti alias commodi doloremque aspernatur id adipisci quia ea, distinctio maxime, at nemo. Officiis suscipit excepturi quia aut?</p>
                </div>
              </div>
              <div class="conteudo">
                <div class="conteudo-header">
                  <i class="fas fa-archive"></i>
                  <h3>Ensino Médio</h3>
                </div>
                <div class="conteudo-text">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quas facere alias, reprehenderit ullam quibusdam itaque dolor nulla odio inventore culpa molestiae porro ea ad illo, quos dicta ratione quisquam?
                  </p>
                </div>
              </div>
              <div class="conteudo">
                <div class="conteudo-header">
                  <i class="fas fa-book-open"></i>
                  <h3>Ensino a Distância</h3>
                </div>
                <div class="conteudo-text">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sequi, quas illo dolor totam voluptas pariatur harum blanditiis veritatis culpa doloremque aspernatur nesciunt dicta iure fuga similique ad, ut impedit.</p>
                </div>
              </div>
              <div class="conteudo">
                <div class="conteudo-header">
                  <i class="fas fa-brain"></i>
                  <h3>Desenvolvimento</h3>
                </div>
                <div class="conteudo-text">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet facilis distinctio quaerat eaque ratione, molestias incidunt a iusto, unde quos magnam ullam exercitationem velit alias, fuga in explicabo ex laborum!</p>
                </div>
              </div>
              <div class="conteudos-img-wrapper">
                <img src="imagens/conteudos.png" alt="imagem conteudo">
              </div>
            </div>
          </section>
          <?php
            include('rodape.php');  
          ?>
    </div>

    <script src="js/script-principal.js"></script>
</body>
</html>