<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
 $cat = get_the_category();
?>

<article id="post-<?php the_ID(); ?>">
	<header id="header-section">
		<div class="title">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1><?=$cat[0]->name?></h1>
					</div>
				</div>
			</div>
		</div>
	</header>	
	<div id="text">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
