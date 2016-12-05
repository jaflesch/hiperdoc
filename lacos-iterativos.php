<?php
	// includes...
	require_once "scripts/navigation.php";
	require_once "scripts/material.php";
	
	$page_title = "Laços Iterativos";
	include "_view/head.php";
	
	$link_navbar = Navigation::get_link('lacos');
	include "_view/header.php";
?>
	<!-- HTML Content -->
	<section id="#lacos">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 1. Comando FOR</h1>
					<p> 
						Até agora revisamos os comandos básicos como printf() e scanf() expressões aritméticas, lógicas e até uma instrução bem peculiar: o switch. Até o momento nossos programas -e algoritmos- são bem simples. Tudo normal visto que estamos aprendendo os conceitos de programação ainda. Porém, é só pensarmos um pouco em problemas mais complexos que as coisas começam a complicar. E o pior é que não precisa pensar muito.</p>

						<p> Então, como nos defenfermos de tamanha injustiça contra pobres novatos em programação? Fique tranquilo, pois neste tópico apresentaremos ferramentas muito poderosas e que vão estar em quase todos os programas de vocês daqui para a frente. </p>

						<p> Podemos dizer que os laços iterativos serão nossos super heróis (até encontrarmos problemas maiores). Agora, o que significa um laço iterativo? O que é iteração?´É de comer? </p>

						<p>Iteração nada mais é do que a repetição de instruções. Agora provavelmente sua próxima dúvida será: "E como isso vai me ajudar?". Ora, de diversas formas, pequena rúcula. A principal será, para nossa alegria (sem referências externas aqui, ok?), a diminuição do número de linhas que escreveremos, ou seja, vamos deixar a preguiça tomar conta de nossos dedos e todo o trabalho árduo fica por conta do pobre do computador.</p>

						<p>Aposto que se interessou agora que terá menos trabalho, né? Mas antes de apresentar a sintaxe do comando, mostremos um exemplo: fazer um programa que calcula a média das notas de 7 pessoas.</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
#include <stdio.h>
#include <stdlib.h>

int main()
{
     float nota, media = 0;

     printf("Digite a nota do aluno: ");
     scanf("%f", &nota);

     media = media + nota;

     printf("Digite a nota do aluno: ");
     scanf("%f", &nota);

     media = media + nota;

     printf("Digite a nota do aluno: ");
     scanf("%f", &nota);

     media = media + nota;

     printf("Digite a nota do aluno: ");
     scanf("%f", &nota);

     media = media + nota;

     printf("Digite a nota do aluno: ");
     scanf("%f", &nota);

     media = media + nota

     printf("Digite a nota do aluno: ");
     scanf("%f", &nota);

     media = media + nota;

     printf("Digite a nota do aluno: ");
     scanf("%f", &nota);

     media = media + nota;

     media = media / 7;

     printf("\n\n A media da turma eh: %.2f", media);


     return 0;
}
					</code></pre>

					<p> Não preciso nem dizer que o programa funciona, mas a quantidade de repetições das mesmas instruções é um tanto desconfortável. Mesmo àqueles que fazem copy paste (CTRL + C / CTRL + V), chega um ponto que se torna cansativo, que se perde no número de vezes que está repetindo. A situação se torna mais crítica quando trabalhamos com números que retratam a realidade: uma turma tem muito mais alunos que isso. Imagine uma turma de Cálculo I com mais de 70 alunos. Entende a seriedade do assunto? </p>

					<p> Laços iterativos não são uma ferramenta para preguiçosos na programação. Eles são extremamente úteis em diversos cenários, embora se prendam ao simples ato de repetir. Por exemplo, a tela de carregamento de um jogo: fica em uma imagem mais simples até carregar os dados importantes. Ou quando você está stalkeando alguém no Facebook: como acha que consegue buscar os dados do seu alvo? Existe todo um algoritmo por trás da busca e a iteração está presente. Quando estamos assistindo uma playlist e colocamos loop: novamente, iteração. </p>

					<p> Toda essa ambientalização com a iteração não é por nada. Essa funcionalidade é muito importante e você deve estudá-la "com carinho". </p>

				</div>
			</div>
		</div>
	</section>

	<section id="#LoopsFor">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> Loops no FOR</h1>
					<p> 
						Existem três maneiras de deixar seu laço iterativo em um loop infinito. O primeiro -e mais comum- é alterando o valor da variável de controle, nosso contador, dentro do laço. Existem casos que podemos fazer isso (dependendo da proposta do algoritmo), mas mesmo nessas situações são tomadas medidas de precaução. Nunca mexemos diretamente na variável. Caso contrário, o for itera todas as instruções e, inclusive, a que altera o contador. Consequentemente, mesmo o contador sendo incremento/decremento ele vai ter sempre seu valor modificado pelo comando em questão.
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include <stdio.h>
	#include <stdlib.h>

	int main()
	{
	     int i;

	     for(i = 0; i < 5; i++)
	     {
	          printf("%d \n", i);
	          i = 0;
	     }

	     return 0;
	}
					</code></pre>
					<pre class="exe">0
