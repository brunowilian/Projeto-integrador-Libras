let perguntas = [
{
    titulo: 'O que é libras?',
    alternativas: ['Linguagem brasileira de sinais', 'Linguagem mimica de surdos', 'Língua brasileira de sinais', 'Língua de gestos de surdos'],
    correta: 2
},
{
    titulo: 'Pergunta2',
    alternativas: ['Correta', 'Errada', 'Errada', 'Errada'],
    correta: 0
},
{
    titulo: 'Pergunta3',
    alternativas: ['Errada', 'Errada', 'Errada', 'Correta'],
    correta: 3
},
{
    titulo: 'Pergunta4',
    alternativas: ['Errada', 'Correta', 'Errada', 'Errada'],
    correta: 1
},
{
    titulo: 'Pergunta5',
    alternativas: ['Correta', 'Errada', 'Errada', 'Errada'],
    correta: 0
},
{
    titulo: 'Pergunta6',
    alternativas: ['Errada', 'Errada', 'Errada', 'Correta'],
    correta: 3
},
{
    titulo: 'Pergunta7',
    alternativas: ['Errada', 'Correta', 'Errada', 'Errada'],
    correta: 1
},
{
    titulo: 'Pergunta8',
    alternativas: ['Errada', 'Errada', 'Correta', 'Errada'],
    correta: 2
},
{
    titulo: 'Pergunta9',
    alternativas: ['Correta', 'Errada', 'Errada', 'Errada'],
    correta: 0
},
{
    titulo: 'Pergunta10',
    alternativas: ['Errada', 'Errada', 'Errada', 'Correta'],
    correta: 3
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
    