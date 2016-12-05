<?php
	// includes...
	$page_title = "Apostila de C";
	$link_navbar = "";
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
	<section style='background: #fff;'>
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
	<section style='background: #f4f4f4;' id='index-03'>
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
				
<?php include "_view/footer.php"; ?>