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
	<div id="about">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14825.079721581422!2d-43.3562458!3d-21.7310586!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x78edc6acf42c0a10!2sGo*21+M%C3%ADdia!5e0!3m2!1spt-BR!2sbr!4v1549482419881" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</article><!-- #post-## -->
