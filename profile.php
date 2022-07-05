<?php

include('backand\protect.php');

if(!isset($_SESSION)) {
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
      <nav>
        <a href="home.php">Home</a>
        <a href="course.php">Cursos</a>
        <a href="profile.php">Meu Perfil</a>
      </nav>
    </div>
  </header>
  <body>
    <main>
      <section class="conteudo-profile">
        <section>
          <h1>Perfil do Usuário</h1>
          <br />
          <img id="img-profile" src="./img/amanda.png" alt="Sua Foto" /><br />
        </section>
        <section class="formulario-profile">
          <div>
            <p>Nome Completo</p>

            <input class="input-profile" type="text" value="<?php echo $_SESSION['nome']; ?>" />
            <p>Email</p>
            <input class="input-profile" type="text"  />
            <p>Telefone</p>
            <input class="input-profile" type="text" />
          </div>
          <div>
            <p>Trocar Senha</p>
            <input class="input-profile" type="text" />
            <p>Data de nascimento</p>
            <input class="input-profile" type="text" />
            <p>Celular</p>
            <input class="input-profile" type="text" />
          </div>
        </section>
        <section>
          <button class="button-profile">Enviar</button>
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
</html>
