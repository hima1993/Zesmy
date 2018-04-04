<!-- product-nav -->

<div class="product-easy">
	<div class="container">
		
		<script src="<?php echo base_url()?>template/js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
					<!-- //tab1 -->
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<?php foreach ($item_data as $item): ?>
            				
            				<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php echo "<img src='" . base_url() . "Template/images/" . $item->image1 . "' alt='' class='pro-image-front'/>" ?>
									<?php echo "<img src='" . base_url() . "Template/images/" . $item->image1 . "' alt='' class='pro-image-back'/>" ?>
									
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html"><?= $item->itemName;?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?= $item->price;?></span>
										<del>$120.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						
						
            							
        				<?php endforeach; ?>
						
						
						
						<!-- //tab2 -->
						<div class="clearfix"></div>
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
						<?php foreach ($item_data as $item): ?>
            				
            				<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php echo "<img src='" . base_url() . "Template/images/" . $item->image1 . "' alt='' class='pro-image-front'/>" ?>
									<?php echo "<img src='" . base_url() . "Template/images/" . $item->image1 . "' alt='' class='pro-image-back'/>" ?>
									
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html"><?= $item->itemName;?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?= $item->price;?></span>
										<del>$120.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						
						
            							
        				<?php endforeach; ?>
						
						
						
						
						<div class="clearfix"></div>						
					</div>
					<!-- //tab3 -->
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
						<?php foreach ($item_data as $item): ?>
            				
            				<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<?php echo "<img src='" . base_url() . "Template/images/" . $item->image1 . "' alt='' class='pro-image-front'/>" ?>
									<?php echo "<img src='" . base_url() . "Template/images/" . $item->image1 . "' alt='' class='pro-image-back'/>" ?>
									
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html"><?= $item->itemName;?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?= $item->price;?></span>
										<del>$120.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						      							
        				<?php endforeach; ?>
					
					
						<div class="clearfix"></div>		
					</div>	
				</div>	
			</div>
		</div>
	</div>
</div>
<!-- //product-nav -->

<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>