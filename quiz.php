<?php

include('backand\protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<header>
    <div class="nav-header">
      <nav>
        <a href="home.html">Home</a>
        <a href="course.html">Cursos</a>
        <a href="profile.html">Meu Perfil</a>
      </nav>
    </div>
  </header>
<body>
    <main>
        <section class="geral">
            <article class='centro' id='instrucoes'>
                Leia a questão e clique na resposta correta
            </article>
            <section id="container">
                <div><h1 id="titulo"></h1></div>
                <ul>
                    <li class="alternativa"></li>
                <li class="alternativa"></li>
                <li class="alternativa"></li>
                <li class="alternativa"></li>
            </ul>
        </section>
        <h2 id="result"></h2>
        <h2 id="pontos"></h2>
        
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
    <script type="text/javascript" src="/assets/js/quiz.js"></script>
</body>
</html>


<style>
    :root {
    --green-light: #19D3DA;
    --purple-light: #2B6CB0;
    --white: #FFFFFF;
    --white-200: #F7FAFC;
    --gray: #1A202C;
}
    body {
        background: white;
        font-family: Nunito;
        text-align: center;
        display: flex;
        flex-direction: column;
    }
    .geral{
        margin: auto;
        display: flex;
    flex-direction: column;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 15px;
    padding: 3px;
    border: 5px solid;
    border-image: 
    linear-gradient(
     #e93916, 
     #000,
     var(--green-light)
    ) 1 ;
    animation: rotate
    2.5s
    ease-in
    infinite;
    }
    @keyframes rotate {
    50%{
        border-image: linear-gradient(
            var(--green-light),
            #030303,
            orange
        )1;
    }
  }



    #instrucoes {

        color: #1A202C;
        padding: 0.625rem;
        border-radius: 8px;
        
        display: flex;
        justify-content: center;
        margin-bottom: 1rem;
        animation: piscar .75s infinite alternate;
    }
    
    #container {
        background-color: white;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 400px;
        width: 930px;
        border-radius: 10px;
    }
    
    #container div, #container ul {
        width: 100%;
        
    }
    
    
    ul {
        padding: 0px;
    }
    
    #titulo {
        font-size: 20px;
        padding: 10px;
        font-family: "Poppins", sans-serif;
        
    }
    
    .alternativa {
        margin: auto;
        list-style-type: none;
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 8px;
        width: 87%;
        align-items: center;
        align-content: center;
        box-shadow: inset 5px 5px 5px rgb(0 0 0 / 20%), inset -5px -5px 15px rgb(255 255 255 / 10%), 5px 5px 15px rgb(0 0 0 / 30%), -5px -5px 15px rgb(255 255 255 / 10%);
        background-color: #1A202C;
    color: #FFFFFF;
    }
    
    .alternativa:hover {
        cursor: pointer;
        opacity: 0.8;
    }
    
    #result {
        font-weight: bold;
    }
    

    
    </style> 
