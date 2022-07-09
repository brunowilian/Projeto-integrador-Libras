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
  <section class="container-fac">
    <h1 class="titulo-fac">Perguntas Frequentes</h1>
            <section class="modulos"  onclick="showHide('#modulo1')">
                <div class="primary-module">
                    <p class="titulo-pergunta">É preciso fazer cadastro no site para assistir os vídeos gratuitos?</p>
                    <div class="descricao-modulo" id="modulo1">
                        <p class="titulo-resposta">Sim, somente os alunos cadastrados no portal conseguem ter acesso a plataforma de curso.</p>
                </div>
                </div>
                <img class="img-fac" src="assets\images\seta.png" alt="seta">
            </section>
            <section class="modulos"  onclick="showHide('#modulo2')">
                <div class="primary-module">
                    <p class="titulo-pergunta">Qual o preço para conseguir ter acesso aos vídeos?</p>
                    <div class="descricao-modulo" id="modulo2">
                        <p class="titulo-resposta">Todos os cursos da plataforma são gratuitos.</p>
                    </div>
                </div>
                <img class="img-fac" src="assets\images\seta.png" alt="seta">
            </section>
            <section class="modulos"  onclick="showHide('#modulo3')">
                <div class="primary-module">
                    <p class="titulo-pergunta">Quem pode fazer o curso?</p>
                    <div class="descricao-modulo" id="modulo3">
                        <p class="titulo-resposta">Qualquer pessoa que tenha interesse em aprender a Língua Brasileiras de Sinais (Libras)</p>

                    </div>
                </div>
                <img class="img-fac" src="assets\images\seta.png" alt="seta">
            </section>

            <section class="modulos"  onclick="showHide('#modulo4')">
                <div class="primary-module">
                    <p class="titulo-pergunta">..</p>
                    <div class="descricao-modulo" id="modulo4">
                        <p class="titulo-resposta"></p>

                    </div>
                </div>
                <img class="img-fac" src="assets\images\seta.png" alt="seta">
 
            </section>

            <section class="modulos"  onclick="showHide('#modulo5')">
                <div class="primary-module">
                    <p class="titulo-pergunta">..</p>
                    <div class="descricao-modulo" id="modulo5">
                        <p class="titulo-resposta"></p>

                    </div>
                </div>
                <img class="img-fac" src="assets\images\seta.png" alt="seta">
            </section>
    
            </section>

            <script>
        function showHide(id){
            let conteudo = document.querySelector(id);
            conteudo.classList.toggle('ativo'); 
        }
    </script>

  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

</body>

<style>
      p{
        font-size: 0.889rem;
    font-weight: 400;
    line-height: 150%;
    margin-bottom: 1.33rem;
    }
            </style>

</html>