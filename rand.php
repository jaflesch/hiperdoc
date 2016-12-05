<?php
	// includes...
	require_once "scripts/navigation.php";
	require_once "scripts/material.php";
	
	$page_title = "Função rand()";
	include "_view/head.php";
	
	$link_navbar = Navigation::get_link('rand');
	include "_view/header.php";
?>
	<!-- HTML Content -->
	<section id="#rand">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> Declaração</h1>

					<p>Até agora só vimos dois métodos de atribuir valor a um dado. O primeiro visto era, ao declarar uma variável, fazê-la receber um valor inicial (int var = 5; ). O segundo modo envolvia recolher o dado pelo teclado através da função scanf().</p>

					<p>Agora podemos utilizar outro recurso: preencher com valores "aleatórios" uma variável. A maior vantagem de utilizarmos a função rand() para isso é a economia de tempo. Imagine que você tenha um vetor com 100 posições: seria cansativo tanto escrever 100 números aleatórios para preenchê-lo quanto solicitar ao usuário. Com essa função em mãos, poderíamos fazer isso com apenas duas linhas de código!</p>

					<p>Os exemplos nós veremos na segunda seção do tópico. Por ora, vamos nos ater a estudar o formato da função, seus argumentos e quais bibliotecas precisamos para usá-la corretamente.</p>

					<h1> SRAND();</h1>
					<p>Essa função serve para inicializarmos a função rand(). O s vem de seed, ou seja, a semente que usaremos como valor inicial. Esta semente é um parâmetro do tipo inteiro. Mesmo que você forneça um float, char ou até string, ele será convertido para o tipo previsto (int).</p>
				</div>
			</div>



			<div class="row">
				<div class="col-md-12">
		
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
void srand(int seed);

// A função NÃO RETORNA um valor. Só precisamos chamá-la com um valor inicial.
					</code></pre>
				</div>
			</div>
			<br/>
			Embora ela seja importante, esta função apenas prepara a função rand() para seu posterior uso.

			<h1> RAND(); </h1>

			<p>Determinado um valor para a semente, podemos finalmente usar a função rand(). Diferentemente da srand(), não precisamos fornecer nenhum valor deparâmetro. Porém, precisamos salvar o valor recebido da função, ou seja, precisamos atribuir a rand() a uma variável!</p>


			<div class="row">
				<div class="col-md-12">
		
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
int rand(void);

// A função RETORNA um valor (aleatório), mas não possui nenhum argumento.
					</code></pre>
				</div>
			</div>
			<br/> 

			<p>Tudo quase pronto para começarmos a programar, só falta um detalhe! Ou melhor, uma biblioteca. Para o correto uso de ambas as funções, precisamos da biblioteca <stdlib>.</p>

			<p> Após toda essa burocracia, nosso código precisa ter esse layout:</p>

			<div class="row">
				<div class="col-md-12">
		
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
#include <stdlib.h>
// Outras eventuais bibliotecas
// Declarações de eventuais constantes

int main()
{
     int var;
     // Declarações de outras variáveis
     // Trechos do programa

     srand();
     // Mais trechos do programa

     var = rand();
     // Mais trechos do programa...

     return 0;
}
					</code></pre>
				</div>
			</div>	
			<br/>		
			<p>Sem mistérios até aqui, certo? Assimilar essa sintaxe no começo pode ser cansativo, mas com os exemplos abaixo você acaba se acostumando e vê que não é nenhum bicho de sete cabeças!</p>
		</div>
	</section>
	<section id="#nomeSection">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 2. Título Seção Par</h1>
					
					<ul class='material-list'>
						<?php 
							Material::pdf('Função rand()', 'files/15.pdf');
							Material::quiz('Quiz online', 'quiz.php?area=rand');
						?>
					</ul>					
					
					<!-- Navigation links -->
					<p class='links'>
						<a class='pull-left' href='matrizes.php'><i class='fa fa-2x fa-angle-left'></i> Matrizes </a>
						<a class='pull-right' href='bubblesort.php'> Bubblesort <i class='fa fa-2x fa-angle-right'></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	
<?php include "_view/footer.php"; ?>