<?php
	// includes...
	require_once "scripts/navigation.php";
	require_once "scripts/material.php";
	
	$page_title = "Página Exemplo 2";
	include "_view/head.php";
	
	$link_navbar = Navigation::get_link('exparit');
	include "_view/header.php";
?>
	<!-- HTML Content -->
	<section id="#operacoes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 1. Operações Básicas </h1>
					<p>
						No segundo tópico desta apostila, estudaremos as quatro operações matemáticas básicas. Sim, aquelas mesmo
						que você viu no colégio nas séries iniciais: adição, subtração, multiplicação e divisão. Não se preocupe,
						o objetivo aqui não vai ser revisar tal assunto (até porque você já deve estar integrando a Deus nos cálculos
						da vida), mas mostrar como procedemos para calcular expressões na linguagem C.
					</p>				
					
					<p>
						<strong>Relembrando:</strong> a apostila tem conteúdo acumulativo. Portanto, espera-se que você já domine os
						comandos <a href='introducao.php#printf'>printf()</a> e <a href='introducao.php#scanf'>scanf()</a>. Caso ainda
						não se sinta confortável, clica no link referente ao assunto e dê uma nova lida. Não se esqueça que existem
						exercícios disponíveis para praticar!
					</p>
					
					<p>
						Para desenvolvermos operações em C, precisamos utilizar símbolos para informar o que desejamos calcular. Semelhante
						à vida real, utilizamos os caracteres:
					</p>
					
					<ul style="list-style: none;">
						<li style="padding: 10px 0;">Soma: <em>+</em></li>
						<li style="padding: 10px 0;">Subtração: <em>-</em></li>
						<li style="padding: 10px 0;">Multiplicação: <em>*</em></li>
						<li style="padding: 10px 0;">Divisão: <em>/</em></li>
					</ul>
					
					<p>
						Junto com a semelhança nos símbolos, o método que resolvemos uma expressão condiz com a realidade: vamos resolvendo
						as contas com a prioridade sinais/parênteses da esquerda para direita. Amigável, não? Vejamos alguns exemplos abaixo.
					</p>
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
	     int a = 5, b = 10, c = 3, d = 2;
	     int soma;

	     // Este printf()...
	     printf("a + b = %d \n", a+b);

	     // tem o mesmo resultado que este outro printf()...
	     soma = a + b;
	     printf("a + b = %d \n\n", soma);

	     printf("a - b = %d \n\n", a-b);
	     printf("b * c = %d \n\n", b*c);
	     printf("c / d = %d \n\n", c/d);

	     return 0;
	}
					</code></pre>
					<pre class="exe"> a + b = 15
 a + b = 15

 a - b = -5

 b * c = 30

 c / d = 1 </pre>
				<br/>
				<p>
					Contas bem simples, não é? Porém, você deve estar se perguntando porque a divisão resultou em 1. A resposta é simples:
					no printf colocamos <em>%d</em> para informar que queremos imprimir um inteiro.
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
				<pre><code class="cpp">
 printf("c / d = %f \n\n", c/d);</code></pre>
				<pre class="exe"> c / d = 0.000000</pre>
				<br/>

				<p>
					Informamos à linguagem que queremos um valor real e, pelas casas decimais exibidas, de fato, temos um valor
					real, embora ele continue errado. Ainda está faltando um detalhe, precisamos converter o resultado para um número
					real, está lembrado? Portanto, vamos usar <em>(float)</em><strong>c/d</strong>.
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
				<pre><code class="cpp">
 printf("c / d = %.2f \n\n", c/d);</code></pre>
				<pre class="exe"> c / d = 0.000000</pre>
				<br/>

				<p>
					Pronto! Agora temos o resultado correto e, de quebra, para ostentar, configuramos para imprimir apenas duas casas
					após a vírgula.
				</p>
				
				<p>
					<strong>Dica:</strong> Você precisa converter um valor para <em>float</em> para ter uma divisão com números decimais.
					Por exemplo, se você dividir dois números inteiros, o compilador vai devolver o resultado em inteiro, por padrão. No
					entanto, se um dos valores na divisão for <em>float</em>, o resultado será real.
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
				<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
		printf("%d \n",5/2);
		printf("%f \n\n",5/2);
		printf("%f \n",(float)5/2);
		printf("%f \n\n",5/(float)2);
		printf("%d \n",5/2.0);
		printf("%f \n",5/2.0);

		return 0;
	}
</code></pre>
				<pre class="exe"> 2
 0.000000

 2.500000
 2.500000

 0
 2.500000</pre>
				<br/>

				<p>
					Alertas sobre a divisão de valores feitos, está na hora de realizarmos alguns cálculos mais interessantes!
					Vamos lá, tente adivinhar o resultado de cada uma das expressões!
				</p>
				
				<div class="console-header"><img src="_img/console/icon.png"></div>
				<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	#define PI 3.1416

	int main()
	{
		int a = 2, b = 3, c = 5, d = 1;
		int valor;
		float result;

		valor = a + b * c - d;
		printf("O resultado eh: %d \n", valor);

		valor = (a + b) * (c - d);
		printf("O resultado eh: %d \n", valor);

		valor = a - b * c - d;
		printf("O resultado eh: %d \n", valor);

		result = (a + b) / c / d;
		printf("O resultado eh: %f \n", result);
		printf("O resultado eh: %f", ((a + b) / c / d));


		return 0;
	}
