<?php
class Navigation {
	public static function get_link($page_name){
		switch($page_name) {
			case 'home': 
				return utf8_encode(
				"<a class='navbar-brand' href='home.php'>
					<img alt='Programando em C' class='img-responsive logo-header' src='_img/logo/logo.png'>
				</a>
				");
			case 'exemplo':
				return utf8_encode(
				"<a class='navbar-brand' href='index.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='introducao.php' title='titulo'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 1. Introdução </span>
				");
			case 'introducao':
				return utf8_encode(
				"<a class='navbar-brand' href='index.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='expressoes-aritmeticas.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 1. Introdução </span>
				");
			case 'exparit':
				return utf8_encode(
				"<a class='navbar-brand' href='introducao.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='expressoes-logicas.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 2. Expressões Aritméticas </span>
				");
			case 'explog':
				return utf8_encode(
				"<a class='navbar-brand' href='expressoes-aritmeticas.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='switch.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 3. Expressões Lógicas </span>
				");
			case 'switch':
				return utf8_encode(
				"<a class='navbar-brand' href='expressoes-logicas.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='lacos-iterativos.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 4. Switch </span>
				");
			case 'lacos':
				return utf8_encode(
				"<a class='navbar-brand' href='switch.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='vetores.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 5. Laços Iterativos </span>
				");
			case 'vetores':
				return utf8_encode(
				"<a class='navbar-brand' href='lacos-iterativos.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='strings.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 6. Vetores </span>
				");
			case 'strings':
				return utf8_encode(
				"<a class='navbar-brand' href='vetores.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='matrizes.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 7. Strings </span>
				");
			case 'matrizes':
				return utf8_encode(
				"<a class='navbar-brand' href='strings.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='bubblesort.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 8. Matrizes </span>
				");
			case 'bubblesort':
				return utf8_encode(
				"<a class='navbar-brand' href='matrizes.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='funcoes.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 9. Bubblesort </span>
				");
			case 'funcoes':
				return utf8_encode(
				"<a class='navbar-brand' href='bubblesort.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='ponteiros.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 10. Funções </span>
				");
			case 'ponteiros':
				return utf8_encode(
				"<a class='navbar-brand' href='funcoes.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='estruturas.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 11. Ponteiros </span>
				");
			case 'estruturas':
				return utf8_encode(
				"<a class='navbar-brand' href='ponteiros.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='arquivos.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 12. Estruturas </span>
				");
			case 'arquivos':
				return utf8_encode(
				"<a class='navbar-brand' href='estruturas.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='recursao.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 13. Arquivos </span>
				");
			case 'recursao':
				return utf8_encode(
				"<a class='navbar-brand' href='arquivos.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='funcao-rand.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 14. Recursão </span>
				");
			case 'rand':
				return utf8_encode(
				"<a class='navbar-brand' href='recursao.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-vhr'></span>
				<a class='navbar-brand' href='index.php'>
					<i class='fa fa-2x fa-angle-right'></i>
				</a>
				<span class='navbar-description'> 15. Função rand() </span>
				");
			// customize for every page...
			
			// quiz
			case 'quiz-introducao':
				return utf8_encode(
				"<a class='navbar-brand' href='introducao.php'>
					<i class='fa fa-2x fa-angle-left'></i>
				</a>
				<span class='navbar-description'> 1. Introdução </span>
				");
		}
	}
}
?>