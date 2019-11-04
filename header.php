<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="whatsapp">
		<a href="https://wa.me/" target="_blank">
			<i class="fab fa-whatsapp"></i>
		</a>
	</div>
	<header id="header" role="banner">
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-7 col-sm-7 col-lg-7">
						<div class="phones">
							<a href="tel:552125187733">Tel | 32 3254-7733</a>
							<a href="tel:551134769819">Wpp | 32 9954-1137</a>
						</div>
					</div>
					<div class="col-xs-12 col-md-5 col-sm-5 col-lg-5 text-right">
						<div class="infos">
							<a href="<?=home_url( '/contato' )?>"><i class="fas fa-phone-volume"></i> Contato</a>
							<a data-toggle="modal" data-target="#searchModal" class="search"><i class="fas fa-search"></i></a>
							<a href="https://www.linkedin.com" class="icon" target="_blank" alt="Linkedin" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
							<a href="https://www.facebook.com"class="middle icon" target="_blank" alt="Facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.youtube.com"class="icon" target="_blank" alt="YouTube" title="YouTube"><i class="fab fa-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="menu" data-spy="affix" data-offset-top="35">
			<div class="container">
				<div class="row">
					<div class="col-xs-7 col-md-2 col-sm-3 col-lg-2">
						<?php odin_the_custom_logo(); ?>
					</div>
					<div class="col-xs-5 col-sm-5 hidden-md hidden-lg text-right">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
							<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>					
					</div>						
					<div class="hidden pull-right">
						<a href="<?php echo wp_registration_url(get_the_permalink()); ?>" class="btn btn-primary btn-block bcolor">Criar Conta</a>
					</div>
					<div class="hidden-xs col-md-2 col-sm-4 col-lg-2 pull-right">
						<a href="<?php echo wp_registration_url(get_the_permalink()); ?>" class="btn btn-primary btn-block bcolor">Criar Conta</a>
					</div>
					<div class="col-xs-12 col-md-8 col-sm-12 col-lg-8">
						<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'main-menu',
										'depth'          => 2,
										'container'      => false,
										'menu_class'     => 'nav navbar-nav',
										'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
										'walker'         => new Odin_Bootstrap_Nav_Walker()
									)
								);
							?>
						</nav>						
					</div>
				</div>
			</div>
		</div>		
	</header><!-- #header -->
