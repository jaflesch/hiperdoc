<?php
class Quiz {
	public static function title($page_name){
		switch($page_name) {
			case 'introducao': return utf8_encode("1. Introdu��o");
			case 'expressoes-aritmeticas': return utf8_encode("2. Express�es Aritm�ticas");
			case 'expressoes-logicas': return utf8_encode("3. Express�es L�gicas");
			case 'switch': return utf8_encode("4. Switch");
			case 'lacos': return utf8_encode("5. La�os Iterativos");
			case 'vetores': return utf8_encode("6. Vetores");
			case 'strings': return utf8_encode("7. Strings");
			case 'matrizes': return utf8_encode("8. Matrizes");
			case 'rand': return utf8_encode("9. Fun��o rand()");
			case 'bubblesort': return utf8_encode("10. Bubblesort");
			case 'funcoes': return utf8_encode("11. Fun��es");
			case 'recursao': return utf8_encode("12. Recurs�o");
		}
	}
	
	public static function get_question($dir) {
		$files = scandir($dir);
		$size = count($files) - 1;
		
		// ([0] = ., [1] = .., ..)
		$index = rand(2, $size);
		$file = file($dir."/".$files[$index]);
		
		// pega t�tulo
		$titulo = "";
		$concat = true; $i=0;
		while($concat) {
			$symbol = substr($file[$i], 0, 2);
			
			if($symbol != ">>") {
				$titulo .= $file[$i];
			}
			else
				$concat = false;
			
			$i++;
		}					
		
		// respostas
		$respostas = array();
		$j = $i + 4;
		// indice resposta certa
		$k = $i - 1;
		for($i; $i < $j; $i++) {
			if($i-1 == $k)
				$respostas[] = $file[$i-1];
			else 
				$respostas[] = substr($file[$i-1], 2);
		}
		
		// randomiza respostas
		shuffle($respostas);
		
		// salva o �ndice da resposta certa
		for($i=0; $i<4; $i++) {
			if(substr($respostas[$i],0,2) == ">>") {
				$respostas[$i] = substr($respostas[$i], 2);
				$respostas[]= $i;
			}
		}
		
		// pega explica��o
		$explicacao = "";
		$j--;
		$k = $j;
		for ($j; $j < count($file); $j++) {
			if($j == $k)
				$explicacao .= substr($file[$j], 2);
			else
				$explicacao .= $file[$j];
		}
		
		$object = new stdclass();
		$object->title = $titulo;
		$object->options = $respostas;
		$object->text = $explicacao;
		
		return $object;
	}
}
?>