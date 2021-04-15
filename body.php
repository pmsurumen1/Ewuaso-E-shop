
   <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/shipping1.jpeg" alt="Los Angeles" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="img/lipa-na-mpesa.jpg" style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="img/shipping1.jpeg" alt="New York" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="img/lipa-na-mpesa.jpg" alt="New York" style="width:100%;">
        
      </div>
      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
     


		<!-- SECTION -->
		<div class="section mainn mainn-raised">
		
		
			<!-- container -->
			<div class="container">
			
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=78"><div class="shop">
							<div class="shop-img">
								<img src="./img/necklace-collection.jfif" alt="">
							</div>
							<div class="shop-body">
								<h3>Necklace<br>Collection</h3>
								<a href="product.php?p=66" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=72"><div class="shop">
							<div class="shop-img">
								<img src="./img/bracelets-collection.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Bracelets<br>Collection</h3>
								<a href="product.php?p=3" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=79"><div class="shop">
							<div class="shop-img">
								<img src="./img/earrings-collection.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Earrings<br>Collection</h3>
								<a href="product.php?p=23" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
                            </div></a>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		  
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Bracelets</a></li>
									<li><a data-toggle="tab" href="#tab1">Earrings</a></li>
									<li><a data-toggle="tab" href="#tab1">Necklace</a></li>
									<li><a data-toggle="tab" href="#tab1">Belts</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1" >
									
									<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 70 AND 75";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>KSH990.00</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										<!-- product -->
										
	
										<!-- /product -->
										
										
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Bracelets</a></li>
									<li><a data-toggle="tab" href="#tab2">Necklaces</a></li>
									<li><a data-toggle="tab" href="#tab2">Earrings</a></li>
									<li><a data-toggle="tab" href="#tab2">Belts</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 59 AND 65";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>KSH990.00</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>
						

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div id="get_product_home">
								<!-- product widget -->
								
								<!-- product widget -->
							</div>

							<div id="get_product_home2">
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/bracelet13.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Bracelets</p>
										<h3 class="product-name"><a href="#">Bracelet</a></h3>
										<h4 class="product-price">KSH980.00 <del class="product-old-price">KSH1190.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/earrings6.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Earrings</p>
										<h3 class="product-name"><a href="#">Maasai earring</a></h3>
										<h4 class="product-price">KSH900.00 <del class="product-old-price">KSH2090.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/necklace1.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Necklaces</p>
										<h3 class="product-name"><a href="#">Maasai necklace</a></h3>
										<h4 class="product-price">KSH970.00 <del class="product-old-price">KSH3090.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/belt3.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Belts</p>
										<h3 class="product-name"><a href="#">Maasai belt</a></h3>
										<h4 class="product-price">KSH1180.00 <del class="product-old-price">KSH2990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/belt5.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Belts</p>
										<h3 class="product-name"><a href="#">Belt</a></h3>
										<h4 class="product-price">KSH980.00 <del class="product-old-price">KSH1990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/necklace5.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Necklaces</p>
										<h3 class="product-name"><a href="#">Maasai Necklace</a></h3>
										<h4 class="product-price">KSH900.00 <del class="product-old-price">KSH1500.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/earrings9.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Earrings</p>
										<h3 class="product-name"><a href="#">Earrings</a></h3>
										<h4 class="product-price">KSH1980.00 <del class="product-old-price">KSH4990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/earrings5.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Earrings</p>
										<h3 class="product-name"><a href="#">Earrings</a></h3>
										<h4 class="product-price">KSH980.00 <del class="product-old-price">KSH2990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/necklace.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Necklaces</p>
										<h3 class="product-name"><a href="#">Necklace</a></h3>
										<h4 class="product-price">KSH880.00 <del class="product-old-price">KSH990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs">
					    
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/bracelet5.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Bracelets</p>
										<h3 class="product-name"><a href="#">Bracelet</a></h3>
										<h4 class="product-price">KSH700.00 <del class="product-old-price">KES990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/belt2.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Belts</p>
										<h3 class="product-name"><a href="#">Belt</a></h3>
										<h4 class="product-price">KSH600.00 <del class="product-old-price">KSH990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/belt3.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Belts</p>
										<h3 class="product-name"><a href="#">Belt</a></h3>
										<h4 class="product-price">KSH2000.00 <del class="product-old-price">KSH3990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/belt.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Belts</p>
										<h3 class="product-name"><a href="#">Belt</a></h3>
										<h4 class="product-price">KSH980.00 <del class="product-old-price">KSH1200.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->
								

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/bracelet4.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Bracelets</p>
										<h3 class="product-name"><a href="#">Bracelet</a></h3>
										<h4 class="product-price">KSH980.00 <del class="product-old-price">KSH1200.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/earrings9.jfif" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Earrings</p>
										<h3 class="product-name"><a href="#">Earrings</a></h3>
										<h4 class="product-price">KSH770.00 <del class="product-old-price">KSH990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
</div>
		