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
	<div id="questions">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="search">
						<div class="input-group"> 
							<input type="search" id="accordionSearch"  placeholder="Digite sua dúvida" class="form-control"/>
							<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>                   
						</div>	
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="panel-group" id="accordionQuestions">
						<?php
							wp_reset_query();
							$args = array( 'category_name' => 'perguntas-frequentes','order'=>'ASC', 'orderby'=>'title', 'posts_per_page'=>-1); 
							query_posts($args);
							while ( have_posts() ) : the_post();
						?>						
						<div class="panel panel-default" id="<?=get_the_ID()?>">
							<div class="panel-heading">
								<a data-toggle="collapse" data-parent="#accordionQuestions" href="#collapse<?=get_the_ID()?>">
									<h4 class="panel-title"><?php the_title(); ?></h4>
									<div class="icon">
										<i class="fa fa-angle-down pull-right" aria-hidden="true"></i>
									</div>
								</a>
							</div>
							<div id="collapse<?=get_the_ID()?>" class="panel-collapse collapse">
								<div class="panel-body">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
						<?php
							endwhile;
							wp_reset_query();
						?> 						
					</div> 					
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->

<script>
	(function(){
		var searchTerm, panelContainerId;
		jQuery.expr[':'].containsCaseInsensitive = function (n, i, m){
			return jQuery(n).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
		};
		
		jQuery('#accordionSearch').on('change keyup paste click', function (){
			searchTerm = jQuery(this).val();
			jQuery('#accordionQuestions > .panel').each(function (){
				panelContainerId = '#' + jQuery(this).attr('id');
				jQuery(panelContainerId + ':not(:containsCaseInsensitive(' + searchTerm + '))').hide();
				jQuery(panelContainerId + ':containsCaseInsensitive(' + searchTerm + ')').show();
			});
		});
	}());	
</script>