<?php
	// includes...
	require_once "scripts/navigation.php";
	
	$page_title = "Página Exemplo 2";
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
					<h1> Exemplo </h1>
		
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
						int variavel;     // Como declaramos uma variável normal

						int vetor[TAMANHO DO VETOR];     // Como declaramos um arranjo
					</code></pre>
					<pre class="exe">	Tela para exibir resultados do printf() </pre>
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