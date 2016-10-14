<?php
	// includes...
	require_once "scripts/navigation.php";
	
	$page_title = "Página Exemplo 2";
	include "_view/head.php";
	
	$link_navbar = Navigation::get_link('matrizes');
	include "_view/header.php";
?>
	<!-- HTML Content -->
	<section id="#nomeSection">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1> 1. Título Seção Ímpar</h1>
					<h2> 1.1. Título Subseção </h2>
					<p> 
						Lorem ipsum dolor sit amet, lobortis delicata in vel, te pri eruditi contentiones. Te nam suscipit explicari. 
						Option mediocrem no eam. Vix ea magna doctus similique, ei vix vero theophrastus.
						Commodo gloriatur mei id. Ne eos diam graeci persius, elit graeci an eos. Ex affert facilisis pri, 
						vix oratio doming verterem ut. Te eos possim volumus, nullam possim menandri nec id, cum mandamus 
						inimicus no. Nam an habeo graece, ei tota dicant est. Consul disputationi his ea, vim saperet consetetur ea. 
						In duo utamur explicari. No aliquam consectetuer vis. In corpora suscipiantur his, id discere mandamus pro. 
						Eruditi assentior repudiandae id usu, appareat incorrupte honestatis et sit. Per cu offendit atomorum, pro 
						id deleniti placerat suavitate, pri te quas inermis vituperata. Cum noster aperiam in. Vix ne conceptam 
						scriptorem. Eam ea ponderum ocurreret, vix te facete luptatum theophrastus. Cu inermis detraxit deserunt pro. 
						No pro case iracundia evertitur, quo an summo atomorum. Graece consetetur sea id, ex eam regione legimus nostrum. 
						Id mea augue albucius perfecto, vix cibo sensibus at.
					</p>
					
					<h2> 1.2. Textos </h2>
					<p> 
						<strong>Texto em negrito</strong>.<br/>
						Texto com destaque para sintaxes da linguagem... ex.: <em>for</em>, <em>int</em>, <em>return</em>...  <br/>
						
						Lorem ipsum dolor sit amet, lobortis delicata in vel, te pri eruditi contentiones. Te nam suscipit explicari. 
						Option mediocrem no eam. Vix ea magna doctus similique, ei vix vero theophrastus.
						Commodo gloriatur mei id. Ne eos diam graeci persius, elit graeci an eos. Ex affert facilisis pri, 
						vix oratio doming verterem ut. Te eos possim volumus, nullam possim menandri nec id, cum mandamus 
						inimicus no. Nam an habeo graece, ei tota dicant est. Consul disputationi his ea, vim saperet consetetur ea. 
						In duo utamur explicari. No aliquam consectetuer vis. In corpora suscipiantur his, id discere mandamus pro. 
						Eruditi assentior repudiandae id usu, appareat incorrupte honestatis et sit. Per cu offendit atomorum, pro 
						id deleniti placerat suavitate, pri te quas inermis vituperata. Cum noster aperiam in. Vix ne conceptam 
						scriptorem. Eam ea ponderum ocurreret, vix te facete luptatum theophrastus. Cu inermis detraxit deserunt pro. 
						No pro case iracundia evertitur, quo an summo atomorum. Graece consetetur sea id, ex eam regione legimus nostrum. 
						Id mea augue albucius perfecto, vix cibo sensibus at.
					</p>
					<h2> 1.2. Subtítulo </h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1> Exemplo </h1>
		
					<div class="console-header"><img src="_img/console/icon.png"></div>
					<pre><code class="cpp">
	// o código nem compila, mas é só pra mostrar a syntax highlighting mesmo 
	#include &lt;foo.bar&gt;
	#define a c
	
	int main(char args[]) {

		int i = 0;
		printf("%d", i + '5');
		
		int a = foo(bar);
		a++;
		while(i == true);
		
		// teste (a formatação fica toda cagada no arquivo html para trechos de código btw) :/
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
					<h1> 2. Título Seção Par</h1>
					
					<p class='links'>
						<a class='pull-left' href='index.php'><i class='fa fa-2x fa-angle-left'></i> Título tópico anterior</a>
						<a class='pull-right' href='exemplo-2.php'>Título próximo tópico <i class='fa fa-2x fa-angle-right'></i></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	
<?php include "_view/footer.php"; ?>