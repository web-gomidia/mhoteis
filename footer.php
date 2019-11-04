<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	<footer id="footer" role="contentinfo">
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-2 col-sm-12 col-lg-2">
						<center>
							<?php odin_the_custom_logo(); ?>
						</center>
					</div>
					<div class="col-xs-12 col-md-5 col-sm-12 col-lg-5 text-center">
						<div class="infos">
							<span><strong>Endereço:</strong></span>
							<span>Rua Evilásio Franco 12, Quintas da Avenida, Juiz de Fora/MG</span>
							<span><strong>Telefone:</strong></span>
							<span>(32) 3692 5600</span>	
						</div>
					</div>
					<div class="col-xs-12 col-md-3 col-sm-12 col-lg-3 text-center">
						<div class="social">
							<span>Siga-nos</span>
							<a href="https://www.linkedin.com" class="icons" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
							<a href="https://www.facebook.com" class="icons" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.youtube.com" class="icons" title="YouTube" target="_blank"><i class="fab fa-youtube"></i></a>
						</div>
					</div>
					<div class="col-xs-12 col-md-2 col-sm-12 col-lg-2">
						<a href="<?=esc_url(home_url('/contato'))?>" class="btn btn-primary btn-block">Sugestões</a>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-9 col-md-10 col-sm-10 col-lg-10">
						<p>&copy; <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?></p>
					</div>
					<div class="col-xs-3 col-md-2 col-sm-2 col-lg-2 text-right">
						<a href="https://www.gomidia.com.br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-go.png"/></a>
					</div>
				</div>
			</div>
		</div>		
	</footer><!-- #footer -->
	
	<!-- Modal -->
	<div id="searchModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Pesquisar</h4>
				</div>
				<div class="modal-body">
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

	<?php wp_footer(); ?>
</body>
</html>
