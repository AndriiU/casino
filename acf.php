<?php for ($i=1; $i < 18; $i++) { 
$item_top = "item_top" . $i;
$casino_logo = "casino_logo" . $i;
$rating = "rating" . $i;
$stars = "stars" . $i;
$coust = "coust" . $i;
$benefits1 = "benefits1" . $i;
$benefits2 = "benefits2" . $i;
$benefits3 = "benefits3" . $i;
$medal = "medal" . $i;
$buttom = "buttom" . $i;
if (get_field($stars) != NULL) {
	

?>
		
			<div class="acf-field">
				<div class="acf-field-title-header">
					<div class="acf-field-title">
						<span><?php the_field($item_top); ?></span>
					</div>
					<div class="acf-field-img">
						<img src='<?php the_field($casino_logo); ?>'>
					</div>	
				</div>
				
				<div class="acf-field-content">
					<div class="acf-rating">
						<?php the_field($rating); ?>
						
					</div>
					<div class="rating-result">
						<?php $star = get_field($stars);
						//echo $stars;
						if ($star == 1) {
						?>
						<span class="active"></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<?php
						} else if ($star == 2){
						?>
						<span class="active"></span>
						<span class="active"></span>
						<span></span>
						<span></span>
						<span></span>
						<?php
						} else if ($star == 3){
						?>
						<span class="active"></span>
						<span class="active"></span>
						<span class="active"></span>
						<span></span>
						<span></span>
						<?php 								
						} else if ($star == 4){
						?>
						<span class="active"></span>
						<span class="active"></span>
						<span class="active"></span>
						<span class="active"></span>
						<span></span>
						<?php 
						} else if ($star == 5){
							?><span class="active"></span><span class="active"></span><span class="active"></span><span class="active"></span><span class="active"></span><?php 
						}
						?>	
					</div>
					<div class="acf-upto">Up To:</div>
					<div class="acf-coust">C$ <?php the_field($coust); ?></div>
					<div class="acf-benefits">
						<div class="acf-benefits-left">
							<ul>
								<li><?php the_field($benefits1); ?></li>
								<li><?php the_field($benefits2); ?></li>
								<li><?php the_field($benefits3); ?></li>
							</ul>
						</div>
						<div class="acf-benefits-right">
							<img src="<?php the_field($medal); ?>">
						</div>
					</div>
					<div class="acf-clear"></div>
					<div class="acf-buttom">
						<a href='<?php the_field($buttom); ?>'>Play Now</a>
					</div>
					
				</div>
			</div>
		
<?php
}
	}
?>