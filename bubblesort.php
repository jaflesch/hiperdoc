<?php
	// includes...
	require_once "scripts/navigation.php";
	require_once "scripts/material.php";
	
	$page_title = "Bubblesort";
	include "_view/head.php";
	
	$link_navbar = Navigation::get_link('bubblesort');
	include "_view/header.php";
?>
	<!-- HTML Content -->
	<section id="#nomeSection">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> Bubblesort </h1>

                                        <p> 
                                            O bubblesort é um algoritmo simples de ordenação que varre a lista a ser ordenada repetidas vezes, comparando pares de 
                                            itens adjacentes e trocando-os caso estejam na ordem errada. A lista é varrida
                                            até que não haja mais trocas a serem feitas. Ele tem esse nome por causa da maneira que os
                                            números menores "borbulham" para o início da lista. Embora seja simples, ele é um algoritmo lento e 
                                            impraticável para a maioria dos problemas. Abaixo temos um exemplo de um problema que faz bubblesort.
					</p>

				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1> Exemplo </h1>
		
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">

	#include &lt;stdio.bar&gt;

        int main()
        {
          int array[100], n, c, d, swap;

          printf("Enter number of elements\n");
          scanf("%d", &n);

          printf("Enter %d integers\n", n);

          for (c = 0; c < n; c++)
            scanf("%d", &array[c]);

          for (c = 0 ; c < ( n - 1 ); c++)
          {
            for (d = 0 ; d < n - c - 1; d++)
            {
              if (array[d] > array[d+1]) /* For decreasing order use < */
              {
                swap       = array[d];
                array[d]   = array[d+1];
                array[d+1] = swap;
              }
            }
          }

          printf("Sorted list in ascending order:\n");

          for ( c = 0 ; c < n ; c++ )
             printf("%d\n", array[c]);

          return 0;
        }
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
					<h1> Material complementar </h1>
					
					<ul class='material-list'>
						<?php 
							Material::pdf('Bubblesort', 'files/16.pdf');
							Material::youtube('Bubblesort with Hungarian Folk dance', 'https://www.youtube.com/watch?v=lyZQPjUT5B4');
							Material::youtube('Comparação entre métodos de ordenação', 'https://www.youtube.com/watch?v=ZZuD6iUe3Pc');
							Material::quiz('Quiz online', 'quiz.php?area=bubblesort');
						?>
					</ul>					
					
					<!-- Navigation links -->
					<p class='links'>
						<a class='pull-left' href='rand.php'><i class='fa fa-2x fa-angle-left'></i> Função rand() </a>
						<a class='pull-right' href='funcoes.php'> Funções <i class='fa fa-2x fa-angle-right'></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	
<?php include "_view/footer.php"; ?>