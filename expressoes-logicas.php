<?php
	// includes...
	require_once "scripts/navigation.php";
	require_once "scripts/material.php";

	$page_title = "Expressões Lógicas";
	include "_view/head.php";
	
	$link_navbar = Navigation::get_link('explog');
	include "_view/header.php";
?>
	<!-- HTML Content -->
	<section id="#op-logico">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 1. Operadores lógicos </h1>
					
					<p>
						Vimos no tópico anterior <a href='expressoes-aritmeticas.php'>expressões aritméticas</a>. Porém, programar em
						C não é apenas atribuir ou recolher dados, armazenando em variáveis, operando em cima deles, exibindo
						o resultado final na tela. 
					</p>
					
					<p>
						Esta primeira parte do tópico será uma introdução aos operadores lógicos, pois estes serão a base de
						todo o conteúdo aqui visto, uma vez que não podemos realizar testes em nossos programas sem eles.
					</p>
					
					<h2> 1.1. Operador de negação: <em>!</em> </h2>
					<table id='tb-not' class='operator'>
						<tr>
							<td class='operator' id='blank'></td>
							<td class='operator' id='symbol'>!</td>
						</tr>
						<tr>
							<td class='operator'>V</td>
							<td class='operator result'>F</td>
						</tr>
						<tr>
							<td class='operator'>F</td>
							<td class='operator result'>V</td>
						</tr>
					</table>
					
					<p> 
						O primeiro operador que estudaremos é o operador de negação. O nome é bem sugestivo e ele será usado
						para trocar o valor de uma informação.
					</p>
					
					<p>
						Na tabela verdade, é fácil observar que ao aplicarmos um valor ao operador negação, ele será seu 
						<strong>complemento</strong>. No caso, se temos verdade, a negação de verdade é falso. Analogamente, se temos
						falso, a negação de falso é	verdade. Bem tranquilo até aqui, certo?
					</p>
					
					<p>
						Para facilitar o entendimento, pensemos num exemplo mais comum: imagine que seu programa queira saber
						se um dado inserido pelo usuário é diferente de um determinado valor, digamos... 5. Nosso programa fará
						um teste: <em>"o valor inserido é igual a 5?"</em>. Se aplicarmos a negação neste teste, então o conjunto
						verdade	passa a ser o conjunto falsidade. Afinal, nosso teste passaria a ser <em> "o valor inserido é
						diferente de 5?"</em>.
					</p>
					
					<p>
						Pensando fora da caixinha, para entender a proposta em si da negação, vamos tomar a seguinte proposição:
						<em> O céu é azul </em>. Todos sabemos, espero eu, que a proposição é <strong>verdade</strong>. Se negarmos
						nossa ela, ou seja, <em>"O céu não é azul"</em>, então nossa proposição passa a ser <strong>falsa</strong>.
					</p>
					
					<p>
						Talvez seja um pouco abstrato este começo, especialmente se você nunca teve nenhuma aula sobre lógica,
						mas tenha paciência! Estamos desenvolvendo aos poucos a materia e, quando finalmente introduzirmos o comando
						<strong>if</strong> você não ficará tão perdido.
					</p>
					
					<h2> 1.2. Operador 'E' Lógico: <em>&&</em> </h2>
					
					<table id='tb-and' class='operator'>
						<tr>
							<td class='operator' id='blank'></td>
							<td class='operator' id='blank'></td>
							<td class='operator' id='symbol'>&&</td>
						</tr>
						<tr>
							<td class='operator'>V</td>
							<td class='operator'>V</td>
							<td class='operator result'>V</td>
						</tr>
						<tr>
							<td class='operator'>V</td>
							<td class='operator'>F</td>
							<td class='operator result'>F</td>
						</tr>
						<tr>
							<td class='operator'>F</td>
							<td class='operator'>V</td>
							<td class='operator result'>F</td>
						</tr>
						<tr>
							<td class='operator'>F</td>
							<td class='operator'>F</td>
							<td class='operator result'>F</td>
						</tr>
					</table>
					
					<p>
						O segundo operador, diferente do operador de negação, leva em conta duas afirmações para nossa proposição
						ser verdade ou não no teste.
					</p>
					
					<p>
						O "macete" da tabela verdade do <strong>operador lógico E (&&)</strong> é que ele só será verdade se, e
						somente se, as duas afirmações forem verdade. Ou seja, <em>sempre que houver uma afirmação falsa, a 
						proposição é falsa</em>.
					</p>
					
					<p>
						Seguindo o mesmo estilo de exemplos, imaginemos um programa -super útil- que informa ao usuário que
						ele é alto e rico somente se ele tiver uma altura maior que 2 metros e mais de 1 milhão no banco. Repare:
						a mensagem só vai ser impressa se as <strong>duas condições forem verdadeiras</strong>!
					</p>
					
					<p>
						Agora, dando um exemplo mais teórico, a proposição A é "o céu é azul" e a proposição B é "o mar é branco".
						Se fizermos utilizarmos a lógica nas duas proposições teremos <strong>A && B</strong>. O resultado seria
						<strong>falso</strong>! Isto porque se uma das proposições é falsa, então mesmo que a outra seja verdade,
						o "conjunto" passa a ser mentira. E, perdoe a redundância, é até lógico! Se uma pessoa fala uma frase com
						duas sentenças, sendo uma falsa, então a frase pode ser considerada uma mentira (é falsa).
					</p>
					
					<h2> 1.3 Operador 'OU' Lógico: <em>||</em> </h3>
				
					<table id='tb-or' class='operator'>
						<tr>
							<td class='operator' id='blank'></td>
							<td class='operator' id='blank'></td>
							<td class='operator' id='symbol'>||</td>
						</tr>
						<tr>
							<td class='operator'>V</td>
							<td class='operator'>V</td>
							<td class='operator result'>V</td>
						</tr>
						<tr>
							<td class='operator'>V</td>
							<td class='operator'>F</td>
							<td class='operator result'>V</td>
						</tr>
						<tr>
							<td class='operator'>F</td>
							<td class='operator'>V</td>
							<td class='operator result'>V</td>
						</tr>
						<tr>
							<td class='operator'>F</td>
							<td class='operator'>F</td>
							<td class='operator result'>F</td>
						</tr>
					</table>
					
					<p>
						O terceiro e último operador segue o estilo do <em>E lógico</em> e leva em conta duas afirmações para nossa
						proposição ser verdade ou falso no teste.
					</p>
					
					<p>
						Desta vez o "macete" da tabela verdade do <strong>operador lógico OU (||)</strong> é que ele só será verdade
						se tiver uma proposição verdadeira. Ou seja, <em>para ele ser falso, as duas proposições têm de ser 
						obrigatoriamente falsas</em>.
					</p>
					
					<p>
						Vamos reaproveitar o exemplo anterior e adaptá-lo para o contexto do <strong>OU lógico</strong>. 
						Imaginemos outro programa -também super útil- que informa ao usuário que ele é tem uma característica rara
						se possuir uma altura maior que 2 metros ou mais de 1 milhão no banco. Repare:
						a mensagem vai ser impressa se <strong>pelo menos</strong> uma condição for verdadeira (ele ter a altura
						maior que 2 metros, ele ter mais de 1 milhão no banco)! E, caso ambas condições sejam atendidas, continua
						verdadeiro!
					</p>
					
					<p>
						Por fim, complementando o exemplo mais teórico, a proposição A é "o céu é azul" e a proposição B é "o mar é
						branco". Se fizermos utilizarmos a lógica nas duas proposições teremos <strong>A || B</strong>. O resultado
						seria <strong>verdadeiro</strong>! Isto porque se uma das proposições é verdadeira, então mesmo que a outra
						seja falsa, o "conjunto" passa a ser verdade, pois estamos falando de pelo menos uma condição ser verdade.
						Repare que quando usamos uma frase com ou, temos essa possibilidade de manter a verdade na sentença, embora
						uma delas seja falsa. Se você disser que o seu time ganhou, ou empatou ou perdeu, embora seja meio maluco,
						você estará falando a verdade, afinal uma das condições será verdade.
					</p>

					<br/>
					<p>
						Esses três são os operadores lógicos que farão parte dos nossos testes. Existem outros, mas não faz parte
						do objetivo da disciplina estudá-los. Porém, aos interessados, estarão disponíveis materiais complementares
						sobre o assunto.
					</p>				
				</div>
			</div>
		</div>
	</section>
	<section id="#if">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 2. Comando IF </h1>
		
					<p>
						Finalmente está na hora de usarmos toda aquela teoria (massante) vista anteriormente nos nossos programas.
						Prometo que agora as coisas ficarão mais interessantes!
					</p>
					
					<p>
						Atente que até agora nossos programas sempre seguiram uma ordem de execução. Se nos guiássemos por
						fluxogramas, os programas sempre seguiriam uma única direção, um único caminho. Porém, o poder da
						programação vai muito além disso. Programas mais complexos necessitam de opções. O exemplo mais fácil
						que podemos pensar para ilustrar essa situação é um jogo. Jogos necessitam de inúmeras instruções e
						todas elas dependem de alguma <strong>condição</strong>. Em um jogo de tiro, você precisa ter munição
						para efetuar disparos. Num jogo de RPG, é necessário dinheiro para comprar itens, magias etc. A própria
						movimentação do personagem: se pressionamos as setas do teclado (ou WASD, para os íntimos), ocorre uma
						animação para ilustrar o personagem se movimentando na tela.
					</p>
					
					<p>
						Essas condições são essenciais para termos dinâmica no programa. E, com opções, voltando aos fluxogramas,
						nós passamos a ter mais de uma direção. Quando caímos numa <strong>condição</strong>, por definição, teremos
						uma <strong>bifurcação</strong>. Ou seguimos por um caminho ou pelo outro.
					</p>
					
					<p>
						Novamente, muito linda toda essa teoria por trás das coisas, mas, na prática, quando nos deparamos com
						uma situação de escolha em nossos programas, precisaremos de um novo recurso, uma nova instrução: e ela
						é justamente o comando <strong>if</strong> (em português, significa <strong>se</strong>).
					</p>
					
					<p>
						Repare que o nome <strong>if</strong> é sugestivo: "se isso", "se aquilo". Ele está nos dando condições.
						Podemos dizer que o comando if, ao contrário do printf() e scanf(), é um comando de <strong>teste</strong>.
						Nos testes, o que está em jogo é se a informação que passamos é verdadeira ou não. 
					</p>
					
					<p>
						A resposta sempre será binária: ou é verdade ou falsa. Não existe meio termo. Retratando novamente
						em fluxogramas, sempre teremos dois caminhos: um caminho para a resposta verdadeira e outro
						para a falsa.
					</p>
					
					<p>
						<strong>Relembrando:</strong> a apostila tem conteúdo acumulativo. Portanto, espera-se que você já domine os
						comandos <a href='introducao.php#printf'>printf()</a> e <a href='introducao.php#scanf'>scanf()</a>. Caso ainda
						não se sinta confortável, clica no link referente ao assunto e dê uma nova lida. Não se esqueça que existem
						exercícios disponíveis para praticar!
					</p>
			
					<h2> Sintaxe do Comando </h2>
					
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main() {

		if(Aqui irá o teste)
		{
			/*
				Dentro das chaves irão as instruções que queremos realizar
				se o teste for verdade
			*/
		}

		return 0;
	}
					</code></pre>
					<br/>
					
					<p>
						A sintaxe é bem tranquila, certo? Temos o comando <strong>if</strong>, o <em>teste que irá dentro dele
						entre parênteses</em> e o <em>conjunto de instruções (printf, scanf, cálculos etc) dentro das chaves </em>.
						Então vejamos um exemplo real na programação.
					</p>
					
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main() 
	{

		int a = 5;

		if(a == 5)
		{
			printf("a vale 5!");
		}

		return 0;
	}
					</code></pre>
					<pre class="exe"> A vale 5! </pre>
					
					<p>
						Fizemos um teste! Por mais estranho que pareça, <strong>testamos se a é igual a 5</strong>. Caso esteja
						estranhando o duplo sinal de igual, lembre-se que em programação um único sinal de igual ( = ) significa
						<em> receber </em>. <strong>O duplo sinal ( == ) significa testar se é igual</strong>!
					</p>
					
					<p>
						E não pára por aí, outros exemplos de teste:
					</p>
					
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	if(a > 5)     // a é maior que 5?
	if(a < 5)     // a é menor que 5?

	if(a >= 5)     // a é maior ou igual a 5?
	if(a <= 5)     // a é menor ou igual a 5?

	if(a != 5)     // a é diferente de 5?
	if(!(a == 5))  // a é diferente de 5?
					</code></pre>	
					<br/>
					
					<p>
						Nos dois últimos exemplos escrevemos a mesma coisa; porém, de modos diferentes. Note que usamos
						o <a href='#not-tittle' id='click'>operador lógico de negação</a> (por isso a importância de entender
						como eles funcionam).
					</p>
					
					<p>
						Já vimos os testes mais recorrentes quando usamos <strong>if</strong>. Agora analisaremos melhor o
						comportamento do código quando o teste resulta em verdadeiro, ou seja, quando ele executa aquele bloco
						de comandos.
					</p>
					
					<p>
						O exemplo a seguir ilustra bem as duas possibilidades do if.
					</p>
					
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	// Primeiro Programa:

	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
		int valor = 1;

		if(valor == 1)
		{
			printf("O teste era verdadeiro! \n");
			printf("E o valor antes de entrar no if eh: %d \n\n", valor);

			valor = 2;
		}

		printf("Valor = %d", valor);

		return 0;
	}
					</code></pre>	
					<pre class='exe'> O teste era verdadeiro!
 E o valor antes de entrar no if eh: 1

 Valor = 2</pre>
				
				<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	// Segundo Programa:

	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
		int valor = 0;

		if(valor == 1)
		{
			printf("O teste era verdadeiro! \n");
			printf("E o valor antes de entrar no if eh: %d \n\n", valor);

			valor = 2;
		}

		printf("Valor = %d", valor);

		return 0;
	}
					</code></pre>	
					<pre class='exe'> Valor = 0</pre>
					<br/>
					
					<p>
						Entendeu a diferença? Tudo que estiver dentro do if será executado 
						<strong>somente se for verdadeiro</strong>. Porém, no último printf() ele é executado normalmente, afinal,
						não existe uma condição para usá-lo ou não.
					</p>
					
					<h2> 2.1 Comandos Simples </h2>
					
					<p>
						Em todos os exemplos que usamos até agora, os comandos do if estavam entre chaves (<strong>{ ... }</strong>).
						Porém, se nosso if realizará <strong>apenas uma instrução</strong>, as <strong>chaves são opcionais</strong>.
					</p>
					
					<p>
						Entretanto, essa dica, embora torne o código mais legível, requer cuidados: geralmente as pessoas quando
						programam usam esse procedimento sem as chaves quando o if tem mais de 2 instruções. O resultado disso é
						que ele executará apenas a primeira instrução se o teste for verdadeiro e a segunda instrução -que deveria
						estar inclusa nas chaves do if- será sempre executada, já que não existe uma condição para ela ser executada
						ou não!
					</p>
					
					<p>
						Vamos adaptar o exemplo anterior para você entender o que acontece.
					</p>
					
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	// Primeiro Programa:

	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
		int valor = 1;

		if(valor == 1)
			printf("O teste era verdadeiro! \n");
			printf("E o valor antes de entrar no if eh: %d \n\n", valor);

			valor = 2;

		printf("Valor = %d", valor);

		return 0;
	}
					</code></pre>	
					<pre class='exe'> O teste era verdadeiro!
 E o valor antes de entrar no if eh: 1

 Valor = 2</pre>
				
				<div class="console-header"><img src="_img/console/icon.png"></div>
				<pre><code class="cpp">
	// Segundo Programa:

	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
		int valor = 1;

		if(valor == 0)		
			printf("O teste era verdadeiro! \n");
			printf("E o valor antes de entrar no if eh: %d \n\n", valor);

			valor = 2;
		

		printf("Valor = %d", valor);

		return 0;
	}
					</code></pre>	
					<pre class='exe'> E o valor antes de entrar no if eh: 1

 Valor = 2</pre>
					<br/>
					
					<p>
						Repare que apenas o primeiro printf() foi omitido no segundo programa. Sem as chaves, apenas a primeira 
						instrução é executada ou não se o teste for verdadeiro. Logo, as duas outras instruções são executadas
						normalmente no programa. Portanto, atenção redobrada ao usar um if sem chaves!
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="#if-else">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 3. IF / Else </h1>
					
					<p>
						Todos os exemplos anteriores tinham o seguinte formato: 
						
						<ul style='list-style:none; font-style: italic'>
							<li style='padding: 5px 0;'> "[...] Instruções do programa </li>
							<li style='padding: 5px 0;'> <strong>Se tal coisa... então faça isso </strong></li>
							<li style='padding: 5px 0;'> Instruções do programa [...]" </li>
						</ul>
					</p>
					
					<p>
						Observe que os condicionais já trouxeram um grande leque de recursos para nossos programas.
						Porém, suponha uma situação bem simples: imprimir na tela se um número é par ou ímpar. Com o que já
						aprendemos sobre <strong>if</strong>, provavelmente seu algoritmo seria esse:
					</p>
					
				<div class="console-header"><img src="_img/console/icon.png"></div>
				<pre><code class="cpp">
	// Segundo Programa:

	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
		int numero = 3;

		if(numero % 2 == 0)     // O operador % pega o resto da divisão por 2 de numero
			printf("O numero eh par!");

		if(numero % 2 != 0)     // Se o resto não for zero, então é impar
			printf("O numero eh impar!");

		return 0;
	}				</code></pre>	
					<pre class='exe'> O numero eh impar! </pre>
					<br/>
					
					<p>
						Nosso programa funcionou, mas não é motivo para comemorarmos... ainda! Repare que fizemos dois testes: um
						para ver se a conta tinha um resultado <strong>igual</strong> a zero e outro se o resultado era
						<strong>diferente</strong> de zero. Note que um teste é o complemento do outro. Ou seja, o que é verdade para
						um é falso para o outro.
					</p>
					
					<p>
						Convenhamos que essa tática "quebra o galho", mas seria muito melhor se existisse um comando para testar o
						complemento da condição. E não é que os deuses da programação pensaram nisso também?
					</p>
					
					<p>
						O comando if realiza um teste e, se verdadeiro, executa um conjunto de instruções. Ao final das instruções
						do if, se inserirmos o comando <strong>else</strong> e instruções abaixo dele, então estamos dizendo para
						fazer estas instruções sempre que o nosso teste (aquele lá do if) for <strong>falso</strong>!
					</p>
					
					<p>	Adaptando essa nossa nova realidade, nossos códigos passarão a ter o seguinte formato: </p>
					
					<ul style='list-style:none; font-style: italic'>
						<li style='padding: 5px 0;'> "[...] Instruções do programa </li>
						<li style='padding: 5px 0;'> <strong>Se tal coisa... então faça isso </strong></li>
						<li style='padding: 5px 0;'> <strong>Senão... faça isso </strong></li>
						<li style='padding: 5px 0;'> Instruções do programa [...]" </li>
					</ul>
					
					<p>
						Para mostrar a diferença e como se torna mais intuitivo o uso do <strong>else</strong>, iremos adaptar
						o exemplo do "par ou ímpar". Confira:
					</p>
					
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	// Segundo Programa:

	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
		int numero = 3;

		if(numero % 2 == 0)     // Se o resto da divisão for zero, então...
			printf("O numero eh par!");

		else     // Caso contrário ...
			printf("O numero eh impar!");

		return 0;
	}
	
				</code></pre>	
					<pre class='exe'> O numero eh impar! </pre>
					<br/>
					
					<p>
						Aparentemente, ficou mais limpo o código. E a legibilidade é uma das grandes vantagens do else. A outra
						será vista daqui a pouco. Além disso, é preciso lembrar que as
						<em>mesmas regras do if valem para o else</em>. Portanto, se quisermos mais de uma instrução para ser
						executada no else, precisamos usar chaves (<strong>{ }</strong>). Analogamente, se apenas uma instrução
						é executada, as chaves são opcionais!
					</p>
					
					<p>
						Podemos, ainda, dizer que o primeiro caso que estudamos, apenas o comando <strong>if (sem o else)</strong>,
						possui na verdade um else implícito que tem como instrução "não faça nada". Por mais anormal que pareça, é
						perfeitamente viável mandar o programa não fazer nada. Aliás, é muito comum as pessoas errarem a sintaxe do
						<strong>if</strong> e mandarem o programa não executar instrução alguma caso o teste seja verdadeiro. Veja
						os exemplos:
					</p>
				
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	// --- Programa A ---

	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
		int numero = 1;

		if(numero == 1)
			printf("Esta eh uma frase aleatoria! :D");

		return 0;
	}
	
				</code></pre>	
					<pre class='exe'> Esta eh uma frase aleatoria! :D </pre>
					
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	// --- Programa B ---

	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
		int numero = 1;

		if(numero == 1)
			printf("Esta eh uma frase aleatoria! :D");

		else;

		return 0;
	}	
				</code></pre>	
					<pre class='exe'> Esta eh uma frase aleatoria! :D </pre>
				
				
				<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	// --- Programa C ---

	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
		int numero = 2;

		if(numero == 1);
			printf("Esta eh uma frase aleatoria! :D");

		return 0;
	}	
				</code></pre>	
				<pre class='exe'> Esta eh uma frase aleatoria! :D </pre>
				
				<div class="console-header"><img src="_img/console/icon.png"></div>
				<pre><code class="cpp">
	// --- Programa D ---

	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
		int numero = 2;

		if(numero == 1);
			printf("Esta eh uma frase aleatoria! :D");

		return 0;
	}	
				</code></pre>	
				<pre class='exe' style='color: #f75964;'> Erro ao compilar o programa! </pre>
				<br/>

				<p>
					Vamos às explicações! O <em>programa A</em> não tem nada de novo. Ele apenas faz um teste e imprime uma mensagem
					se o teste for verdadeiro.
				</p>
				
				<p>
					O <em>programa B</em> faz exatamente a mesma coisa que o programa A. A diferença é que ele possui um else
					e, entre a palavra else e o ponto-e-vírgula temos que instrução? Nenhuma. Logo, estamos mandando o nosso
					programa fazer nenhuma instrução se o teste for falso! Este exemplo demonstra que o else está implícito em
					todo if que não é "casado com um else". De qualquer forma, é apenas um exemplo para facilitar a compreensão
					de ambos comandos. <strong>Na hora de programar, se não existe a necessidade de usar else, não use! Um
					programa com este formato, com else sem nenhuma instrução, não é uma boa técnica de programação!</strong>
				</p>
				
				<p>
					O <em>programa C</em> exibe um erro muito comum com o comando if. Não se deve usar ponto-e-vírgula na linha
					que escrevemos o if e seu teste. Se cometermos este equívoco, similar ao caso do else, vamos mandar o
					programa executar nenhuma instrução se o teste for verdadeiro e, todos comandos que deveriam ser realizados
					apenas se o teste fosse verdade, serão executados independente de qualquer valor lógico.
				</p>
				
				<p>
					O <em>programa D</em> está tão errado que nem compila. Além do mesmo erro do programa C, ele tem um else
					semelhante ao programa B. O porquê dele não compilar é simples: temos um if que se o teste for verdadeiro,
					não faz nada e na sequência temos um printf. Quando o else aparece, ele está na espera de if imediatamente
					anterior a ele. Porém, quem está fazendo essa função é o printf, por isso o erro de compilação.
				</p>
				
				<p>
					De teoria acabamos aqui. É altamente recomendado que você pratique bem com exemplos extremamente simples,
					ambas instruções, pois o próximo assunto deste tópico pegará estes conceitos e mostrará exemplos mais
					complexos (leia-se sua cabeça vai explodir).
				</p>
				
			</div>
		</div>
	</section>
	<section id="#if-else-anin">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 4. IF / Else Aninhados </h1>
					
					<p>
						Esta é a parte final do tópico e apresentaremos uma técnica similar ao segundo assunto (if / else). A 
						diferença é que este método embora seja de fácil aplicação, requer bastante atenção na execução, pois
						é mais fácil ainda o programador se perder nas linhas de código ou -pior ainda- o algoritmo ficar confuso
						demais e com erros lógicos.
					</p>				
					
					<p>
						Para abordar melhor um problema que certamente enfrentaremos só com os nossos conhecimentos, pense em <em>
						um programa que imprime três mensagens diferentes: uma quando o valor da variável é 1, outro quando é 2 e
						outro quando o valor é 3</em>.
					</p>
					
					<p>
						Até onde vimos, o melhor a fazer seria um if / else que funciona para dois dos três valores e mais um if
						que testa o outro valor. Funciona? Claro que sim, mas <strong>não é eficiente</strong>.
					</p>
					
					<p> Essa é justamente a outra vantagem do uso de if / else (aninhado ou não): além da legibilidade a eficiência.
						Dessa forma, quando um teste é verdadeiro, mesmo que ele tenha else, aquele trecho não é testado. Pode
						parecer uma diferença desprezível de tempo no nosso universo acadêmico (e realmente é). A questão é que um 
						aplicativo de verdade tem milhares de linhas de código e qualquer otimização do algoritmo resulta em uma
						melhora de performance significativa. 
					</p>
					
					<p>
						Tá, tudo bem... eu sei o que você está pensando: deixemos esse preciosismo para as grandes empresas. Justo.
						Porém, não podemos deixar de lado a questão da legibilidade e, claro, as boas técnicas de programação.
						Portanto, sempre que possível, evite usar <strong>if</strong>s que são um o oposto do outro: utilize
						o <strong>else</strong>.
					</p>
					
					<p>
						Após essas observações, voltemos ao nosso problema inicial. Como resolver de um jeito simples e eficiente?
						Uma solução muito prático é criar <strong>testes aninhados</strong>. A ideia é, após um if colocamos um
						else seguido de outro teste ao invés de instruções. Ou seja, se tínhamos um if / else, agora teremos um
						if / else if. É válido lembrar que nesse formato, trataremos dois casos apenas. Portanto, precisamos de
						mais um else (para o segundo if), o que nos dá a seguinte expressão: <strong> if / else if / else </strong>.
					</p>
					
					<p>
						Complicou de vez, né? Tudo bem, vamos mostrar como seria o algoritmo para este problema. Faremos dois
						programas: o primeiro, de maneira incorreta usará apenas <strong>if</strong> enquanto o segundo usará
						<strong>if / else </strong> aninhados.
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
		int numero;

		printf("Digite um numero entre 1 e 3 (inclusive):");
		scanf("%d", &numero);

		if(numero == 1)     // Se o numero for 1, então...
			printf("Os ultimos serao os primeiros.");

		else if(numero == 2)     // Caso contrário, se for 2, então...
			printf("Acabei de lembrar do Vasco da Gama...");

		else if(numero == 3)     // Caso contrário, se for 3, então... 
			printf("Boatos que a Valve nao conhece este numero!");

		else     // Senão...
			printf("Alguem nao soube ler as instrucoes!");

		return 0;
	}
				</code></pre>	
					<pre class='exe'> Digite um numero entre 1 e 3 (inclusive): 2
 Acabei de lembrar do Vasco da Gama...</pre>
 				<br/>

 				<p>
					Vale lembrar que <strong>todas as regras anteriores continuam valendo aqui</strong>. Portanto, <em>não
					coloque a vírgula no lugar errado </em> e as <em>instruções do seu teste devem estar entre chaves se for
					mais de uma</em>! Se for só uma instrução vale a máxima: é facultativo o uso.
				<p>
				
				<p>
					Não existe limite no número de aninhamentos. Essa técnica é muito útil quando queremos determinar 
					intervalo de valores. Observe:
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
		float altura;

		printf("Digite sua altura: ");
		scanf("%f", &altura);

		if(altura < (float)0.0)     // Se menor que 0
			printf("Acho que voce bugou.");

		else if(altura < (float)1.30)     // Caso contrário, se está entre [0, 1.29]
			printf("Vish...");

		else if(altura < (float)1.50)     // Caso contrário, se está entre [1.30, 1.49]
			printf("Bom... sempre tem alguem menor.");

		else if(altura < (float)1.70)     // Caso contrário, se está entre [1.50, 1.69]
			printf("Parabens por esse feito super comum!");

		else if(altura < (float)1.90)     // Caso contrário, se está entre [1.70, 1.89]
			printf("Virar jogador de basquete nao eh mah ideia.");

		else     // Caso contrário, se maior que 1.90
			printf("Caramba, alimentacao regrada a Toddynho!");

		return 0;
	}
				</code></pre>	
					<pre class='exe'> Digite sua altura: 1.80
 Virar jogador de basquete nao eh mah ideia.</pre>
 					<br/>

 					<p>
						Apenas explicando o exemplo anterior super criativo... veja que elaboramos o algoritmo de maneira sequencial
						deixando mais fácil o controle dos intervalos. Ou seja, se não está na condição 'x' então está na 'y', se não
						está nela, então está na 'z' e por aí vai até cair no último else que engloba todos os casos do complemento.
						Novamente, perceba que é garantido que todos os intervalos são satisfeitos.
					</p>
					
					<p>
						Sanando possíveis dúvidas, a instrução para converter em <strong>float</strong> o valor da comparação
						torna-se necessário porque o compilador sempre trabalhará com a maior precisão em números reais. Dessa forma,
						aquele valor 1,30 é um <em>double</em> e não <em>float</em>. Se não especificarmos que queremos um float,
						há grandes chances de conflito e dessa forma o if não funcionará direito.
					</p>
					
					<p>
						Fica como sugestão tirar todos (float) e ver como o programa se comporta!
					</p>
					
					<p>
						Neste tópico vimos: <a href='#op-logicos' id='click-op'>operadores lógicos</a>, 
						<a href ='#if' id='click-if'>if</a>, <a href='#if-else' id='click-if-else'>if / else</a>
						e <a href='#if-else-anin' id='click-if-else-anin'>if / else aninhado</a>. Estes três últimos
						possuem o mesmo príncipio e são fundamentais para você sobreviver na disciplina. Embora possa ter sido
						massante este conteúdo, na verdade ele é bem fácil e, depois que se entende o princípio, muito intuitivo.
						A primeira seção apenas introduz as operações lógicas que usamos nos testes. As demais explicam as
						situações de uso mais comuns nos algoritmos da cadeira. Se você entender um if / else, vai entender tanto
						a versão mais simples (apenas if) quanto a complexa (aninhado). Sugere-se fortemente que tentem resolver
						os exercícios propostos ou, ao menos, dêem uma olhada no gabarito que está incluso. <em>A teoria nos auxilia
						no aprendizado, pois sana as dúvidas, mas é apenas na prática que surgem as dúvidas. E quanto mais dúvidas
						são esclarecidas, maior é o domínio do conteúdo</em>!
					</p>
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
							Material::pdf('Arquivo PDF', 'files/nome_topico/nome_arquivo.pdf');
							Material::web('Página Web', 'files/nome_topico/nome_arquivo.pdf');
							Material::ppt('Arquivo PowerPoint', 'files/nome_topico/nome_arquivo.pdf');
							Material::doc('Arquivo Word', 'files/nome_topico/nome_arquivo.pdf');
							Material::youtube('Vídeo', 'files/nome_topico/nome_arquivo.pdf');
							Material::quiz('Quiz online', 'quiz.php?area=introducao');
							Material::home('Arquivo com exercícios + gabaritos', 'files/nome_topico/nome_arquivo.pdf');
						?>
					</ul>					
					
					<!-- Navigation links -->
					<p class='links'>
						<a class='pull-left' href='expressoes-aritmeticas.php'><i class='fa fa-2x fa-angle-left'></i> Expressões Aritméticas </a>
						<a class='pull-right' href='switch.php'> Switch <i class='fa fa-2x fa-angle-right'></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	
<?php include "_view/footer.php"; ?>