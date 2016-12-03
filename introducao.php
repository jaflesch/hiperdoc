<?php
	// includes...
	require_once "scripts/navigation.php";
	require_once "scripts/material.php";
	
	$page_title = "Introdução";
	include "_view/head.php";
	
	$link_navbar = Navigation::get_link('introducao');
	include "_view/header.php";
?>
	<!-- HTML Content -->
	<section id="identacao">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 1. Identação </h1>
					
					<p> 
						Antes de qualquer conteúdo prático de programação, é necessário adotar algumas convenções para organizar
						a estrutura de um programa e a primeira da lista é a identação. Embora, em um primeiro momento, pareça
						desnecessário, adquirir o hábito de identar programas desde o começo é extremamente importante, pois,
						conforme o semestre avança, a complexidade dos programas cresce bastante e, sem um programa organizado,
						fica difícil <em>debuggar</em> (achar o bug, o erro), fazendo com que o tempo "economizado" ao não identar,
						seja gasto por causa da preguiça de deixar organizado.
					</p>

					<p>
						Por exemplo, imagine que a tarefa seja escrever na tela a mensagem "Hello World!". Simples, né? Vamos ser rebeldes e não identaremos.
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	int main()
	{
	printf("Hello World!");
	return 0;
	}
					</code></pre>
					<br/>
					<p>
						Agora, seremos seguidores da Ordem dos Bons Costumes de Programação e realizaremos a tarefa com identação.
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main()
	{
		printf("Hello World!");
		return 0;
	}
					</code></pre>
					<br/>
					<p>
						Percebe-se que o segundo está mais elegante (claro, está identado duh), mas, ainda assim, você acha que o tempo perdido identando não justifica o esforço, né? Tudo bem, então tente achar o problema no programa abaixo:
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;
	
	int main();
	{printf("Esse eh um exemplo para ");printf("voce ver que a vida nao eh facil, );
	print("especialmente para quem nao identa programas.\n;)";printf("----------------");
	printf("Valeu falou!"),
	return 0};
					</code></pre>
					<br/>

					<p>
						Provavelmente você achou vários erros. Mas será que achou todos? Claro, ficar corrigindo e compilando por força bruta até funcionar é um método válido, mas não muito efetivo, dependendo do caso, pode custar tempo demais em algo simples. Portanto, mais um motivo para identarmos os programas.
					</p>

					<p>
						.Agora, se apesar de tudo isso, você não está convencido de identar, pois você perderá muito tempo, existe
						uma alternativa que facilita a vida de todo mundo (do aluno que programa, do monitor que debugga e do
						professor que corrige): uma ferramenta de identação automática do próprio Codeblocks. Para tal, clique com
						o <strong>botão direito do mouse</strong> no seu código (não precisa estar selecionado) e escolha a opção
						<strong>Format AStyle</strong>. Pronto: agora seu código estará identado e todo mundo ficará feliz com sua
						sábia decisão.		
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="declaracao">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 2. Declaração e Atribuição de Variáveis </h1>
					
					<p>
					Para realizar qualquer programa mais complexo, precisaremos usar variáveis. Elas são a coluna vertebral
					da programação. Podem servir para armazenar os mais variados tipos de dados, ajudar em operações e/ou 
					tornar mais acessível o código.
					</p>				
					
					<p>
						Entretanto, para usá-las é necessário primeiramente declará-las no programa. 
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	int idade;		// a variável é um número. Ex.: 5
	float preco;		// a variável é um número com vírgula e 6 dígitos de precisão. Ex.: 5,75
	double valorBemGrande;	// a variável é um número com vírgula e 10 dígitos de precisão

	char letra;			// a variável é um símbolo. Ex.: 'a', 'B', '#'
	char nome[20];		// a variável é um conjunto de letras. Ex.:'Herbio'

	/*
	     Todas as declarações anteriores foram simples, mas podemos declarar mais de uma
	     variável na mesma linha!
	*/

	int idade, dia, ano;
	float peso, altura;
					</code></pre>
					<br/>

					<p>
						Repare que apenas declaramos variáveis aleatórias. Para facilitar o estudo, vamos adotar uma máxima que deve
						ser levada para sempre na vida acadêmica: <strong>o computador é muito obediente, mas é extremamente
						burro</strong>. A ideia dessa frase é sempre lembrar que o computador só fará aquilo que for especificado e
						nada mais, ou seja, devemos sempre detalhar tudo que queremos fazer.
					</p>
					
					<p>
						Caso eu queira declarar uma variável com um valor inicial, eu preciso informar ao computador qual é o valor
						desejado. Nos exemplos anteriores, todas as varíaveis que declaramos não possuem valor definido. Desta vez
						vamos declarar e inicializar as variáveis.
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	int idade = 19;
	float preco = 1.99;
	double valorBemGrande = 45678987979797979797.1231231231;

	char letra = 'C';
	char nome[20] = "Programando em C";

	/*
	     É importante lembrar que o sinal de '=' na programação não é o mesmo da álgebra.

	     Para facilitar: se temos x = 5,
	          em álgebra, leríamos "x é igual a 5"
	          em computação, leríamos "x recebe 5"
	*/
					</code></pre>
					<br/>

					<p>
						Com uma noção básica de variáveis, podemos nos aprofundar um pouco mais com certas instruções dos programas.
						Observe:
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	int idade = 19, tempo;
	/*
	     Declaramos a variável idade e inicializamos com o valor 19.
	     A variável tempo também foi declarada, mas não possui valor definido.
	*/

	idade = 20;     // agora idade vale 20
	tempo = idade;  // tempo recebe o valor de idade, ou seja, tempo vale 20
	idade = 22;     // idade recebe o valor 22

	/*
	     Após todas as instruções acima, o valor final de idade será 22, mas e o valor de tempo?

	     Mesmo com a última instrução mudando o valor de idade para 22, tempo vai continuar com
	     o valor de idade no momento em que houve a atribuição. Ou seja, qualquer atribuição que
	     foi feita com idade não terá nenhuma relação com a variável tempo.

	     Portanto, tempo = 20.
	*/
					</code></pre>
					<br/>

					<p>
						É interessante enfatizar uma técnica bem comum em programação que são as <strong>variáveis acumuladoras
						</strong>. Como já foi dito, o sinal de igual em programação não é exatamente uma igualdade e sim uma
						forma de dizer que determinada variável recebe algum valor. Sendo assim, seria possível fazer a variável
						receber ela mesma? Sim, é possível. E, se expandirmos mais esta ideia, teremos algumas expressões matemáticas
						bem conhecidas.
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	int var, somatorio, produtorio;
	float baggins = 40.2;

	var = var - 5;
	somatorio = somatorio + 7;
	produtorio = produtorio * 3;
	baggins = baggins / (baggins % 2);
					</code></pre>
					<br/>

					<p>	Por fim, apenas alguns lembretes sobre declaração de variáveis: </p>
					
					<ul style="list-style: none;">
						<li style="padding: 10px 0;">
							Nomes de variáveis <em>não podem iniciar com números</em> (x é válido, mas 2x
							não. Já x2 e x2x também são válidos)
						</li>
						
						<li style="padding: 10px 0;">
							A linguagem C é <em>case sensitive</em>, ou seja, y é diferente de Y
						</li>
						
						<li style="padding: 10px 0;">
							Não podemos declarar variáveis com mesmo nome e tipos diferentes
							(int z e char z não é válido)
						</li>
						
						<li style="padding: 10px 0;">
							Nomes de variáveis <em>não podem ter espaços</em> ('float minha altura' não é
							válido)
						</li>
							
						<li style="padding: 10px 0;">
							@, ', -, ", *, &, ., ; entre outros símbolos com
							usos predefinidos não podem constar na nome da variável.
						</li>
					</ul>
					<br/>

					<p>
						É importante lembrar que existem outros tipos de dados na linguagem C. No entanto, em ambas as
						disciplinas são apenas estes os tipos estudados.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="constantes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 3. Constantes </h1>
					
					<p>
						Além das variáveis, existe outro método de atribuir valores: através das constantes. Constantes são
						identificadores que, ao contrário das nossas amigas anteriores, não podem ter seus valores alterados
						durante a execução do programa.
					</p>
					
					<p>
						Para definirmos uma constante, precisamos utilizar o comando especial <em>#define</em>. Veja
						exemplos abaixo:
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	#define PI 3.1416
	#define DIAS_DA_SEMANA 7

	/*
	     Para definir uma constante, junto com a instrução #define, colocamos
	     o NOME DA CONSTANTE e ao lado direito o seu RESPECTIVO VALOR.

	     Uma dica é utilizar letras MAIÚSCULAS ao declarar constantes, porque
	     facilita a visualização destas no código!
	*/

	int main()
	{
	     float valor = PI * DIAS_DA_SEMANA;

	/*
	     A variável real 'valor' conterá o produto de PI * DIAS_DA_SEMANA,
	     ou seja, valor = 3.1416 * 7.
	*/

	     return 0;
	}
					</code></pre>
					<br/>

					<p>
						<strong>Importante:</strong> no programa acima, se tivéssemos escrito a seguinte instrução: 
						<strong>float valor = pi * dias_da_semana;</strong> o compilador acusaria erro, dizendo
						que não existem variáveis declaradas com tais nomes. Lembramos que C é <em>case sensitive</em>;
						portanto há diferença entre letras maiúsculas e minúsculas.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="printf">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 4. Função printf(); </h1>
					
					<p>
						Logo no início deste tópico, exibimos um exemplo de programa identado. Nele havia uma certa instrução
						chamada <strong>printf();</strong> e, ao executarmos o programa, exibia uma mensagem na tela dizendo
						<em> Hello World! </em>.
					</p>				
					
					<p>
						A função printf(); faz exatamente isso: "printa" na tela a mensagem que queremos exibir. Podemos escrever
						os mais variados tipos de mensagem. Observe:
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
	     printf("Ola.")
	     printf("Este eh um exemplo")
	     printf("nao muito criativo!")

	/*
	     Vai imprimir na tela a mensagem "Ola.Este eh um exemplonao muito criativo"
	*/

	     return 0;
	}
					</code></pre>
					<pre class="exe"> Ola.Este eh um exemplonao muito criativo </pre>
					<br/>

					<p>
						Você deve ter notado que a mensagem não ficou exatamente como queríamos, ou seja, cada mensagem do printf() em
						uma linha.
					</p>
					
					<p>
						Isso acontece porque a linguagem está interpretando cada mensagem como "uma só". Para ser mais exato, por padrão,
						um printf() começa a partir do término de seu anterior. Uma alternativa interessante seria dar um <em>ENTER</em>
						na mensagem. Assim, quando a mensagem terminar, teremos uma quebra de linha. Consquentemente, a frase seguinte já
						começa em uma linha nova. Para tal, devemos usar o comando <strong>\n</strong> dentro da mensagem!
					</p>

					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
	     printf("Ola.\n")
	     printf("Este eh um exemplo\n")
	     printf("nao muito cria\nti\tv\to!")

	/*
	     Vai imprimir na tela a mensagem:

	     "Ola.
	     Este eh um exemplo
	     nao muito cria
	     ti     v     o"
	*/

	     return 0;
	}
					</code></pre>
					<pre class="exe"> Ola.
 Este eh um exemplo
 nao muito cria
 ti     v     o</pre>
				<br/>

				<p>
					Além do comando de quebra de linha <strong>\n</strong>, existe ainda o <strong>\t</strong> que funciona
					para dar uma <strong>tabulação</strong> no texto (aquele efeito de páragrafo, ao pressionar o botão <em>TAB</em>).
				</p>
				
				<p>
					Entretanto, a função printf() não se resume apenas à quebra de linhas e tabulações. Não! Esta função é muito mais
					poderosa que isso. Esta introdução foi apenas para termos uma noção de como organizar melhor a interface de nossos
					programas. Digamos que é uma ajuda para "identar" os programas e facilitar tanto a vida do usuário quanto do
					programador (na hora de descobrir eventuais erros na execução do código).
				</p>

				<h2> Imprimindo Variáveis </h2>

				<p>
					Imprimir frases poder ser legal (tá, nem tanto vai), mas o printf() é usado por outra causa mais nobre ainda:
					imprimir os valores contidos nas variáveis! Lembra dos cálculos anteriores que fizemos? Então, é tudo muito bonito
					esse poder da programação de calcular as operações para nós meros mortais. Mas... de que adianta se	não podemos ver
					o resultado final?
				</p>
				
				<p>
					Vejamos como podemos manipular os dados na tela!
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
	     int dia = 7, mes = 10, ano = 2000;
	     int idade;

	     idade = 2015 - 2000;

	     printf("Nasci em: %d/%d/%d. Logo, tenho %d anos!", dia, mes, ano, idade);

	     return 0;
	}
					</code></pre>
					<pre class="exe"> Nasci em 7/10/2000. Logo, tenho 15 anos! </pre>
				<br/>

				<p>
					Muito legal, né? Dessa forma podemos imprimir diferentes valores e não só uma mensagem já determinada.
					Contudo, só imprimos inteiros no exemplo anterior. Como já vimos, em C, existem outros tipos de dados.
					E, para cada tipo, existe uma maneira de referenciá-lo na hora da impressão. Confira!
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
	     int P1 = 10, P2 = 9;
	     float media = 9.5;
	     char conceito = 'A';
	     char result[] = "aprovado";

	     printf("\t\tSITUACAO EM PROGRAMACAO:\n\n");

	     printf("\tNota PROVA 1: %d\n", P1);
	     printf("\tNota PROVA 2: %d\n\n", P2);
	     printf("\tMedia curso: %f\t", media);
	     printf("\tConceito: %c\n\n", conceito);
	     printf("\t\tFINAL: %s\n", result);

	     return 0;
	}
					</code></pre>
					<pre class="exe">		 SITUACAO EM PROGRAMACAO:

     Nota PROVA 1: 10
     Nota PROVA 2: 9

     Media curso: 9.500000     Conceito: A

          FINAL: aprovado</pre>
				<br/>

				<p>
					Estes são os tipos usados em ambas cadeiras de programação. No entanto, a impressão de dados com 
					<strong>strings</strong> (variável <em>char result[]</em> é um exemplo) um pouco mais complexa (ou chata,
					para os íntimos) e será melhor abordada nos capítulos posteriores.
				</p>
				
				<p>
					Contudo, talvez alguns se perguntem porque a impressão da variável <strong>float media</strong> ficou 
					com tantas casas decimais se, ao inicializar a variável, colocamos apenas uma casa decimal.
					Exibir na tela dados reais (do tipo float), exige atenção especial, pois há vários modos de configurar
					o programa para imprimi-lo na tela do modo que queremos.
				</p>

				<h2> Impressão de variáveis reais </h2>

				<p>
					No exemplo anterior, a variável foi impressa com 6 casas decimais. Isso acontece porque o padrão de impressão
					de variáveis float é aquele. Isto é, se não especificarmos quantas casas queremos, ele sempre imprimirá de tal
					maneira.
				</p>
				
				<p>
					Ao definirmos uma regra de impressão, os valores sempre serão respeitados. Por exemplo, ainda no caso anterior,
					a média era 9,5. Se mandarmos exibir com três casas após a vírgula, a saída do programa será 9,500. Além de estipular
					um valor para o número de casas decimais, podemos definir um valor para o número de casas na parte inteira também.
					Entretanto, ao contrário dos decimais, se o número for menor que o limite, espaços em brancos preencherão as lacunas
					existentes ao invés de zeros.
				</p>
				
				<p>
					Tudo isso é muito bonito (ou não), mas como configurar, afinal, a impressão dos dados?
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
	     float num = 10.275;

	     printf("%f \n\n", num);

	     printf("%.1f \n", num);
	     printf("%.2f \n", num);
	     printf("%.3f \n", num);
	     printf("%.4f \n\n", num);

	     printf("%2.0f \n", num);
	     printf("%2.1f \n", num);
	     printf("%2.2f \n", num);
	     printf("%2.3f \n\n", num);

	     printf("%1.4f \n", num);


	     return 0;
	}
					</code></pre>
					<pre class="exe"> 10.275000

 10.2
 10.27
 10.275
 10.2750

 10
 10.2
 10.27
 10.275

 0.2750</pre>
				<br/>

				<h2> Misturando os tipos </h2>

				<p>
					Reza a lenda que todo o programador tende a buscar erros/bugs nos programas, fazendo os mais diversos
					tipos de combinações para tentar vencer a máquina e se vangloriar perante a sociedade. Claro, existem
					também as pessoas que ao programar acabam errando, por falta de atenção, os tipos de dados: declaram de um
					jeito e imprimem de outro. Agora, para ambos os estilos de vida citados, eis a questão: o que acontece se 
					eu declaro um float, mas mando imprimir como inteiro? O programa não compila? Compila, mas não funciona direito?
					O seu computador explode? 
				</p>
				
				<p>
					Se você pensou em chutar em alguma das três opções, errou! Não é nada disso! Se ao declararmos uma variável do
					tipo x e imprimirmos no tipo y, ela será convertida para o tipo y somente na exibição. Esta técnica é bastante útil,
					tanto em operações matemáticas quanto lógicas. O exemplo mais simples: se precisamos truncar um número real
					durante a impressão, basta imprimi-lo como inteiro!
				</p>
				
				<p>
					Claro, este é o exemplo mais simples. Agora... o que seria impresso nos seguintes casos?
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
	     char letra = 'A'
	     int valor = 66;
	     float num = 9.9975;

	     printf("%c \n", letra);
	     printf("%d \n", valor);
	     printf("%.2f \n", num);

	     printf("%d \n", (int)num);
	     printf("%f \n", (float)valor);

	     printf("%d \n", letra);
	     printf("%c \n", valor);

	     return 0;
	}
					</code></pre>
				<br/>

				<p>
					Tem ideia do que será impresso? Não? Poxa, na primeira linha não tem nenhuma novidade. É a impressão dos valores
					em seus estados originais.
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	char letra = 'A'
	int valor = 66;
	float num = 9.9975;

	printf("%c \n", letra);
	printf("%d \n", valor);
	printf("%.2f \n", num);						
					</code></pre>
					<pre class="exe"> A
 66
 9.99</pre>
				<br/>	
				<p>
					Ok, agora é normal um pouco de confusão. Para facilitar, no primeiro caso queremos imprimir um inteiro com
					uma variável real. No entanto, para tal, precisamos informar que queremos alterar o <strong>tipo</strong> do valor.
					Por isso usamos <strong>(int)</strong>, assim convertemos o tipo da variável e a deixamos pronta para a impressão.
					No segundo caso é o mesmo princípio, contudo, convertemos para float com <strong>(float)</strong> (repare que não
					espeficamos nenhuma regra de impressão na forma real).
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	char letra = 'A'
	int valor = 66;
	float num = 9.9975;

	printf("%d \n", (int)num);
	printf("%f \n", (float)valor);							
					</code></pre>
					<pre class="exe"> 9
 66.000000</pre>
				<br/>

				<p>
					O último caso é bem interessante. Através das conversões, desta vez sem o comando <strong>("tipo")</strong>, vamos
					trabalhar com inteiros e caracteres. Na primeira situação, obtemos o valor númerico da letra A. Na segunda impressão,
					obtemos o caractere dado seu valor numérico.
				</p>
				
				<p>
					Neste caso em específico, para você entender melhor, cada tecla do teclado possui um <strong>código ASCII</strong>.
					É através deste valor que há a lógica das conversões citadas. Caso tenha interesse, 
					<a href="http://pt.wikipedia.org/wiki/ASCII">clicando aqui você pode ter uma noção melhor do assunto</a>.
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	char letra = 'A'
	int valor = 66;
	float num = 9.9975;

	printf("%d \n", letra);
	printf("%c \n", valor);							
					</code></pre>
					<pre class="exe"> 65
 B</pre>
				<br/>
			</div>
		</div>
	</div>
