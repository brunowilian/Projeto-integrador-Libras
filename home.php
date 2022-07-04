<?php

if(!isset($_SESSION)) {
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
      <nav>
        <a href="home.php">Home</a>
        <a href="course.php">Cursos</a>
        <a href="profile.php">Meu Perfil</a>
        <div>Ola  <?php echo $_SESSION['nome']; ?></div>
      </nav>
      <p>
        <a href="./backand/logout.php">Sair</a>
    </p>
    </div>
  </header>

  <body>
    <main>

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
