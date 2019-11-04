<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="content" tabindex="-1" role="main">
		<?php if ( have_posts() ) : ?>
			<header id="header-section">
				<div class="title">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1><?php printf( __( 'Search Results for: %s', 'odin' ), get_search_query() ); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</header>		
			<div id="search">
				<div class="container">
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="row">
						<div class="col-xs-12">
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
							</a>
							<?php the_excerpt(); ?>
							<hr>
						</div>
					</div>
					<?php endwhile;?>
					<div class="row">
						<div class="col-xs-12">
							<?php odin_paging_nav(); ?>
						</div>
					</div>					
				</div>
			</div>		
		<?php else : ?>
			<header id="header-section">
				<div class="bg"></div>
				<div class="title">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2><?php the_title(); ?></h2>
							</div>
						</div>
					</div>
				</div>
			</header>		
			<div id="search">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h3>Nada encontrado - Tente novamente!</h3>
							<form method="get" id="searchform" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
								<div class="input-group">
									<input type="search" class="form-control" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_attr_e( 'Search', 'odin' ); ?>" />
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default" value="<?php esc_attr_e( 'Search', 'odin' ); ?>">
											<i class="glyphicon glyphicon-search"></i>
										</button>
									</span><!-- /input-group-btn -->
								</div><!-- /input-group -->
							</form><!-- /searchform -->							
						</div>
					</div>					
				</div>
			</div>		
		<?php endif; ?>
	</main><!-- #main -->

<?php
get_footer();