</section>
<section id="scanf">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h1> Função scanf(); </h1>
				<p>
					Muito bem, agora já sabemos imprimir mensagens na tela. Isso é tudo muito lindo, atrativo, exótico e,
					quem sabe, pode até ser usado para puxar um papo na balada. Porém, temos um grave problema! Imagine que
					você está numa festa e quis se aparecer para alguém do seu interesse com seus conhecimentos adquiridos
					até o momento em programação... De repente, essa pessoa pede que você imprima a idade dela na tela. 
					E, obviamente, perguntar a idade da pessoa é meio constrangedor. Você não quer se arriscar, você não
					pode se arriscar!
				</p>
				
				<p>
					Caso você esteja preso numa cilada igual ou semelhante, acalme-se, pois seus problemas acabaram! A solução
					é bem simples: vamos utilizar uma nova função e ela se chama <em>scanf();</em>.
				</p>
				
				<p>
					Deixando a brincadeira de lado, o printf() nos ajudava a imprimir dados. Basicamente saía do computador para
					o usuário. O scanf() fará o contrário: o dado vai do usuário para o computador. Por isso, em certos momentos,
					podemos dizer que printf() e scanf() são <strong>almas gêmeas</strong>. Possuem um comportamento muito semelhante
					e se completam.
				</p>
				
				<p>
					E, justamente por terem tais características em comum, é necessário ter conhecimento de um para entender o outro.
					Portanto, se você não está dominando a função printf() como deveria, é indicado revisar o conteúdo antes de
					prosseguir.
				</p>
				
				<p>
					Tomando o exemplo inicial, na festa, precisamos obter a idade da pessoa. Claro, você não pode ser indiscreto e
					perguntar, então faça o computador ser indiscreto! Como a idade é um valor inteiro, precisamos de uma variável
					inteira para armazenar o dado.
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
				<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
	     int idade;

	     printf("Qual a sua idade? ");
	     scanf("%d", &idade);

	     printf("\n\nSua idade eh: %d anos.", idade)

	/*
	     Percebe como está sendo importante identar os programas?

	     Além disso, antes de usar o scanf, é sempre bom avisar ao usuário
	     que ele precisa fornecer um valor à máquina.
	*/

	     return 0;
	}
				</code></pre>
				<pre class="exe"> Qual a sua idade? _ </pre>
				<br/>

				<p> Fornecendo uma idade de 20 anos, temos:</p>

				<pre class="exe"> Qual a sua idade? _ 
 Sua idade eh: 20 anos.</pre>

 				<p>
					Assim como o printf(), o scanf() não se limita apenas a recolher valores inteiros. Eles são almas gêmeas, lembra?
					Podemos utilizar o scanf() para recolher dados do tipo <strong>float</strong>, <strong>char</strong> e até
					<strong>strings</strong> (este último, por ser mais problemático, será tratado melhor no decorrer das apostilas).
				</p>
				
				<p>
					Vamos treinar os conceitos com um programa que armazena dados de alunos.
				</p>

				<div class="console-header"><img src="_img/console/icon.png"></div>
				<pre><code class="cpp">
	#include &lt;stdio.h&gt;
	#include &lt;stdlib.h&gt;

	int main()
	{
	     int cartao, idade;
	     float altura, peso;
	     char curso;

	     printf("\tRELATORIO:\n\n")

	     printf("Numero do cartao UFRGS: ");
	     scanf("%d", &cartao);

	     printf("\nIdade: ");
	     scanf("%d", &idade);

	     printf("\nAltura: ");
	     scanf("%f", &altura);

	     printf("\nPeso: ");
	     scanf("%f", &peso);

	     printf("\nQual seu curso? (indique uma das opcoes)\n");
	     printf("\tA) Ciencia da Computacao \n");
	     printf("\tB) Engenharia \n");
	     printf("\tC) Outro \n");
	     scanf(" %c", &curso);     // O scanf() com %c deve ser acrescido de um espaço!

	     printf("\n\n\tDADOS DO CADASTRO:\n")

	     printf("\n Cartao UFRGS: %d", cartao)
	     printf("\n Idade: %d", idade)
	     printf("\n Altura: %.2f", altura)
	     printf("\n Peso: %.2f", peso)
	     printf("\n Curso selecionado: %c", curso)

	/*
	     Admita:

	     A identação ajuda para caramba além de deixar mais sexy o layout do código, não acha?
	*/

	     return 0;
	}
				</code></pre>
				<br/>

				<p>
					A execução do programa será a seguinte se entrarmos com os seguintes dados nesta ordem: número do cartão 101010,
					20 anos de idade, 1.80 metros de altura, 72kg de peso e opção de curso Ciência da Computação (letra A):
				</p>

				<pre class="exe"> 		RELATORIO:

 Numero do cartao UFRGS: 101010
 Idade: 20
 Altura: 1.80
 Peso: 72
 Qual seu curso? (indique uma das opcoes)
     A) Ciencia da Computacao
     B) Engenharia
     C) Outro A

     DADOS DO CADASTRO:

 Cartao UFRGS: 101010
 Idade: 20
 Altura: 1.80
 Peso: 70.00
 Curso selecionado: A</pre>

	 			<p>
					Para enfatizar, lembramos que a estrutura da função scanf() envolve: o <strong>TIPO</strong> e o
					<strong>NOME DA VARIÁVEL</strong>. Ainda, antes do nome da variável, usamos o símbolo especial <strong>&</strong>
					(o motivo de usarmos este símbolo seria explicado mais para frente). Se não o usarmos, quando recolher o dado, o
					programa vai "cair", sua execução será interrompida!
				</p>
				
				<p>
					Por ora, um problema que ainda não sabemos evitar é se o usuário entrar com um tipo diferente de dado. No caso,
					imagine que nosso scanf() quer recolher um inteiro, se enviarmos uma letra como resposta o programa tem boas chances
					de se perder na execução e não funcionar corretamente. Portanto, sempre atente aos tipos de dados exigidos e fornecidos.
				</p>
				
				<p>
					Uma ultima observação: <strong>praticar é fundamental</strong>. Programação não se aprende estudando teoria. Você precisa programar.
					É errando, travando para descobrir o erro acusado no compilador que você dominará esta materia. Por ser a parte inicial,
					talvez tenha sido um pouco massante. Logo, mais um motivo para treinar o que foi visto.
				</p>
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
							Material::pdf('Introdução', 'files/01.pdf');
							Material::pdf('Comandos de Atribuição', 'files/02.pdf');
							Material::pdf('Melhorando o Código', 'files/03.pdf');
							Material::youtube('Programando em C - Aula 01', 'https://www.youtube.com/watch?v=HGVLkS2VmH4');
							Material::youtube('Programando em C - Aula 02', 'https://www.youtube.com/watch?v=-Y4QJy6tT14');
							//Material::ppt('Arquivo PowerPoint', 'files/nome_topico/nome_arquivo.pdf');
							//Material::doc('Arquivo Word', 'files/nome_topico/nome_arquivo.pdf');
							Material::web('Programando em C - PUC', 'http://www.inf.pucrs.br/~pinho/LaproI/IntroC/IntroC.htm');
							Material::quiz('Quiz online', 'quiz.php?area=introducao');
							//Material::home('Arquivo com exercícios + gabaritos', 'files/nome_topico/nome_arquivo.pdf');
						?>
					</ul>					
					
					<!-- Navigation links -->
					<p class='links'>
						<a class='pull-left' href='index.php'><i class='fa fa-2x fa-angle-left'></i> Home </a>
						<a class='pull-right' href='expressoes-aritmeticas.php'>Expressões Aritméticas <i class='fa fa-2x fa-angle-right'></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	
<?php include "_view/footer.php"; ?>