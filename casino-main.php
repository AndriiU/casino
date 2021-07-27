<?php
/**
 * Template Name: Casino Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package casino
*/


get_header();
?>

	<main id="primary" class="site-main">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<div class="page-header-acf">
					<?php 
						the_title( '<h1 class="entry-title">', '</h1>' ); 
						the_field('header_description');				
					?>					
				</div>

			</header><!-- .entry-header -->

			<?php casino_post_thumbnail(); ?>

			<div class="entry-content">


				<div class="content-acf">
					<?php include 'acf.php' ?>
					<!-- <div class="acf-field">
						<div class="acf-field-title-header">
							<div class="acf-field-title">
								<span><?php the_field('item_top1'); ?></span>
							</div>
							<div class="acf-field-img">
								<img src="<?php the_field('casino_logo1'); ?>">
							</div>	
						</div>
						
						<div class="acf-field-content">
							<div class="acf-rating">
								<?php the_field('rating1'); ?>
								
							</div>
							<div class="rating-result">
								<?php $stars1 = get_field('stars1');
								//echo $stars;
								if ($stars1==1) {
								?>
								<span class="active"></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<?php
								} else if ($stars1==2){
								?>
								<span class="active"></span>
								<span class="active"></span>
								<span></span>
								<span></span>
								<span></span>
								<?php
								} else if ($stars1==3){
								?>
								<span class="active"></span>
								<span class="active"></span>
								<span class="active"></span>
								<span></span>
								<span></span>
								<?php 								
								} else if ($stars1==4){
								?>
								<span class="active"></span>
								<span class="active"></span>
								<span class="active"></span>
								<span class="active"></span>
								<span></span>
								<?php 
								} else if ($stars1==5){
									?><span class="active"></span><span class="active"></span><span class="active"></span><span class="active"></span><span class="active"></span><?php 
								}
								?>	
							</div>
							<div class="acf-upto">Up To:</div>
							<div class="acf-coust">C$ <?php the_field('coust1'); ?></div>
							<div class="acf-benefits">
								<div class="acf-benefits-left">
									<ul>
										<li><?php the_field('benefits11'); ?></li>
										<li><?php the_field('benefits21'); ?></li>
										<li><?php the_field('benefits31'); ?></li>
									</ul>
								</div>
								<div class="acf-benefits-right">
									<img src="<?php the_field('medal1'); ?>">
								</div>
							</div>
							<div class="acf-clear"></div>
							<div class="acf-buttom">
								<a href="<?php the_field('buttom1'); ?>">Play Now</a>
							</div>
							
						</div>
					</div> -->
				</div> 
				
				
				<?php
				
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'casino' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
			<div class="acf-clear"></div>
			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								__( 'Edit <span class="screen-reader-text">%s</span>', 'casino' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		</article><!-- #post-<?php the_ID(); ?> -->

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
?>