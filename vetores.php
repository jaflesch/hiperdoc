<?php
	// includes...
	require_once "scripts/navigation.php";
	require_once "scripts/material.php";
	
	$page_title = "Vetores";
	include "_view/head.php";
	
	$link_navbar = Navigation::get_link('vetores');
	include "_view/header.php";
?>
	<!-- HTML Content -->
	<section id="#vetores">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> Declaração</h1>

<p>Você deve se lembrar do tópico anterior (espero eu) que os laços iterativos apareceram para facilitar nossa vida. E, de fato, facilitaram mesmo apesar de eventuais dores de cabeça e até tonturas, veja só, de tantos loops. Porém, nobre lagarta, ainda temos um problema. E digo mais: um problemão.</p>

<p>Esse problemão acontece justamente por causa dos laços iterativos. Não, não se preocupe. Você não foi enganado, o conteúdo apredindo vai sim facilitar sua vida, mas ainda existe uma situação que continua nos dando trabalho: variáveis. Desde as primeiras aulas, acredito eu que as variáveis estão presentes em seus códigos, afinal, elas são realmente muito úteis visto que armazenam dados que posteriormente usamos em nossos programas. No entanto, apesar de ajudarem, elas são muito atrapalhadas! Só conseguem carregar um valor por vez. Se pegarem um novo valor, elas perdem o antigo.</p>

<p>Todos os nossos códigos até agora estavam lindos (exceto o dos preguiçosos que não identam, porque né...) com funções e comandos que sempre nos ajudavam. Agora, mesmo com todas as instruções que temos em mãos, como você resolveria o seguinte problema: armazenar as notas de 30 alunos de uma turma?</p>

<p>Não seja egoísta: não venha me dizer que é um programa inútil! Imagine que umas das notas é a sua. Ok, agora o programa passou a ser útil, né? ótimo. Então me ajude e pense como podemos fazer isso?</p>

<p>
a) Criamos 30 variáveis e recolhemos os dados das 30 com scanf();
b) Criamos 30 variáveis e utilizamos um laço iterativo
c) Só precisamos de um laço e de uma variável: vamos recolhendo o valor de cada nessa variável
d) Chuta na C
e) Chora
Vish... Complicou? Vamos analisar nossas opções:
</p>

<p>
A) Funciona! Mas só é indicado para se fazer em dias de chuva que você esteja com tédio. Não é uma solução prática. Recolher os 30 valores é inevitável, precisamos mesmo fazer isso. O problema é repetir isso 30 vezes com 30 variáveis. Imagine se for um número ainda maior!

B) Depende! Se o laço possuir um if e um contador que checa e atribui o valor à variável, funciona, mas é ainda mais trabalhoso que a opção A). Agora, se não utilizarmos if, vamos recolher os 30 valores para as 30 variáveis mais de uma vez! Imagina utilizar um programa assim... o suicídio passa a ser uma obrigação!

C) Não funciona! A cada iteração perdemos o valor anterior da variável. No final do laço, só teremos a nota do último aluno.

D) Não!

E) Também não!
</p>
<p>
A solução é utilizarmos um novo recurso (sim, menti pra você e daí?). Chegou a hora de conhecermos os famosos arranjos. Se os laços iterativos repetiam instruções, os arranjos (ou vetores ou, ainda, arrays) funcionam para "repetir variáveis".</p>

<p> Frisarei desde o início: "repetir variáveis" entre aspas. Atente ao meu cuidado, pois não quero que entenda errado. Os vetores dão essa ideia de repetição se estiverem acompanhados de um laço iterativo, pois a estrutura deles nos dá liberdade para contornar aquele problema inicial apresentado.</p>

<p>Abaixo temos a declaração de uma variável que é vetor. Atente aos exemplos na sequência.</p>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
		
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
int variavel;     // Como declaramos uma variável normal

int vetor[TAMANHO DO VETOR];     // Como declaramos um arranjo
					</code></pre>
				</div>
			</div>

			<p>Quanto ao tipo de variável, vale as mesmas opções de antes. Podemos ter um dado int, float, double e até, em outro tópico, um caso especial que é o tipo char. A novidade é que, entre colchetes ( [ ] ), vamos definir o tamanho da nossa variável. Mas... o que é esse tamanho? Não é o tamanho do valor em si, mas... de uma maneira de fácil assimilação, seria a quantidade de variáveis que queremos. No nosso exemplo eram 30 alunos; logo, o tamanho do vetor seria [30].</p>

			<div class="row">
				<div class="col-md-12">
		
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
int vetor[30];     // Declaramos um vetor de números inteiros de tamanho 30!
					</code></pre>
				</div>
			</div>

			<p> E vetores não precisam ser apenas do tipo inteiro!</p>

			<div class="row">
				<div class="col-md-12">
		
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
float vetor[2];     // Declaramos um vetor de números reais
double vetor[8];     // Declaramos um vetor de números reais com dupla precisão
char vetor[10];     // Declaramos um vetor de caracteres
					</code></pre>
				</div>
			</div>			
			<p>Embora tenhamos acabado de conhecer como se declara um vetor, a questão é: e como funciona isso? Como acessar dados e tudo mais. Calma, já chegamos lá. A primeira coisa que você precisa saber é a seguinte: se a sua variável é um vetor, então os índices serão seus aliados.</p>

			<p>Índices servirão para acessarmos uma determinada posição do array. Por exemplo: se declararmos um vetor de 10 posições, ele terá 10 índices. No entanto, talvez seja um pouco confuso no início, mas esses 10 índices estão no intervalo [0, 9].</p>

			<p>Seria mais intuitivo se começasse no índice 1 e terminasse no 10, mas em computação, a maioria das coisas começa pelo 0, então podemos afirmar o seguinte:</p>

			<div class="row">
				<div class="col-md-12">
		
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
#include <stdio.h>
#include <stdlib.h>

int main()
{
     int vetor[4];     // Declaramos nosso vetor

     vetor[0] = 42;     // A primeira posição do vetor recebe 42

     printf("%d", vetor[0]);     // Imprimimos o conteúdo da primeira posição do vetor

     return 0;
}
					</code></pre>
					<pre class="exe">42</pre>
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
							Material::pdf('Arranjos unidimensionais', 'files/12.pdf');
							Material::web('Vetores e Matrizes - PUC', 'http://www.inf.pucrs.br/~pinho/LaproI/Vetores/Vetores.htm');
							Material::youtube('Programando em C - Aula 09', 'https://www.youtube.com/watch?v=NfC-bn3k2vo');
							Material::quiz('Quiz online', 'quiz.php?area=vetores');
						?>
					</ul>					
					
					<!-- Navigation links -->
					<p class='links'>
						<a class='pull-left' href='lacos-terativos.php'><i class='fa fa-2x fa-angle-left'></i>Laços Iterativos</a>
						<a class='pull-right' href='strings.php'>Strings<i class='fa fa-2x fa-angle-right'></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	
<?php include "_view/footer.php"; ?>