1
1
1
... LOOP! </pre>
				</div>					
					<p>
					No exemplo anterior, o programa começa a iteração com i = 0, imprime o valor e faz i = 0. Acaba as instruções a serem iteradas, o for automatica incrementa o i de acordo com nossa definição (i++). Novamente, imprimimos o valor de i (que é 1, agora), passamos seu valor para 0 e o for volta a incrementá-lo (i++). O processo se repetirá infinitamente.</p>

					<p>Portanto, mesmo que você tenha o maior controle sobre a variável de controle, evite ao máximo fazer modificações nela, pois além das chances de erro aumentarem significativamente, não é considerada uma alternativa elegante em programação justamente por deixar o código instável.</p>

					<p>Todas as iterações foram realizadas com tamanhos constantes, predeterminados. No início do tópico dissemos que os laços servem para nos poupar trabalho e os usamos para repetir instruções. Só que temos um problema: e se nosso programa precisa iterar comandos por um número determinado de vezes? Com o for, só podemos iterar uma vez que sabemos quantas vezes vamos repetir!</p>

					<p>Esse tipo de problema precisa contar com a ajuda de outros dois novos laços iterativos: while() e do... while().</p>

				</div>
			</div>
	</section>

	<section id="#ComandoWhile">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Comando WHILE()</h1>
					<p> 
						Chegamos ao nosso segundo comando de iteração. O while() difere do for principalmente pela sua sintaxe que oferece mais opções para a condição de término do laço. Porém, por fornecer essa liberdade ao programador, é muito comum as pessoas errarem na iteração, gerando vários loops no programa. Não se preocupe! Vamos analisar com cuidado cada termo que compõe o while(). Assim como o for, ele possui os mesmos três termos. A diferença é que a localização deles são em locais diferentes.</p>

						<p>Sem mais delongas, conheçamos esse garoto problema chamado while().</p>

					<h1> Sintaxe do Comando</h1>
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
int contador = 0;     // Precisamos inicializar a variável ao declará-la!

while(contador < condição de parada)
{
     /*
          Todas as instruções que você quer sejam iteradas (repetidas) vão aqui dentro
     */

     contador++;     // Precisamos modificar o contador manualmente!
}
					</code></pre>
				</div>					
					<p> Note que junto ao comando, só colocamos a condição de parada. O valor de início é definido antes de entrar no laço, pois se não definido, o programa fica instável rodando com lixo na memória e, se definimos o valor dentro do laço, estaríamos mexendo na variável de controle; logo, loop infinito. Por fim, o incremento/ decremento é feito dentro do while().</p>

					<p>Muitos podem pensar: "se o while() é tão chato assim, por que não usar apenas o for então?". Simples, nobre lagarta: seria tudo muito fácil se nossos programas repetissem um número definido de vezes as iterações. Pegando um exemplo simples: desenvolve um programa que executa até o usuário digitar um determinado valor.</p>

					<p>Com seus conhecimentos atuais, como você desenvolveria um algoritmo que resolvesse o problema? O único jeito de fazermos isso com o for é utilizando uma técnica que não é elegante. E digo isso justamente porque estamos fugindo da proposta do for -que é repetir um número conhecido de vezes algo-. Nesse caso, a solução (não ideal, que fique claro) seria:</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
#include <stdio.h>
#include <stdlib.h>

int main()
{
     int valor, i;
     int numeroSecreto = 4;

     for(i = 0; i < 10; i++)
     {
          printf("Digite um numero: ");
          scanf("%d", &valor);

          if(valor == numeroSecreto)
          {
               i = 10;
               printf("\n\n\tAcertou!");
          }

          else
               i = 0;
     }

     return 0;
}
					</code></pre>
					<pre class="exe">Digite um numero: 2
Digite um numero: 1
Digite um numero: 7
Digite um numero: 4

     Acertou!</pre>
				</div>	

				</div>
			</div>
	</section>
	<section id="#nomeSection">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 2. Título Seção Par</h1>
					
					
				</div>
			</div>
		</div>
	</section>
	<section id="#nomeSection">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> Material Complementar </h1>
					
					<ul class='material-list'>
						<?php 
							Material::pdf('Iteração com for', 'files/10.pdf');
							Material::pdf('Iteração com while', 'files/11.pdf');
							Material::web('Comandos de Repetição - PUC', 'http://www.inf.pucrs.br/~pinho/LaproI/ComandosDeRepeticao/Repeticao.html');
							Material::youtube('Programando em C - Aula 07', 'https://www.youtube.com/watch?v=rCFh-tvoXIc');
							Material::youtube('Programando em C - Aula 08', 'https://www.youtube.com/watch?v=ZQe-OSF5Txs');
							Material::quiz('Quiz online', 'quiz.php?area=lacos');
						?>
					</ul>					
					
					<!-- Navigation links -->
					<p class='links'>
						<a class='pull-left' href='switch.php'><i class='fa fa-2x fa-angle-left'></i> Switch</a>
						<a class='pull-right' href='vetores.php'>Vetores<i class='fa fa-2x fa-angle-right'></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>


<?php include "_view/footer.php"; ?>