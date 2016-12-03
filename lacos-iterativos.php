<?php
	// includes...
	require_once "scripts/navigation.php";
	
	$page_title = "Página Exemplo 2";
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

	<section id="#nomeSection">
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
					<pre class="exe">	0
1
1
1
... LOOP! </pre>
				</div>					


				</div>
			</div>
	</section>


	<section id="#nomeSection">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 2. Título Seção Par</h1>
					
					<p class='links'>
						<a class='pull-left' href='index.php'><i class='fa fa-2x fa-angle-left'></i> Título tópico anterior</a>
						<a class='pull-right' href='exemplo-2.php'>Título próximo tópico <i class='fa fa-2x fa-angle-right'></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>


<?php include "_view/footer.php"; ?>