</code></pre>
				<pre class="exe"> O resultado eh: 16
 O resultado eh: 20
 O resultado eh: -14
 O resultado eh: 1.000000
 O resultado eh: -1.#QNAN0</pre>
				<br/>

				<p>
					O último resultado nos retornou uma resposta um tanto exótica, não? Isso aconteceu porque houve um
					conflito de tipos: mandamos imprimir um <em>float</em>, embora só tenhamos fornecido valores inteiros
					na expressão. Um jeito bem simples de resolver é colocando um <strong>(float)</strong> no início da
					conta que ele irá converter o valor para um número real.
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
				<pre><code class="cpp">
 printf("O resultado eh: %f", (float)((a + b) / c / d));
</code></pre>
				<pre class="exe"> O resultado eh: 1.000000 </pre>
				<br/>

				<p>
					A última observação que não podemos esquecer é que numa operação de divisão o <strong>denominador não
					pode ser zero</strong>! Caso contrário, o programa irá abortar sua execução quando chegar no cálculo.
				</p>
			</div>
		</div>
	</section>
	<section id="#inc-dec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 2. Incremento e Decremento </h1>
					
					<p>
						Duas operações muito importantes e que serão usadas com muita frequência ao longo do curso são as de
						incremento e decremento. 
					</p>
					
					<p>
						Nesta parte inicial do curso elas serão apresentadas e ficarão um pouco de lado, mas é bom já ir adquirindo
						uma noção de como funcionam.
					</p>
					
					<p>
						A ideia dessas operações é aumentar/diminuir em uma unidade o seu valor. Para tal, devemos usar 
						<strong>++</strong>/<strong>--</strong> antes ou depois da variável. Essa versatilidade de uso necessita
						um cuidado especial: veja exemplos abaixo de um programa só com operações de incremento (a operação de
						decremento é análoga).
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
		int a = 2, b;

		printf("A vale %d \n", a);

		a++;
		printf("A vale %d \n\n", a);

		b = a++;
		printf("A vale %d e B vale %d \n", a, b);

		b = ++a;
		printf("A vale %d e B vale %d", a, b);

		return 0;
	}
</code></pre>
					<pre class="exe"> A vale 2
 A vale 3

 A vale 4 e B vale 3
 A vale 5 e B vale 5O resultado eh: 1.000000 </pre>
					<br/>

					<p>
						Os dois primeiros casos são tranquilos: primeiro exibimos na tela o valor original e, na sequência,
						seu valor incrementado. 
					</p>
					
					<p>
						Os dois últimos que exigem mais atenção. Na primeira situação, primeiro B recebe o valor de A e então
						o valor de A é incrementado. Na última, incrementamos A e depois B recebe A (já incrementado).
					</p>
					
					<p>
						Lembramos que as <strong>mesmas regras</strong> valem para os casos de <strong>decremento</strong>!
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="#pow">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 3. Função pow(); </h1>
					
					<p>
						Suponha que você, por alguma razão obscura da sua vida profissional precise fazer um algoritmo que
						calcule o quadrado de um número qualquer. Moleza, né? Certo... agora e se o programa precisa calcular o cubo?
						"Pff!... Continua barbada!"  Tudo bem, mas e que tal um programa que calcule a vigésima quinta potência
						de um determinado número? A ideia do algoritmo continua a mesma, mas percebe que estamos começando a passar
						trabalho?
					</p>				
					
					<p>
						Para facilitar a nossa vida e alegria geral da nação, existe uma função bem útil: <strong>pow();</strong>.
						Ela recebe <strong>dois argumentos</strong>: o <em>primeiro é base</em> e o <em>segundo é o expoente</em>.
						Se quisermos o quadrado do número 3, vamos usar <strong>pow(3,2);</strong>. Bem fácil!
					</p>
					
					<p id='declaration-pow'> A declaração da função <strong>pow()</strong> é a seguinte:</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
 double pow(double x, double y);

 // A função RETORNA um valor, ou seja, uma variável precisa receber esse dado. </code></pre>
 					<br/>

 					<p>
						Uma novidade no uso desta função é que precisamos incluir uma biblioteca especial para podermos usá-la.
						Até então, todos nossos programas sempre tinham a mesma cara: incluíamos a <em>&lt;stdio.h&gt;</em> e
						(as vezes) a <em>&lt;stdlib.h&gt;</em>, eventuais constantes, o <em>int main()</em>, o nosso algoritmo e por fim o 
						<em>return 0; </em>. Agora, ainda na área de bibliotecas, precisamos inserir a <strong>math.h</strong>
						que possui funções matemáticas mais complexas.
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	#include &lt;math.h&gt;
	
	int main()
	{
		int float = 2, b = 3;

		printf("2 ^ 3 = %f \n\n", pow(a, b));

		printf("2 ^ 4 = %f \n", pow(a, b + 1));
		printf("1 ^ 3 = %f \n\n", pow(a - 1, b));

		printf("3 ^ 1.5 = %f \n", pow(3, 1.5));
		printf("4 ^ -1 = %f \n", pow(4, -1));

		return 0;
	}
