<?php
	// includes...
	require_once "scripts/navigation.php";
	require_once "scripts/quiz.php";
	
	$page_title = "Quiz";
	include "_view/head.php";
	
	$link_navbar = Navigation::get_link('quiz-'.$_GET['area']);
	include "_view/header.php";

	$question = Quiz::get_question("quiz/{$_GET['area']}");
	$quiz_title = Quiz::title($_GET['area']);
?>
	<!-- HTML Content -->
	<section style="padding: 20px 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center"><?php echo $quiz_title; ?></h1>
				</div>
			</div>
		</div>
	</section>
	<section id="quiz-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 quiz-box">
				<h3><?php echo $question->title; ?></h3>
				<hr>
				<ul>
				<?php 
					$i = 0;
					foreach($question->options as $option) {
						if($i < 4) {
							echo ($question->options[4] == $i)? 
							"<li class='selected'>{$option} <i class='fa'></i> </li>" : 
							"<li>{$option} <i class='fa'></i> </li>";
						}
						
						$i++;
					};
				?>
				</ul>
				
				<p class='alert text-justify' id="msg-box" style="display:none;">
					<span class='center-block text-center' id="status"></span>
					<br/>
					<?php echo $question->text; ?>
				</p>
				
				<a href="" class='btn btn-quiz' id="btn-again"> 
					Tentar outra questão <i id="btn-again-icon" class='fa fa-refresh'></i>
				</a>
				
				</div>
			</div>
		</div>	
	</section>
	<script>
		$(document).ready(function(){
			// core
			selected = false;
			$('body').on("click", "#quiz-area li", function() {
				if(!selected) {
					if($(this).hasClass('selected')) {
						$(this).addClass('success');
						$($(this).children()[0]).addClass('fa-check fa-quiz');
						
						$("#status").html("<strong>Você acertou! <i class='fa fa-smile-o'></i></strong>");
						$('#msg-box').addClass('alert-success mgt40 mgb0').slideDown();
					}
					else {
						$(this).addClass('error');
						$($(this).children()[0]).addClass('fa-close fa-quiz');
						
						$('.selected').addClass('text-success').css("font-style", "italic");
						$("#status").html("<strong>Você errou! <i class='fa fa-frown-o'></i></strong>");
						$('#msg-box').addClass('alert-danger mgt40 mgb0').slideDown();
					}
				}
				
				selected = true;
			});
			
			// refresh animation
			$('#btn-again').hover(function(){
				$("#btn-again-icon").addClass('fa-spin');
			}, function() {
				$("#btn-again-icon").removeClass('fa-spin');
			});
		});
	</script>
<?php include "_view/footer.php"; ?>