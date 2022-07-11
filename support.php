<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets\css\style.css">
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
        <div class="container-suporte">
            <section class="container-suporte-contato">
                <div class="row">
                    <h1 class="hasd">contato</h1>

                    <div class="row">
                        <h4 style="text-align:center">Adoraríamos ouvir você</h4>
                    </div>
                    <div class="row input-container">
                        <div class="col-xs-12">
                            <div class="styled-input wide">
                                <input type="text" required />
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input wide">
                                <input type="text" required />
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="styled-input wide">
                                <textarea required></textarea>
                                <label>Messagem</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="btn-lrg submit-btn">Enviar Menssagem</div>
                        </div>
                    </div>
                </div>
                <div class="dados-suporte">
                    <h1>contato suporte </h1>
                    <span>Email:Brw.ju@gmail.com </span>
                    <span>Contato:(251) 888-3333</span>
                    <span>Localização: Cidade, Paulista, PE</span>
                </div>
            </section>
            <section class="container-fac">
                <h1 class="titulo-fac">Perguntas Frequentes</h1>
                <section class="modulos" onclick="showHide('#modulo1')">
                    <div class="primary-module">
                        <p class="titulo-pergunta">É preciso fazer cadastro no site para assistir os vídeos gratuitos?</p>
                        <div class="descricao-modulo" id="modulo1">
                            <p class="titulo-resposta">Sim, somente os alunos cadastrados no portal conseguem ter acesso a plataforma de curso.</p>
                        </div>
                    </div>
                    <img class="img-fac" src="assets\images\seta.png" alt="seta">
                </section>
                <section class="modulos" onclick="showHide('#modulo2')">
                    <div class="primary-module">
                        <p class="titulo-pergunta">Qual o preço para conseguir ter acesso aos vídeos?</p>
                        <div class="descricao-modulo" id="modulo2">
                            <p class="titulo-resposta">Todos os cursos da plataforma são gratuitos.</p>
                        </div>
                    </div>
                    <img class="img-fac" src="assets\images\seta.png" alt="seta">
                </section>
                <section class="modulos" onclick="showHide('#modulo3')">
                    <div class="primary-module">
                        <p class="titulo-pergunta">Quem pode fazer o curso?</p>
                        <div class="descricao-modulo" id="modulo3">
                            <p class="titulo-resposta">Qualquer pessoa que tenha interesse em aprender a Língua Brasileiras de Sinais (Libras)</p>
                        </div>
                    </div>
                    <img class="img-fac" src="assets\images\seta.png" alt="seta">
                </section>
                <section class="modulos" onclick="showHide('#modulo4')">
                    <div class="primary-module">
                        <p class="titulo-pergunta">..</p>
                        <div class="descricao-modulo" id="modulo4">
                            <p class="titulo-resposta"></p>
                        </div>
                    </div>
                    <img class="img-fac" src="assets\images\seta.png" alt="seta">
                </section>
                <section class="modulos" onclick="showHide('#modulo5')">
                    <div class="primary-module">
                        <p class="titulo-pergunta">..</p>
                        <div class="descricao-modulo" id="modulo5">
                            <p class="titulo-resposta"></p>
                        </div>
                    </div>
                    <img class="img-fac" src="assets\images\seta.png" alt="seta">
                </section>
            </section>
        </div>
    </main>
    <script>
        function showHide(id) {
            let conteudo = document.querySelector(id);
            conteudo.classList.toggle('ativo');
        }
    </script>
</body>
<style>
    p {
        font-size: 0.889rem;
        font-weight: 400;
        line-height: 150%;
        margin-bottom: 1.33rem;
    }
</style>
<footer>
        Rodapé da página
        <div>
          <a href="./support.php">Suporte</a>
        </div>
    </footer>
</html>