</code></pre>
					<pre class="exe"> 2 ^ 3 = 8.000000

 2 ^ 4 = 16.000000
 1 ^ 3 = 1.000000

 3 ^ 1.5 = 5.196152
 4 ^ -1 = 0.250000
 					</pre>
 					<br/>
 					<p>
						Para não deixar dúvidas, na <a id='click' href='#declaration-pow'> declaração da função pow()</a>, ela
						tanto retorna quanto usa como parâmetro valores do tipo <strong>double</strong>. Caso não esteja lembrado,
						ambos os tipos servem para expressar números reais. A diferença é que o float exige, geralmente, 4 bytes
						de memória para armazenar dados enquanto o double, pasme, utiliza o dobro (8 bytes). Na prática, quanto
						maior o tamanho do dado, maior é a precisão na hora de realizar cálculos. Portanto, quando enviamos 
						<em>pow(2, 3)</em>, na verdade seria <em>pow(2.000000, 3.000000)</em>. O lembrete final fica por conta de
						imprimir os dados no printf() com <strong>%f</strong>, pois o resultado que retorna é um número real!
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="#sqrt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 4. Função sqrt(); </h1>
					
					<p>
						Convenhamos que seria estranho ter uma função pronta que nos calcula a potência e não ter a sua inversa,
						não é verdade? Com a biblioteca <strong>math.h</strong> também podemos calcular a raiz quadrada de um
						número real fornecido. 
					</p>				
					
					<p>
						Se quisermos calcular a raiz, devemos chamar a função <strong>sqrt()</strong>. Diferente da função
						<em>pow()</em>, ela só possui <strong>um argumento</strong> que é justamente o valor do qual queremos
						extrair sua	raiz quadrada.
					</p>
					
					<p id='declaration-sqrt'> A declaração da função <strong>srqt()</strong> é a seguinte:</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
 double sqrt(double x);

 // A função RETORNA um valor, ou seja, uma variável precisa receber esse dado. </code></pre>
 					<br/>

 					<p>
						Confira abaixo alguns exemplos de aplicação da função <em>sqrt()</em> e repare que ela tem o mesmo
						comportamento da função <em>pow()</em>.
					</p>
					
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	#include &lt;math.h&gt;
	
	int main()
	{
		float a = 4, b;

		printf("Raiz quadrada de 4 = %f \n\n", sqrt(a));

		b = sqrt(a);
		printf("Raiz quadrada de b = %f \n\n", b);

		printf("Raiz quadrada de b + 5 (7) = %f \n\n", sqrt(b + 5));

		printf("Raiz quadrada de 2 = %f \n", sqrt(2));
		printf("Raiz quadrada de -2 = %f \n\n", sqrt(-2));

		return 0;
	}
</code></pre>
					<pre class="exe"> Raiz quadrada de 4 = 2.000000

 Raiz quadrada de b = 2.000000

 Raiz quadrada de b + 5 (7) = 2.645751

 Raiz quadrada de 2 = 1.414214
 Raiz quadrada de -2 = -1.#IND00
 					</pre>
 					<br/>

 					<p>
						Com exceção do último valor, todos forneceram uma resposta conforme o esperado. No último caso, aquele
						"resultado" é um indicativo de erro, pois a raiz quadrada de um número negativo faz parte dos números complexos
						e estamos limitados apenas ao universo dos números reais.
					</p>
					
					<p>
						Se você está sentindo falta das queridas e marcantes funções trigonométricas, vistas nos cálculos da vida,
						não se preocupe... você pode implementá-las! (Ou utilizar bibliotecas que já possuam essas funções prontas!)
					</p>
					
					<p>
						A biblioteca <strong>math.h</strong> possui várias outras funções prontas esperando para serem usadas. 
						No entanto, na cadeira de programação, não serão necessárias. E, para ser sincero, tanto a <em>pow()</em>
						quanto a <em>sqrt()</em> serem bem pouco usadas. A real utilidade de estudá-las é ir assimilando aos poucos
						o padrão de construção da linguagem C: o uso de variáveis, criação de funções, reutilização de código.
					</p>
					
					<p>
						Novamente, fica o conselho de revisar o material aqui exposto. Essa parte inicial pode ser cansativa,
						mas é essencial para evoluir os conhecimentos ao longo da disciplina.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="material">
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
						<a class='pull-left' href='introducao.php'><i class='fa fa-2x fa-angle-left'></i> Introdução </a>
						<a class='pull-right' href='expressoes-logicas.php'>Expressões Lógicas <i class='fa fa-2x fa-angle-right'></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	
<?php include "_view/footer.php"; ?>