<?php

include('backand\protect.php');

if (!isset($_SESSION)) {
  session_start();
};


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Perfil</title>
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
    <section class="conteudo-profile">
      <div>
        <h1>Perfil do Usuário</h1>
        <br />
      </div>
      <section class="formulario-profile">
        <div>
          <p>Nome Completo</p>
          <?php if (isset($_GET['email'])) : ?>
            Your name is <?php echo $_GET["email"]; ?>
          <?php endif; ?>
          <input class="input-profile" type="text" value="<?php echo $_SESSION['nome']; ?>" />
          <p>Email</p>
          <input class="input-profile" type="text" value="<?php echo $_SESSION['email']; ?>" />
        </div>
      </section>
    </section>
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