<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="wrapper">
		<header>
		
			<nav class='navbar navbar-default navbar-fixed-top navbar-skin'>
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<?php echo $link_navbar; ?>
					</div>

					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li id='scrollTop'><a title="" href="#"> Topo </a></li>
							<li><a title="" href="sobre.php"> Sobre </a></li>
							<li class="dropdown" href="#topicos">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
									Área 01 <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="introducao.php"> Introdução </a></li>
									<li><a href="expressoes-aritmeticas.php"> Expressões Aritméticas </a></li>
									<li><a href="expressoes-logicas.php"> Expressões Lógicas </a></li>
									<li><a href="switch.php"> Switch </a></li>
									<li><a href="lacos-iterativos.php"> Laços Iterativos </a></li>
									<li><a href="vetores.php"> Vetores </a></li>
									<li><a href="strings.php"> Strings </a></li>
									<li><a href="matrizes.php"> Matrizes </a></li>
									<li><a href="bubblesort.php"> Bubblesort </a></li>
								</ul>
							</li>
							<li class="dropdown" href="#topicos">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									Área 02 <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="funcoes.php"> Funções </a></li>
									<li><a href="ponteiros.php"> Ponteiros </a></li>
									<li><a href="estruturas.php"> Estruturas </a></li>
									<li><a href="arquivos.php"> Arquivos </a></li>
									<li><a href="recursao.php"> Recursão </a></li>
									<li><a href="funcao-rand.php"> Função rand() </a></li>
								</ul>
							</li>
							<li><a title="" href="#contato"> Exercícios Resolvidos </a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
			