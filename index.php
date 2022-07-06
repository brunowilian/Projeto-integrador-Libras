<?php
include('backand\conexao.php');


if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];

            header("Location: ../home.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <script src="assets/js/svg-inject.min.js"></script>

    <title>Curso Libras</title>
</head>
<header>
    <div class="nav-header">
      <nav>
        <a href="home.php">Home</a>
        <a href="course.php">Cursos</a>
      </nav>
    </div>
  </header>
<body>

    <main>
        <div class="container-image">
            <section class="conteudo-primario">
                <div class="conteudo-um">
                  <div>
                    <h1 class="titulo">
                      Aprenda a utilizar a Libras - Língua Brasileira de Sinais
                    </h1>
                    <p class="paragrafo">
                      Visando promover o acesso à comunicação, à informação e à educação
                      da pessoa com deficiência auditiva.
                    </p>
                  </div>
                </div>
              </section>
        </div>
        
        <div class="container-form">
            <div class="form-content">
                <div class="form-title">
                    <p>Bem-vindo de volta</p>
                    <h1>Faça login na sua conta</h1>
                </div>
    
                <form action="" name="email" method="post">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="LibrasCurso@gmail.com">
                    
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="*********">
                    
                    <div class="form-radio">
                        <div class="radio-content">
                            <input type="radio" id="lembrar-login">
                            <label for="lembrar-login">Lembre de mim</label>
                        </div>
                        <a href="#">Esqueceu sua senha?</a>
                    </div>
                    
                    <button  type="submit" class="button-entrar">Entrar</button>

                    <a href="#" class="button-google-entrar">
                        <img src="assets/images/google.svg" class="google-icon" alt="Google icon" onload="SVGInject(this)">
                        Ou faça login com o Google
                    </a>
                </form>
                <div class="cadastro">
                    <p>Não tem uma conta?</p>
                    <a href="inscricao.php">Cadastre-se</a>
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