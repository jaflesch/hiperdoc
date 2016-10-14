<?php
	// includes...
	require_once "scripts/navigation.php";
	require_once "scripts/material.php";
	
	$page_title = "Página Exemplo";
	include "_view/head.php";
	
	$link_navbar = Navigation::get_link('exemplo');
	include "_view/header.php";
?>
	<!-- HTML Content -->
	<section id="#nomeSection">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 1. Sobre </h1>
					<p> 
						Trabalho desenvolvido pelos alunos Flora Branchi, Jean Flesch e Mateus Riad. <br/>
						INF01021 - Projeto de Hiperdocumentos <br/>
						Turma U - 2016/2 </br>
						José Valdeni de Lima  e Roberto Cabral de Mello Borges.						
					</p>
					
					<hr>
					
					<!-- Navigation links -->
					<p class='links'>
						<a class='pull-left' href='index.php'><i class='fa fa-2x fa-angle-left'></i> Home </a>
					</p>
				</div>
			</div>
		</div>
	</section>
	
<?php include "_view/footer.php"; ?>