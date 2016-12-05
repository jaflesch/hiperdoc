<?php
	// includes...
	require_once "scripts/navigation.php";
	require_once "scripts/material.php";

	$page_title = "Switch";
	include "_view/head.php";
	
	$link_navbar = Navigation::get_link('switch');
	include "_view/header.php";
?>
	<!-- HTML Content -->
	<section id="comando">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> Estrutura comando Switch()</h1>
					
					<p>
						Talvez tenha causado algumas dores de cabeça, mas <a href='exp-logicas.php'>expressões lógicas</a> são
						cruciais ao longo da disciplina e principalmente para quem quiser continuar programando. Porém, nem só
						de <strong>if/ else</strong> vive o programador. Existe outra ferramenta para um caso especial de teste:
						o <strong>switch</strong>.
					</p>
					
					<p>
						Vimos que o <em>if</em> era muito versátil. Podíamos fazer teste para saber se um valor era <strong>
						maior, maior ou igual, menor, menor ou igual, igual ou diferente</strong> de outro valor. O switch não é tão
						poderoso, possui algumas limitações, mas é excelente quando temos vários testes sucessivos para saber se
						o valor é igual a outro.
					</p>
					
					<p>
						Em outras palavras, imagine que você precisa desenvolver em algum universo paralelo o seguinte programa:
						"Faça um algoritmo que o usuário digita o número que tirou ao jogar um dado convencional (de 1 a 6) e,
						para cada número, será impresso uma mensagem diferente."
					</p>
					
					<p>
						Até o momento, só conhecemos <em>if / else</em> e já dá pra saber que será bem chato esse programa, por mais simples
						que seja, não é verdade? Por ser um pouco trivial o algoritmo, provavelmente sua solução será esta:
					</p>
					
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main() 
	{
		int dado;

		printf("Digite o numero obtido do dado: ");
		scanf("%d", &dado);

		if(dado == 1)
			printf("Que sorte hein... ");

		else if(dado == 2)
			printf("Mehhh...");

		else if(dado == 3)
			printf("Parabens por esse grande feito.");

		else if(dado == 4)
			printf("Nada mal. hmpf");

		else if(dado == 5)
			printf("Pff! Posso fazer melhor, sabia?");

		else if(dado == 6)
			printf("PURA SORTE OK?");

		else
			printf("Boa tentativa, espertinho(a)!")

		return 0;
	}
					</code></pre>
					<br/>

					<p>
						Como podemos ver, o algoritmo para resolver é fácil: testar todas 6 combinações possíveis e ainda temos o
						else para garantir eventuais imprevistos. Muito simples. Aí você pergunta: tá, se é tão simples assim, porque
						você quer que eu grave mais uma coisa? E eu respondo: <strike>porque o professor vai cobrar na prova</strike>
						porque é mais um recurso ao nosso dispor. Lembre-se que não existe uma fórmula para um algoritmo, ele não é
						genérico. Portanto, já dizia a máxima: "cada caso é um caso".
					</p>
					
					<p>
						E, para quem gosta de ter um código mais limpo, usar um <strong>switch</strong> muitas vezes torna mais
						legível e organizado o código.
					</p>

					<h2> Sintaxe do comando </h2>

					<p> 
						O comando <strong>switch</strong> é composto por 2 termos importantes (<em>nome da variável</em>, 
						<em>case</em>) e outros 2 (<em>break</em>, <em>default</em>) que, embora sejam quase sempre usados, não
						são obrigatórios.
					</p>
					
					<p>
						(Para ajudar na compreensão da sintaxe, faremos um exemplo passo-a-passo convertendo o algoritmo do
						exemplo	anterior só com if / else aninhado para switch.)
					</p>
					
					<p>
						O primeiro termo é bem simples, vamos colocar o nome da variável entre parênteses após a palavra reservada
						<em>switch</em>. Logo, teríamos <strong>switch(dado)</strong>.
					</p>
					
					<p>
						A próxima etapa é colocar a palavra "<strong> case (valor) :</strong> ". Repare que após case 
						precisamos colocar um valor (o parênteses é opcional) e, na sequência dois pontos. Este sempre será o
						formato do <em>case</em>. Assim, teríamos <strong> case 1: ...</strong>, <strong> case 2: ...</strong>, ...,
						<strong> case 6: ...</strong> .
					</p>
					
					<p>
						O outro termo, este opcional, é o <em>default: </em>. Pode-se dizer que ele é o sinônimo do <em>else</em>.
						Toda vez que um valor que não está nos cases é enviado ao switch, se houver o default, este será executado.
						Adaptando o exemplo, lá no último else, teríamos <strong> default: ...</strong> .
					</p>
					
					<p>
						O último termo é o <strong>break</strong>. Via de regra sempre o usamos, pois sem ele o switch "se perde".
						Porém, eu o classifiquei como opcional porque as vezes é interessante o switch "se perder" para certos
						programas. Por exigir um pouco mais de atenção, trataremos melhor do <em>break</em> na próxima seção deste
						tópico.
					</p>
					
					<p>
						Certo, agora vamos juntar as transformações mencionadas e montar o programa apenas com o switch. Ele ficaria
						assim:
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
		int dado;

		printf("Digite o numero obtido do dado: ");
		scanf("%d", &dado);

		switch(dado)
		{
			case 1: printf("Que sorte hein... ");

			case 2: printf("Mehhh...");

			case 3: printf("Parabens por esse grande feito.");

			case 4: printf("Nada mal. hmpf");

			case 5: printf("Pff! Posso fazer melhor, sabia?");

			case 6: printf("PURA SORTE OK?");

			default: printf("Boa tentativa, espertinho(a)!");
		}

		return 0;
	}
					</code></pre>
					<br/>

					<p>
						Uma <strong>observação importante</strong>: se o switch possuir mais de um case, então é obrigatório o 
						uso de chaves! Todavia, se for apenas um case é facultativo o uso, embora seja mais prático trabalhar com 
						if nesse caso, pois a sintaxe é mais prática.
					</p>
					
					<p>
						Contudo, se você testar o programa (copie o código acima e execute-o no Codeblocks) e digitar qualquer
						número entre 1 e 6 verá que nem tudo saiu como esperado. Aliás, está bem diferente do esperado!
						Para solucionar esse problema, precisaremos analisar melhor o termo <em>break</em> que já citamos.
					</p>

					<h2> O comando break </h2>

					<p>
						Como acabamos de dizer, sem o comando <strong>break</strong> o programa não vai se comportar direito.
						Mas, para os preguiços de plantão, o que acontece se digitarmos o número 2, por exemplo?
					</p>
					
					<p>
						A saída do programa será exatamente essa:
					</p>

					<pre class="exe"> Digite o numero obtido do dado: 2
 Mehhh...Parabens por esse grande feito.Nada mal. hmpf Pff! Posso fazer melhor, sabia?PURA SORTE OK?Boa tentativa, espertinho(a)! </pre>
 					<br/>

 					<p>
						É... acho que não é bem o que esperávamos. Já sabemos que o <em>break</em> tem uma parcela de culpa, mas
						por que isso acontece?
					</p>
					
					<p>
						Uma dica está no próprio nome do comando: break, traduzindo do inglês, significa quebrar, pausar. Ou seja,
						ele vai interromper a execução do switch assim que o compilador ler essa instrução. Confuso? Então vamos
						colocar apenas um <strong>break no case 4</strong> e continuaremos dizendo que tiramos o número 2 no dado.
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
		int dado;

		printf("Digite o numero obtido do dado: ");
		scanf("%d", &dado);

		switch(dado)
		{
			case 1: printf("Que sorte hein... ");

			case 2: printf("Mehhh...");

			case 3: printf("Parabens por esse grande feito.");

			case 4: printf("Nada mal. hmpf");
				break;

			case 5: printf("Pff! Posso fazer melhor, sabia?");

			case 6: printf("PURA SORTE OK?");

			default: printf("Boa tentativa, espertinho(a)!");
		}

		return 0;
	}
					</code></pre>
					<pre class="exe"> Digite o numero obtido do dado: 2
 Mehhh...Parabens por esse grande feito.Nada mal. hmpf </pre>
					<br/>

					<p>
						Opa! Sentiu a leve diferença? Quando o programa chegou no case 4, ele imprimiu a mensagem e encontrou um
						break ali. O case 5 e 6 que tinham suas mensagens impressas na execução anterior não apareceram. Portanto,
						usamos o <strong>break</strong> para cortar a execução.
					</p>
					
					<p>
						No universo das analogias, vamos dizer que o <strong>switch</strong> é aquela pessoa extremamente afobada,
						que faz tudo às pressas. Cabe a você dizer para ele quando parar!
					</p>
					
					<p>
						Alguns podem pensar: <em>"tudo bem, então se for assim eu preciso dizer para ele parar sempre?"</em> Sim,
						precisa. No caso, para cada case vai existir um break (para este exemplo!), porque queremos imprimir apenas
						uma mensagem para cada valor do dado.
					</p>
					
					<p>
						O que nos leva ao seguinte código:
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
		int dado;

		printf("Digite o numero obtido do dado: ");
		scanf("%d", &dado);

		switch(dado)
		{
			case 1: printf("Que sorte hein... ");
				break;

			case 2: printf("Mehhh...");
				break;

			case 3: printf("Parabens por esse grande feito.");
				break;

			case 4: printf("Nada mal. hmpf");
				break;

			case 5: printf("Pff! Posso fazer melhor, sabia?");
				break;

			case 6: printf("PURA SORTE OK?");
				break;

			default: printf("Boa tentativa, espertinho(a)!");
		}

		return 0;
	}
					</code></pre>
					<pre class="exe"> Digite o numero obtido do dado: 2
 Mehhh... </pre>
					<br/>

					<p> E se digitarmos 1, 5, e 8? </p>
				
					<pre class="exe"> Digite o numero obtido do dado: 1
 Que sorte hein...</pre>	
					
					<pre class="exe"> Digite o numero obtido do dado: 5
 Pff! Posso fazer melhor, sabia?</pre>	
					
					<pre class="exe"> Digite o numero obtido do dado: 8
 Boa tentativa, espertinho(a)!</pre>

 					<p>
						É válido lembrar que o <em>default</em> é opcional. Se não colocássemos ele e digitássemos 8,
						o compilador iria procurar algum <em>case</em> para o número 8, se não achasse, procuraria o default, se
						também não o achasse, o switch terminaria e nada seria feito.
					</p>
					
					<p>
						Ainda sobre o <em>default</em>, sua posição no <em>switch</em> cabe ao programador decidir.
						Geralmente se coloca no final do switch (porque dá a ideia do <em>else</em>), mas é possível colocá-lo
						tanto no começo quanto no meio do código. Contudo, é importante lembrar que, nesses casos, é
						necessário utilizar um <em>break</em> ou voltaremos ao problema anterior! (Repare que nos exemplos
						anteriores, o default não possui break porque não existe nenhuma outra instrução abaixo dele!)
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
		int dado;

		printf("Digite o numero obtido do dado: ");
		scanf("%d", &dado);

		switch(dado)
		{
			case 1: printf("Que sorte hein... ");
				break;

			case 2: printf("Mehhh...");
				break;

			case 3: printf("Parabens por esse grande feito.");
				break;

			case 4: printf("Nada mal. hmpf");
				break;

			case 5: printf("Pff! Posso fazer melhor, sabia?");
				break;

			default: printf("Boa tentativa, espertinho(a)!");

			case 6: printf("PURA SORTE OK?");
				break;
		}

		return 0;
	}
					</code></pre>
					<pre class="exe"> Digite o numero obtido do dado: 2
 Boa tentativa, espertinho(a)!PURA SORTE OK?</pre>
 					<br/>

 					<p>
						Para o exemplo anterior funcionar, devemos colocar um break após o printf() do default. Podemos também
						tirar o break do case 6, embora não faça diferença deixá-lo ali.
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
		int dado;

		printf("Digite o numero obtido do dado: ");
		scanf("%d", &dado);

		switch(dado)
		{
			case 1: printf("Que sorte hein... ");
				break;

			case 2: printf("Mehhh...");
				break;

			case 3: printf("Parabens por esse grande feito.");
				break;

			case 4: printf("Nada mal. hmpf");
				break;

			case 5: printf("Pff! Posso fazer melhor, sabia?");
				break;

			default: printf("Boa tentativa, espertinho(a)!");
				break;

			case 6: printf("PURA SORTE OK?");
		}

		return 0;
	}
					</code></pre>
					<pre class="exe"> Digite o numero obtido do dado: 2
 Boa tentativa, espertinho(a)!</pre>
 					<br/>

 					<p>
						Pronto! Agora que já sabemos como limitar o que queremos que o switch faça, ou seja, onde começa e terminam
						as instruções (do <em>case</em> ao <em>break</em>), vamos estudar o lado malandro da força: quando podemos
						tirar vantagem desse erro.
					</p>

					<h2> A hora certa de dar um break na relação </h2>

					<p>
						Não, não, não senhoras e senhores. Nessa seção não darei nenhuma dica de relacionamento. Pelo contrário,
						mostrarei como o switch também pode ser versátil.
					</p>
					
					<p>
						Até então só vimos situações que devemos usar o <em>break</em> para o comando não se perder. Contudo,
						é "interessante" fazer o programa se perder. Imagine que por alguma razão obscura queiramos fazer
						um programa que diga se você foi aprovado ou não na disciplina. Adotando 6 como nota mímina para aprovação,
						seu programa ficaria bem extenso se para cada case você colocasse um printf("Reprovado"), não é mesmo?
					</p>
					
					<p>
						É numa situação como essa que passa a ser interessante o programa se perder e nos ajudar. Como assim? Lembra
						que se tirarmos o <em>break</em> o switch não pára? Então observe a malandragem:
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
		int dado;

		printf("Digite o numero obtido do dado: ");
		scanf("%d", &dado);

		switch(dado)
		{
			case 1: 
			case 2: 
			case 3: 
			case 4: 
			case 5: printf("Reprovado.");
				break;

			case 6: printf("Aprovado.");
				break;

			case 7: 
			case 8: printf("Aprovado. Muito bem!");
				break;

			case 9: 
			case 10: printf("Aprovado! Parabens!");
		}

		return 0;
	}
					</code></pre>
					<br/>

					<p>
						<strong>Explicando o que acontece:</strong> o que é notório são os inúmeros <em>cases</em> vazios.
						A ideia é dizer para o programa: <i>"se você cair aqui, não faça nada e continue executando!".</i>
						Em determinado momento ele terá uma instrução de impressão e na sequência um break para dizer <i>"ok, 
						tome um pouco de ar, pode parar agora"</i>. Dessa forma, <strong>em todos os cases que são iguais podemos
						utilizar essa técnica</strong> para poupar tempo!
					</p>
					
					<p>
						Assim, se digitarmos 1, 2, 3, 4 ou 5, ele imprimirá "Reprovado". Se 6, Aprovado; caso 7 ou 8 "Aprovado.
						Muito bem!" e, finalmente, "Aprovado! Parabens!" se 9 ou 10. Observe que não colocamos 
						<strong>default</strong>, pois não há necessidade nesse exemplo (mas poderíamos usá-lo para deixar mais
						elegante e evitar que o usuário inserisse alguma bobagem no scanf();).
					</p>
					
					<p>
						No entanto, alguns podem pensar: "não seria mais prático usar o <em>if</em> nessa situação?"
						Sim, seria. A sintaxe do comando é mais simples e é adequada para situações desse tipo. Observe
						como fica mais intuitivo:
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
		int nota;

		printf("Digite a nota do aluno: ");
		scanf("%d", &nota);

		if(nota >= 9)
			printf("Aprovado! Parabens!");

		else if(nota >= 7)
			printf("Aprovado. Muito bem!");

		else if(nota >= 6)
			printf("Aprovado.");

		else
			printf("Reprovado.");

		return 0;
	}
					</code></pre>
					<br/>

					<p>
						E é especificamente esta discussão que dá origem à nossa próxima seção.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="switch-else">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 2. Switch ou If / Else: Qual usar?</h1>
					
					<p>
						Já apresentamos alguns exemplos tanto de switch quando if /else neste tópico. E, a presença
						de duas instruções com propriedades semelhantes, pode ser uma "dor de cabeça" na hora do
						programador ter de escolher entre um dos dois comandos. Quando devemos usar 
						<strong>switch</strong>? Quando podemos ou não usar <strong>if</strong>?
					</p>
					
					<p>
						Na prática, não há nenhuma regra absoluta para o uso de um o outro. No entanto, existem
						situações onde o uso de um é mais eficiente que outro. A situação onde fica mais evidente
						a diferença é ao trabalharmos com <strong>intervalos</strong>: sem dúvidas o 
						<strong>if</strong> é infimitamente superior ao <em>switch</em>.
					</p>
					
					<p>
						A prova disso é que o <strong>switch só trabalha com valores inteiros</strong> na linguagem C.
						Valores reais (com casas decimais) só podem entrar no switch se forem convertidos, ou seja,
						virarem inteiros. Aquele <em>exemplo das notas que omitimos o break em alguns casos</em>: não
						retrata muito bem a realidade. Se o próprio comando nos priva de trabalhar com valores reais, já podemos eliminar um uso para
						o switch. 
					</p>
					
					<p>
						Entretanto, <strong>valores inteiros</strong> e caracteres <strong>funcionam</strong> no
						switch. Se o uso deles não envolve intervalo de valores, então não está descartado. Por
						bom senso, analise a sintaxe do if e a do switch: qual a maior? Obviamente a do switch.
						Portanto, torna-se "custoso" usar o switch em trechos de códigos pequenos. O seu uso é
						mais indicado -e se encaixa melhor- onde é necessário uma maior organização do código,
						que necessite legibilidade (imagine varios if /else aninhados...) e fácil identificação
						do que está sendo testado.
					</p>
					
					<p>
						Podemos dizer então que essa luta é uma batalha entre a <em>praticidade vs. organização</em>.
						Contudo, vale ressaltar que nem sempre o mais prático é melhor e, justamente por isso, 
						estudamos o switch.
					</p>
					
					<p>
						Peguemos um exemplo se o usuário digitar uma consoante, o programa imprime a mensagem "Consoante!".
						Bem simples (para não dizer estúpido e inútil, né... mas por favor, contenha-se! Sem ofensas,
						estou querendo te ajudar!), mas você já começa a imaginar o trabalho que vai dar? Onde ficaria
						melhor seu uso? No switch ou no if? Vejamos nos dois casos!
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
		char letra;

		printf("Digite uma letra minuscula do alfabeto: ");
		scanf(" %c", &letra);     // Não esqueça do espaço em " %c"

		if(letra == 'b' || letra == 'c' || letra == 'd' || letra == 'f' || 
			letra == 'g' || letra == 'h' || letra == 'j' || letra == 'k' || 
			letra == 'l' || letra == 'm' || letra == 'n' || letra == 'p' || 
			letra == 'q' || letra == 'r' || letra == 's' || letra == 't' || 
			letra == 'v' || letra == 'w' || letra == 'x' || letra == 'y' || 
			letra == 'z')

			printf("Consoante!");

		else if(letra == 'a' || letra == 'e' || letra == 'i' || letra == 'o' || 
			letra == 'u');

		else
			printf("Caractere invalido!");

		return 0;
	}
					</code></pre>
					<br/>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
		char letra;

		printf("Digite uma letra minuscula do alfabeto: ");
		scanf(" %c", &letra);     // Não esqueça do espaço em " %c"

		switch(letra)
		{
			case 'a': 
			case 'e': 
			case 'i': 
			case 'o': 
			case 'u': 
				break;
			case 'b': 
			case 'c': 
			case 'd': 
			case 'f': 
			case 'g': 
			case 'h': 
			case 'j': 
			case 'k': 
			case 'l': 
			case 'm': 
			case 'n': 
			case 'p': 
			case 'q': 
			case 'r': 
			case 's': 
			case 't': 
			case 'v': 
			case 'w': 
			case 'x': 
			case 'y': 
			case 'z': printf("Consoante!");
				break;

			default: printf("Caractere invalido!");
		}

		return 0;
	}
					</code></pre>
					<br/>

					<p>
					Ambos programas são extensos, não é verdade? No entanto, o <strong>switch</strong> acaba
					se tornando mais legível pela sua própria estrutura bem definida. O <strong>if</strong>
					ficou gigantesco, precisamos quebrar a linha várias vezes no meio da operação lógica para
					facilitar sobre quem estamos operando.
				</p>
				
				<p>
					<strong>Observação:</strong> atente que no exemplo com if, fizemos um else if com vogais
					seguido de ponto-e-vírgula. Por que isso? Para o programa não ficar contraditório. Ora,
					dissemos ao usuário para digitar uma letra. Nada impede que ele digite uma vogal! Dessa forma,
					se ele cair naquela condição, o programa não fará nada e termina. Ele não deu uma entrada
					com consoante e também não fez nada de erro (entrou com uma letra do alfabeto). Se ele entrasse
					com um símbolo, um número ou uma letra maiúscula aí, corretamente, ele seria advertido. A
					mesma lógica foi usada no switch, porém adaptada à sintaxe do comando.
				</p>
				
				<p>
					E então: qual o melhor método? Não existe melhor método geral. Depende da situação, para este caso eu escolheria o switch pela questão da organização. Contudo, tentando prever situações que você pode enfrentar na cadeira, abaixo
					tem uma lista de escolhas mais comuns para cada caso. 
				</p>
				
				<p>
					<ul>
						<li><strong>Intervalo de valores (Ex.: notas menores que 6, entre 7 e 8...)</strong></li>
						<li><strong>(x) If / Else</strong></li>
						<li>( ) Switch</li>
					</ul>
				
					<br/>
					
					<ul>
						<li><strong>Números reais (Ex.: 4.5, 0.9923, ...)</strong></li>
						<li><strong>(x) If / Else</strong></li>
						<li>( ) Switch</li>
					</ul>
					
					<br/>
				
					<ul>
						<li><strong>Grande quantidade de opções inteiras (Ex.: caracteres do teclado)</strong></li>
						<li>( ) If / Else</li>
						<li><strong>(x) Switch</strong></li>
					</ul>
					
					<br/>
					
					<ul>
						<li><strong>Teste com operações lógicas (Ex.: 0 && 1)</strong></li>
						<li><strong>(x) If / Else</strong></li>
						<li>( ) Switch</li>
					</ul>
					
					<br/>
					
					<ul>
						<li><strong>Teste com operações aritméticas (Ex.: a + 2 >= b)</strong></li>
						<li><strong>(x) If / Else</strong></li>
						<li>( ) Switch</li>
					</ul>
				</p>
				
				<p>
					Repare que o <em>switch</em> aparece numa quantidade significativamente menor de vezes. Isso porque tudo que
					fazemos no switch, fazemos no if / else, mas a recíproca não é verdadeira (isso sem falar na limitação
					de tipos inteiros do switch). Não estou dizendo que o if é melhor, mas ele é usado com muito mais
					frequência. O switch não é um comando desnecessário, pelo contrário, a questão de organização faz
					uma diferença enorme, especialmente em jogos onde o usuário está constantemente pressionado teclas e o
					personagem precisa reagir de diferentes maneiras para cada condição.
				</p>
				
				<p>
					Podemos dizer que ambos comandos se complementam. Tanto é verdade que não são raras as vezes que podemos
					inserir um if/ else dentro de um case do switch ou um switch dentro de um if / else aninhado. As 
					possibilidades são inúmeras e, mais uma vez, para ficar claro: <strong>cada caso é um caso</strong>.
					Ao contrário do que a maioria pensa, muitas vezes é necessário pensar no algoritmo antes de sair
					programando justamente para evitar uma escolha errada no código que pode prejudicar e muito tanto
					a performance do programa quanto a legibilidade do código!
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
							Material::pdf('Seleção Múltipla com Switch', 'files/09.pdf');
							Material::quiz('Quiz online', 'quiz.php?area=switch');
						?>
					</ul>					
					
					<!-- Navigation links -->
					<p class='links'>
						<a class='pull-left' href='expressoes-logicas.php'><i class='fa fa-2x fa-angle-left'></i> Expressões Lógicas </a>
						<a class='pull-right' href='lacos-iterativos.php'> Laços Iterativos <i class='fa fa-2x fa-angle-right'></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	
<?php include "_view/footer.php"; ?>