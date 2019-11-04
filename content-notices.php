<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header id="header-section">
		<div class="title">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="notices">
		<div class="container">
			<?php
				wp_reset_query();
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array( 'category_name' => 'blog','order'=>'DESC', 'orderby'=>'date', 'paged' => $paged ); 
				query_posts($args);
				while ( have_posts() ) : the_post();
			?>                          
			<div class="notice">
				<div class="row">
					<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
						<div class="image">
							<?=odin_thumbnail(480, 360, get_the_title(),true)?>
							<div class="link text-center">
								<a href="<?php the_permalink(); ?>">
									<i class="fa fa-link" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-8 col-sm-8 col-lg-8">
						<p class="time"><?php the_time('j, F Y'); ?></p>
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
						</a>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="btn btn-border">Leia mais</a>
					</div>
				</div>
			</div>
			<?php endwhile; ?> 
			<div class="row">
				<div class="col-xs-12">
					<?php
						odin_paging_nav();
						wp_reset_query();					
					?>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
