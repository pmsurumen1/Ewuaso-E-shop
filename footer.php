<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Ewuaso E-shop is a non-profit startup founded in May 2020 by Philip Surumen.
								Philip Surumen is a young entrepreneur, who tasked himself in alleviating poverty
							in his community. The startup is based in Ewuaso, a small rural town in the heart of Maasai land.
						It is one of the remotest parts of Kajiado county, in Kenya. It is a very arid place where no crop stays green for a month. Substistence livestock keeping is the primary source of income. When there is a drought, many livestocks die which deprive people with few livestocks of their primary source of income. Before the startup's founding, women had been selling their handicrafts to American and European tourists. The global pandemic disrupted the business, which prompted me to apply my computer programming skills to come up with this site and through the support of many people, it has been a success</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Ewuaso ,Kenya</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>0748199805</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>pmsurumen@gmail.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Get involved</h3>
								<p>If you want to volunteer with this great initiative, call me on 0748199805</p>
							</div>
						</div>
						<div class="col-md-6 text-center" style="margin-top:80px;">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
								<li><a href="#"><i class="fa fa-snapchat-square"></i></a></li>
								<li><a href="https://philipsurumen.medium.com/"><i class="fa fa-medium"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>

							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  Ewuaso E-shop</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>

						

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	
