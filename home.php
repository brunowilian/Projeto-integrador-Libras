<?php
include('backand\protect.php');

if (!isset($_SESSION)) {
  session_start();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Curso Libras</title>
  <link rel="stylesheet" href="/assets/css/style.css" />
</head>
<header>
  <div class="nav-header">
    <div>
      <nav>
        <a href="home.php">Home</a>
        <a href="course.php">Cursos</a>
      </nav>
    </div>
  </div>
  <div class="profile-nav nav-header">
    <nav>
      <a href="profile.php">Meu Perfil</a>
      <a href="./backand/logout.php">Sair</a>
    </nav>
  </div>
</header>

<body>
  <main>
    <div class="container-novidade">
      <div class="header">
        <h2>Aperfeiçoamentos da plataforma que estão em desenvolvimento:</h2>

      </div>
      <div class="row1-container">
        <div class="box-home box-down cyan">
          <h2>Conquistas</h2>
          <p>Incentivo e apoio aos usuários, por meio de medalhas de bronze, prata e ouro decorrente seu desenvolvimento
          </p>
          <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
        </div>

        <div class="box-home  red">
          <h2>Certificado</h2>
          <p>Certificação de que o aluno passou por todas as etapas do curso </p>
          <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
        </div>

        <div class="box-home  box-down blue">
          <h2> Comentários</h2>
          <p>Batepapo online afim dos usuários trocarem conhecimentos</p>
          <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
        </div>
      </div>
      <div class="row2-container">
        <div class="box-home  orange">
          <h2>Quiz</h2>
          <p>Aperfeiçoamento do quiz</p>
          <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
        </div>
      </div>
    </div>
  </main>

  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  

  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

</body>
<footer>
        Rodapé da página
        <div>
          <a href="./support.php">Suporte</a>
        </div>
    </footer>
</html>