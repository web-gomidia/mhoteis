<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
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
	<div id="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="text">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 hidden-xs"></div>
				<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
					<?=do_shortcode('[contact-form-7 id="68" title="Formulário de contato"]')?>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
