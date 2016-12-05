<?php
// includes...
require_once "scripts/navigation.php";
require_once "scripts/material.php";

$page_title = "Recursão";
include "_view/head.php";

$link_navbar = Navigation::get_link('recursao');
include "_view/header.php";
?>
<!-- HTML Content -->
<section id="#nomeSection">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> Recursão </h1>
                <h2> Introdução </h2>
                <p> 
                    Chamamos de recursividade ou recursão quando uma função chama a si mesma.
                    Em uma função recursiva, a cada chamada é criada na memória uma nova ocorrência da função com 
                    comandos e variáveis “isolados” das ocorrências anteriores. É uma alternativa a laços iterativos 
                    que pode trazer soluções mais elegantes. É muito usado para percorrer árvores e grafos. Para resolver
                    problemas comuns pode consumir muita memória desnecessariamente.
                </p>
                
                </br>
                
                <p>
                Um problema que surge ao usar a recursividade é como fazê-la parar. Caso o programador não tenha cuidado 
                é fácil cair num loop infinito recursivo, podendo inclusive esgotar a memória do computador.
                </p>

                <h2> Como fazer recursão </h2>
                <p> 
                    Toda recursividade é composta por um caso base e pelas chamadas recursivas. Abaixo temos um exemplo do cálculo
                    do fatorial usando a recursividade.
                </p>
                <pre><code class="cpp">
double fatorial(int n)
{

  double vfat;

  if ( n <= 1 )
     // Caso base: fatorial de n <= 1 retorna 1
     return (1);
  else
  {
     // Chamada recursiva
     vfat = n * fatorial(n - 1);
     return (vfat);
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
                    Material::pdf('Recursão', 'files/20.pdf');
                    Material::pdf('Recursão 2', 'files/21.pdf');
                    Material::quiz('Quiz online', 'quiz.php?area=recursao');
                  ?>
                </ul>         
                
                <!-- Navigation links -->
                <p class='links'>
                    <a class='pull-left' href='funcoes.php'><i class='fa fa-2x fa-angle-left'></i> Funções </a>
                    <a class='pull-right' href='index.php'> Home <i class='fa fa-2x fa-angle-right'></i></a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php include "_view/footer.php"; ?>