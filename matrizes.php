<?php
	// includes...
	require_once "scripts/navigation.php";
	require_once "scripts/material.php";
	
	$page_title = "Matrizes";
	include "_view/head.php";
	
	$link_navbar = Navigation::get_link('matrizes');
	include "_view/header.php";
?>
	<!-- HTML Content -->
	<section id="#nomeSection">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> Matrizes </h1>
                                        
					<p> 
						Matriz é a uma estrutura de dados do tipo vetor com duas ou mais dimensões, 
                                                é uma coleção de variáveis de mesmo tipo, acessíveis com um único nome e armazenados contiguamente na memória.
                                                Na prática, as matrizes formam tabelas na memória.
					</p>
					
					<h2> Declaração</h2>

                                        <pre><code class="cpp">
float Media[5][2];
</code></pre>
                                        </br>
                                        <p>
                                            O valor 5 representa a quantidade de linhas. </br>
                                        O valor 2 representa a quantidade de colunas.
                                        </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1> Exemplo </h1>
		
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
int main (void )
{
  int matriz[2][2],i, j;
 
  printf ("\nDigite valor para os elementos da matriz\n\n");
 
  for ( i=0; i<3; i++ )
    for ( j=0; j<3; j++ )
    {
       printf ("\nElemento[%d][%d] = ", i, j);
       scanf ("%d", &matriz[ i ][ j ]);
    }
 
   printf("\n\n******************* Saida de Dados ********************* \n\n");
 
   for ( i=0; i<3; i++ )
    for ( j=0; j<3; j++ )
    {
       printf ("\nElemento[%d][%d] = %d\n", i, j,matriz[ i ][ j ]);
    }
 
  getch();
  return(0);
}
					</code></pre>
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
							Material::pdf('Matrizes', 'files/14.pdf');
							Material::youtube('Programando em C - Aula 10', 'https://www.youtube.com/watch?v=ufeNavCfTK4');
							Material::quiz('Quiz online', 'quiz.php?area=matrizes');
						?>
					</ul>					
					
					<!-- Navigation links -->
					<p class='links'>
						<a class='pull-left' href='strings.php'><i class='fa fa-2x fa-angle-left'></i> Strings </a>
						<a class='pull-right' href='rand.php'> Função rand() <i class='fa fa-2x fa-angle-right'></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	
<?php include "_view/footer.php"; ?>