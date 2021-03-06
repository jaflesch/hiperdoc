<?php
// includes...
require_once "scripts/navigation.php";
require_once "scripts/material.php";

$page_title = "Funções";
include "_view/head.php";

$link_navbar = Navigation::get_link('funcoes');
include "_view/header.php";
?>
<!-- HTML Content -->
<section id="#funcoes">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> O que são funções?  </h1>
                <p> 
                    Na linguagem C, denominamos função a um conjunto de comandos que realiza uma tarefa específica em um módulo 
                    ependente de código, ou seja, uma subrotina.. A função é referenciada pelo programa principal através do nome
                    atribuído a ela. A utilização de funções visa modularizar um programa, o que é muito comum em programação estruturada.
                    Assim podemos dividir um programa em várias partes, no qual cada função realiza uma tarefa bem definida.

                </p>

                <h2> Declarando funções </h2>
                <p> 
                    Para definir uma função, empregamos a seguinte forma básica:
                </p>

                <pre><code class="cpp">
                tipo nome(parâmetros) {  comandos } ;
					</code></pre>

                </br>
                <p> 

                    “Tipo” refere-se ao tipo de resposta que a função devolve, 
                    podendo ser ser void (vazio) se a função não tem valor de resposta, “nome” é o 
                    identificador da função no resto do programa e “parâmetros” é uma lista de variáveis 
                    que representam valores de entrada para a função e que pode ser vazia. 

                </p>



            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1> Exemplos </h1>

                <p> 
                    A função declarada abaixo realiza a soma de dois números inteiros escolhidos pelo 
                    usuário e retorna esse valor.
                </p>
                
                <div class="console-header"><img src="_img/console/icon.png"></div>
                <pre><code class="cpp"> 
#include &lt;stdio.h&gt;

int soma(int N1, int N2) 
{
  int resultado;
  resultado = N1 + N2;
  return(resultado); 
}

int main(void)
{
  int V1, V2, resultado;
  printf("Digite o primeiro número:");
  scanf("%d", &V1);
  printf("Digite o segundo número:");
  scanf("%d", &V2);

  resultado = soma(V1,V2);
  printf("Resultado = %d \n", resultado);
  return 0;
}
                </code></pre>
                
                </br>                </br>
                
                <p> 
                    O programa abaixo mostra a utilização de uma função sem parametros e sem valor de retorno.
                </p>
                
                </br>
                
                <pre><code class="cpp"> 

#include &lt;stdio.h&gt;

void imprime_cabec(void)
{
  printf("******************************\n");
  printf("*   	LINGUAGEM C      	*\n");
  printf("******************************\n\n");

  return;/* retorno de uma função void  */
}


int main(void)
{
  imprime_cabec();
   return 0;
}
                        }
                </code></pre>
                <pre class="exe"> 
                ******************************
                *   	LINGUAGEM C      	*           
                ******************************                    
                </pre>
                
            </div>
        </div>
    </div>
</section>

<section id="#nomeSection">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> 2. Título Seção Par</h1>

                <ul class='material-list'>
                <?php 
                  Material::pdf('Funções', 'files/17.pdf');
                  Material::pdf('Funções e Ponteiros', 'files/18.pdf');
                  Material::pdf('Funções com Ponteiros', 'files/19.pdf');
                  Material::web('Funções com Ponteiros', 'http://www.inf.pucrs.br/~pinho/LaproI/Funcoes/AulaDeFuncoes.htm');
                  Material::youtube('Programando em C - Aula 12', 'https://www.youtube.com/watch?v=T5_q2UIsSgk');
                  Material::youtube('Programando em C - Aula 13', 'https://www.youtube.com/watch?v=BdMpYXJ8AuE');
                  Material::youtube('Programando em C - Aula 14', 'https://www.youtube.com/watch?v=2W3yDLTTLWg');
                  Material::youtube('Programando em C - Aula 15', 'https://www.youtube.com/watch?v=w6Wrw4SQn8E');
                  Material::quiz('Quiz online', 'quiz.php?area=funcoes');
                ?>
              </ul>         
              
              <!-- Navigation links -->
                <p class='links'>
                    <a class='pull-left' href='bubblesort.php'><i class='fa fa-2x fa-angle-left'></i> Bubblesort</a>
                    <a class='pull-right' href='recursao.php'> Recursão <i class='fa fa-2x fa-angle-right'></i></a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php include "_view/footer.php"; ?>