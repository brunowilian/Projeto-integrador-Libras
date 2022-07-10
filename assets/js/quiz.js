let perguntas = [
{
    titulo: 'O que é libras?',
    alternativas: ['Linguagem brasileira de sinais', 'Linguagem mimica de surdos', 'Língua brasileira de sinais', 'Língua de gestos de surdos'],
    correta: 2
},
{
    titulo: 'Quando a Libras foi oficializada no Brasil?',
    alternativas: ['1998 pela Lei nº 10.436.', '1974 pela Lei nº 10.436.', '2002 pela Lei nº 10.436.', '2001 pela Lei nº 10.436.'],
    correta: 2
},
{
    titulo: 'Onde a Libras teve origem na língua de sinais ?',
    alternativas: ['França (LSF) ', 'Estados unidos (ASL)', 'Portugal (LGP)', 'Britânica (BSL)'],
    correta: 0
},
{
    titulo: 'Em que ano foi fundada a primeira escola de surdos no Brasil ?',
    alternativas: ['1857', '1888', '1995', '2002'],
    correta: 1
},
{
    titulo: 'Qual o significado de “INES” na comunidade surda?',
    alternativas: ['Instituto Nacional de cegos e Surdos', 'Instituto Imperial de Deficientes Auditivos', 'Instituto Educacional para Deficientes Auditivos', 'Instituto Nacional De Educação de Surdos'],
    correta: 3
},
{
    titulo: 'Como é chamado o Filho ouvinte de Pais surdos?',
    alternativas: ['Intérprete', 'Coda', 'Bilíngue', 'Libreiro'],
    correta: 1
},
{
    titulo: 'As pessoas que têm perda profunda, e não escutam nada, são consideradas?',
    alternativas: ['surdo mudo', 'mudo', 'Deficiente auditivo ', ' surdos'],
    correta: 3
},
{
    titulo: 'Assinale a alternativa que mostra a diferença entre a língua de sinais e a língua oral',
    alternativas: ['As línguas de sinais apresentam modalidade visual-espacial, enquanto as línguas orais são orais-auditivas', 'As línguas orais são aprendidas de forma visual, as de sinais são apreendidas de forma gestual', 'As línguas de sinais são línguas universais, enquanto as orais têm variação linguística local', 'A falta de sintaxe, semântica e morfologia são características das línguas de sinais, as línguas orais têm gramática própria'],
    correta: 0
},
{
    titulo: 'Assinale a alternativa correta ',
    alternativas: ['A libras é uma língua artificial ', 'A língua de sinais é universal', 'Somente os ouvintes usam datilologia', 'A libras é uma versão da língua portuguesa'],
    correta: 3
},
{
    titulo: 'todo surdo é mudo',
    alternativas: ['Depende da profundidade da perda auditiva', 'Sim, por isso fazem uso da língua de sinais', 'Não, existem surdos com cordas vocais perfeitas', ' Sim, por isso o termo surdo-mudo'],
    correta: 2
}
]

//abrindo objeto app,, com seus métodos
let app = {

//funcção para capturar o cli'ck
start:function(){
    this.Atualpos = 0; //posiição atual do array perguntas
    this.Totalpontos = 0;

    let alts = document.querySelectorAll('.alternativa');
    alts.forEach((element,index)=>{   //coloca ouvintes de eventos em todos os elementos da primeira vez que o codgo rodou
        element.addEventListener('click',()=>{
           this.checaResposta(index);  //checa resposta na alternativa que foi clicada
        })
    })
    this.atualizaPontos();
    app.mostraquestão(perguntas[this.Atualpos]);  //chamando arrays perguntas e em qual posição especifica (atualpos)
},

mostraquestão:function(q){
    this.qatual = q;  //saber qual questão atual ta sendo exibida
    let titleDiv = document.getElementById('titulo');  //mostra o titulo
    titleDiv.textContent = q.titulo;  //o conteudo do texto vai receber o titulo da pergunta

    let alts = document.querySelectorAll('.alternativa');  //mostra as alternativas
    //alts recebe todos objetos do html que recebe a class alternativa
    alts.forEach(function(element, index){
        element.textContent = q.alternativas[index];
    })
},

Proximaperg: function(){
    this.Atualpos++; //para passar pro proximo espaço do array (prgunta)
    if(this.Atualpos == perguntas.length){  // se chegar na ultima pergunta, volta para primeira
        this.Atualpos = 0;
    }
},

//checa se a resposta do usuário estar correta
checaResposta: function(user){
    //se o atributo correta da  questão atual for exatamente a resposta do usuário
    if(this.qatual.correta == user){
        console.log("Acertou")
        this.Totalpontos += 10; //somar mais uma variável
        this.mostraresposta();
    }
    else{
        console.log("Errou")
        this.mostraresposta();
    }
    this.atualizaPontos();
    this.Proximaperg(); //mudar o atualPos de 0 pra 1 ++
    this.mostraquestão(perguntas[this.Atualpos]); //mostrar a proxima questão
},

//fazer pontuação no placar
atualizaPontos: function(){
    let scoreDiv = document.getElementById('pontos');
    scoreDiv.textContent = `Sua pontuação é: ${this.Totalpontos}`;

},
//mostrar resposta correta da pergunta

mostraresposta: function(correto){
    let resultDiv = document.getElementById('result');
    //formatar como a mensagem será exibida
    if (correto == true){
        resultDiv.textContent = "Acertou";
    } 
    else {
        let pergunta = perguntas[this.Atualpos];  // obtendo a questão atual
        let cindice = pergunta.correta;  // obtendo o indice da resposta correta da questão atual
        let ctexto = pergunta.alternativas[cindice];  // obter o texto da resposta correta da questão atual 
        resultDiv.textContent = `Incorreto! Resposta correta: ${ctexto}`;  
         
    }
    
}



}
app.start();
    