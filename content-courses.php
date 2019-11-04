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
	<div id="courses">
		<div class="container">
			<div class="row">
				<?php
					wp_reset_query();
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$args = array( 'category_name' => 'cursos','order'=>'DESC', 'orderby'=>'date', 'paged' => $paged ); 
					query_posts($args);
					while ( have_posts() ) : the_post();
				?>
				<div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 text-center">
					<div class="course">
						<div class="image">
							<?=odin_thumbnail( 360, 180, get_the_title(),true); ?>
							<a href="<?php the_permalink(); ?>">
								<div class="view text-center">
									<i class="fa fa-link fa-3x" aria-hidden="true"></i>
								</div>
							</a>                  
						</div>
						<div class="infos">
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
							</a>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="link">Saiba Mais</a>
						</div>   
	                </div>
	            </div>				
				<?php endwhile; ?>	
			</div>
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
