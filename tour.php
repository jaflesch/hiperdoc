<?php
	// includes...
	require_once('scripts/material.php');

	$page_title = "Apostila de C";
	$link_navbar = "tour";
	include "_view/head.php";
	include "_view/header.php";
?>
	<!-- HTML Content -->
	<section style='background: #2b2b2b; padding: 120px 0;'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<h1 style='color: #fff; text-align:center;'> Acredite, não é tão difícil quanto parece! </h1>
				</div>
			</div>
		</div>
	</section>
	<section style='background: #fff;' id='presentation'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12 text-center'>
					<h2 class='text-center'> A ideia </h2>
					
					<p class='text-center'><i> Qual a causa, motivo, razão ou circunstância que me faria estudar por este site? </i></p>
					
					<p>
						Todos os criadores do site e do projeto são estudantes de Ciência da Computação na UFRGS e tiveram seu primeiro contato com a linguagem C em 2012.
						Portanto, já existe uma familiriade com a linguagem de forma que podemos ensiná-la de uma maneira mais prática, direta 
						e alternativa à, segundo alguns aluno de engenharia, maneira massante como é ensinada na cadeira <span class="keyword">(INF01040) Introdução a Programação</span>.
					</p>				
					
					<p>
						Além disso, um dos componentes do grupo foi monitor da própria cadeira por três semestres. Neste período, em que ele auxiliou diversos alunos foi de fundamental importância para entender quais
						as maiores dificuldades que o pessoal enfrentava para avançar na disciplina. Não foram raros os casos em
						que dúvidas foram omitidas durante as aulas e, por ser uma matéria progressiva, no final do semestre 
						acabava sendo inviável estudar os conteúdos uma vez que a base era fraca. Além disso, notava-se também um
						certo desgosto pela cadeira de Introdução a Programação nos cursos de engenharia. 
					</p>
					
					<p>
						Independente dos motivos que tornam aprender a linguagem C difícil, nossa proposta é, através deste, elaborar
						um material que seja intuitivo e uma ferramenta adicional aos materiais fornecidos pelos professores. Lembro
						ainda que <span class="keyword">este site não pode e não deve substituir nenhuma aula de qualquer
						professor </span>. Todo o conteúdo presente é complementar, ou seja, é imprescindível que se tenha uma noção
						do assunto tratado, como é visto nas aulas. Caso contrário, o material ao invés de ajudar, irá atrapalhar!
					</p>
					
					<p>
						Por fim, abaixo você encontra vários tópicos que são desenvolvidos ao longo do semestre pela disciplina.
						É importante salientar que, em Algoritmos e Programação, cadeira exclusiva para os cursos de Ciência e Engenharia da
						Computação, aprende-se uma matéria adicional chamada
						<span class="keyword">recursão</span>. Porém, por abordar um assunto interessante, optamos por deixá-la inclusa no material,
						mesmo que seja apenas para curiosidade do aluno. Novamente, como o objetivo do site é oferecer um complemento ao conteúdo visto em aula.
						Sinta-se livre para aprender, explorar, divertir-se e, claro, sugerir novas ideias!
					</p>
				</div>
			</div>
		</div>
	</section>
	<section style='background: #f4f4f4; padding-bottom: 2000px;' id='index-03'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<h1 class='text-center'> Apostila </h1>
					<p class='text-center'><i> Clique no tópico que você deseja ler para ter acesso ao material. </i></p>
					
					<table class="things">
						<tr>
						<td><a href="introducao.php">
							<div id="intro"></div>
							<h3 class="thing-title">Introdução</h3>
						  
							<ul class="thing-description">
								<li>Identação</li>
								<li>Declaração e Atribuição de variáveis</li>
								<li>Função <span class="keyword">printf();</span></li>
								<li>Função scanf();</li>
							</ul></a>
						</td>
						
						<td><a href="expressoes-aritmeticas.php">
							<div id="expa"></div>
							<h3 class="thing-title">Expressões Aritméticas</h3>
						  
							<ul class="thing-description">
								<li>Operações + - * /</li>
								<li>Função pow();</li>
								<li>Função sqrt();</li>
							</ul></a>
						</td>
						
						<td><a href="expressoes-logicas.php">
							<div id="expl"></div>
							<h3 class="thing-title">Expressões Lógicas</h3>
						  
							<ul class="thing-description">
								<li>Operadores ! || &&</li>
								<li>If</li>
								<li>If / else</li>
								<li>If / else aninhados</li>
							</ul></a>
						</td>
					</tr>
				  
						<tr>
							<td><a href="switch.php">
								<div id="swi"></div>
								<h3 class="thing-title">Switch</h3>
							  
								<ul class="thing-description">
									<li>Estrutura do comando switch()</li>
									<li>Comando break;</li>
									<li>Switch ou If / else: qual usar?</li>
								</ul></a>
							</td>
							
							<td><a href="lacos.php">
								<div id="lit"></div>
								<h3 class="thing-title">Laços Iterativos</h3>
							  
								<ul class="thing-description">
									<li>Comando for()</li>
									<li>Comando while()</li>
									<li>Comando do while()</li>
									<li>Comparação das estruturas de repetição</li>
								</ul></a>
							</td>
							
							<td><a href="arrays.php">
								<div id="arr"></div>
								<h3 class="thing-title"> Vetores </h3>
							  
								<ul class="thing-description">
									<li>Declaração</li>
									<li>Atribuições</li>
									<li>Operações</li>
									<li>Exemplos</li>
								</ul></a>
							</td>
						</tr>
					  
						<tr>
							<td><a href="strings.php">
								<div id="str"></div>
								<h3 class="thing-title">Strings</h3>
							  
								<ul class="thing-description">
									<li>Declaração</li>
									<li>Operações da biblioteca string.h</li>
									<li>Exemplos</li>
								</ul>
							</td></a>
							
							<td><a href="matrizes.php">
								<div id="matr"></div>
								<h3 class="thing-title">Matrizes</h3>
							  
								<ul class="thing-description">
									<li>Declaração</li>
									<li>Operações</li>
									<li>Exemplos</li>
								</ul>
							</td></a>

							<td>
								<a href="rand.php">
								<div id="rnd"></div>
								<h3 class="thing-title">Função rand()</h3>
							  
								<ul class="thing-description">
									<li>Declaração</li>
									<li>Exemplos</li>
								</ul></a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="bubblesort.php">
								<div id="bubb"></div>
								<h3 class="thing-title">Bubblesort</h3>
								
								<ul class="thing-description">
									<li>Classificação de Dados</li>
									<li>Algoritmo Bubblesort</li>
									<li>Bubblesort otimizado</li>
								</ul></a>
							</td>
							<td><a href="funcoes.php">
								<div id="fnc"></div>
								<h3 class="thing-title">Funções</h3>
							  
								<ul class="thing-description">
									<li>Funções sem retorno</li>
									<li>Funções com retorno</li>
								</ul>
							</td></a>
							<td><a href="recursao.php">
								<div id="rec"></div>
								<h3 class="thing-title">Recursão</h3>
							  
								<ul class="thing-description">
									<li>Declaração</li>
									<li>Exemplos</li>
								</ul>
							</td></a>					
						</tr>
					</table>
				</div>
			</div>
		</div>
		<br/><br/>		
	</section>
	<section style="background: #fff;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 id='p-intro'> 1. Identação </h1>
					
					<p id="p-content-topic"> 
						Antes de qualquer conteúdo prático de programação, é necessário adotar algumas convenções para organizar
						a estrutura de um programa e a primeira da lista é a identação. Embora, em um primeiro momento, pareça
						desnecessário, adquirir o hábito de identar programas desde o começo é extremamente importante, pois,
						conforme o semestre avança, a complexidade dos programas cresce bastante e, sem um programa organizado,
						fica difícil <em>debuggar</em> (achar o bug, o erro), fazendo com que o tempo "economizado" ao não identar,
						seja gasto por causa da preguiça de deixar organizado.
					</p>
				</div>
			</div>
		</div>
	</section>					
	<section id="printf" style="background: #f4f4f4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 2. Função printf(); </h1>
					
					<p>
						A função printf(); faz exatamente isso: "printa" na tela a mensagem que queremos exibir. Podemos escrever
						os mais variados tipos de mensagem. Observe:
					</p>

					<div class="console-header" id='console'><img src="_img/console/icon.png"></div>
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
					<pre class="exe" id='console-exe'> Ola.Este eh um exemplonao muito criativo </pre>
					<br/>

					<p>
						Você deve ter notado que a mensagem não ficou exatamente como queríamos, ou seja, cada mensagem do printf() em
						uma linha.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section id="material" style="background: #fff;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> Material Complementar </h1>
					
					<ul class='material-list' id='material-listtt'>
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
						<a id='lprev' class='pull-left' href='index.php'><i class='fa fa-2x fa-angle-left'></i> Home </a>
						<a id= 'lnext' class='pull-right' href='expressoes-aritmeticas.php'>Expressões Aritméticas <i class='fa fa-2x fa-angle-right'></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		$('[data-toggle="popover"]').popover({
		    container: 'body'
		});
		var tour = new Tour({
			steps: [
			{
				element: "#p-header",
				title: "Tour pelo Site (Etapa 1 de xyz)",
				content: "Nesta barra horizontal em vermelho você terá um menu de acesso rápido às seções deste site.",
				placement: 'bottom'
			},
			{
				element: "#scrollTop",
				title: "Tour pelo Site (Etapa 2 de xyz)",
				content: "Ao clicar no link <strong>Topo</strong>, você retorna ao topo da página!",
				placement: 'bottom'
			},
			{
				element: "#p-areas",
				title: "Tour pelo Site (Etapa 3 de xyz)",
				content: "Nos links <strong>Área 01</strong> e <strong>Área 02</strong> existe um menu que, ao ser clicado, exibe uma lista de assuntos. Selecione um destes para conferir a página com o material desejado.",
				placement: 'bottom'
			},
			{
				element: "#p-sobre",
				title: "Tour pelo Site (Etapa 4 de xyz)",
				content: "Clicando no link <strong>Sobre</strong>, você irá à página com informações sobre os autores deste site.",
				placement: 'bottom'
			},
			{
				element: "#presentation",
				title: "Tour pelo Site (Etapa 5 de xyz)",
				content: "Nesta seção há um texto introdutório com a proposta do trabalho desenvolvido.",
				placement: 'top'
			},
			{
				element: "#index-03",
				title: "Tour pelo Site (Etapa 6 de xyz)",
				content: "Na seção <strong>Apostila</strong>, está o coração do site. Aqui você encontra uma tabela com blocos referentes aos capítulos da apostila. Clique num de seu interesse para abrir a página com o conteúdo selecionado.",
				placement: 'top'
			},
			{
				element: "#intro",
				title: "Tour pelo Site (Etapa 7 de xyz)",
				content: "Por exemplo, se você clicar no bloco <strong>Introdução</strong>, você irá para a página de introdutória da apostila!",
				placement: 'right'
			},
			{
				element: "#p-intro",
				title: "Tour pelo Site (Etapa 8 de xyz)",
				content: "Ao entrarmos em uma página da apostila. Podemos ver os <strong>subtítulos</strong> dos capítulos...",
				placement: 'top'
			},
			{
				element: "#p-content-topic",
				title: "Tour pelo Site (Etapa 9 de xyz)",
				content: "... E os <strong>conteúdos</strong> destes!",
				placement: 'top'
			},
			{
				element: "#console",
				title: "Tour pelo Site (Etapa 10 de xyz)",
				content: "A ferramenta de console serve para simular esteticamente a sintaxe do código com hightlight nas palavras-chave da linguagem e facilitar a compreensão da construção da linguagem!",
				placement: 'top'
			},
			{
				element: "#console-exe",
				title: "Tour pelo Site (Etapa 11 de xyz)",
				content: "E, além disso, quando o programa imprime uma saída, também simulamos através deste console mais escuro, em alusão aos antigos sistemas DOS.",
				placement: 'bottom'
			},
			{
				element: "#material-listtt",
				title: "Tour pelo Site (Etapa 12 de xyz)",
				content: "Ao final de cada capítulo da apostila, você encontra uma lista de materiais disponíveis para consulta. Podem ser arquivos em PDF, vídeos no YouTube, páginas web e até mesmo um questionário online com perguntas criadas pelos autores do projeto!",
				placement: 'top'
			},
			{
				element: "#lprev",
				title: "Tour pelo Site (Etapa 13 de xyz)",
				content: "Para faciltar a navegação, você pode clicar no botão à esquerda para retornar ao capítulo anterior...",
				placement: 'right'
			},
			{
				element: "#lnext",
				title: "Tour pelo Site (Etapa 14 de xyz)",
				content: "... Ou clicar no botão à direita para avançar até o próximo!",
				placement: 'left'
			}
			]});

			// Initialize the tour
			tour.init();

			// Start the tour
			tour.restart();
	</script>
<?php include "_view/footer.php"; ?>