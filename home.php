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
  <title>Curso Livras</title>
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
        <h1>Lançamentos</h1>
        <h1>Powered by Technology</h1>

        <p>Our Artificial Intelligence powered tools use millions of project data points
          to ensure that your project is successful</p>
      </div>
      <div class="row1-container">
        <div class="box-home box-down cyan">
          <h2>Supervisorr</h2>
          <p>Monitors activity to identify project roadblocks</p>
          <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
        </div>

        <div class="box-home  red">
          <h2>Team Builder</h2>
          <p>Scans our talent network to create the optimal team for your project</p>
          <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
        </div>

        <div class="box-home  box-down blue">
          <h2>Calculator</h2>
          <p>Uses data from past projects to provide better delivery estimates</p>
          <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
        </div>
      </div>
      <div class="row2-container">
        <div class="box-home  orange">
          <h2>Karma</h2>
          <p>Regularly evaluates our talent to ensure quality.</p>
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

</html>