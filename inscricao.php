<?php
include('backand\conexao.php');

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

if(isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['nome'])) {

  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  
  $cadastrar=mysqli_query($mysqli, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email','$senha')");
  if($cadastrar == true){
      echo  "<script>alert('Cadatrado com Sucesso!');</script>";
      $script = '<script language="javascript">location.href="index.php";</script>';
      echo $script;
      
  }else {
      echo "<script>
      alert('Usuario não registrado');
      </script>";
      header("Location: inscricao.php");
  }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Inscrição</title>
  </head>

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
                    <p>Bem-vindo!</p>
                    <h1>Faça cadastro para acessar o site.</h1>
                </div>
    
                <form action="" name="email" method="post">
                    <label for=""> Nome de Usuario</label>
                    <input type="text" name="nome" id="" required/>

                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="LibrasCurso@gmail.com">
                    
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="*********">
                                    
                    <button  type="submit" class="button-entrar">Cadastre-se</button>
                </form>
                <div class="cadastro">
                    <p>Já tem uma conta?</p>
                    <a href="index.php">Entrar</a>
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
