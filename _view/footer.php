			<footer>			
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">
								2016 &copy; Flora Branchi, Jean Flesch & Mateus Riad <br/>
								Projeto de Hiperdocumentos | <a href="http://www.inf.ufrgs.br/" target="_blank"> INF</a> | <a href="http://www.ufrgs.br/" target="_blank"> UFRGS </a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		
		<div class="rollback">
			<i class="fa fa-arrow-up fa-2x"></i>
		</div>
		
		<!-- JS plugins -->
		<script type="text/javascript">
			$(document).ready(function() {

				function checkRb() {
					var height = $(document).scrollTop();
					var offset = 300;

					if(height > offset) {
						$('.rollback').show();
					}
					else {
						$('.rollback').hide();	
					}
				}				

				checkRb();
				$(document).scroll(checkRb);

				$('.rollback').click(function() {
					var body = $("html, body");
					body.stop().animate({scrollTop:0}, '250');
				});
			});
		</script>
	</body>
</html>