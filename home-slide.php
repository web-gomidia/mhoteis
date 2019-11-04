<div class="slide-home">
	<div id="FirstCarousel" class="carousel slide carousel-fade" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php
				wp_reset_query();
				$args = array( 'category_name' => 'slide','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>4); 
				query_posts($args);
				$i=1;
				while ( have_posts() ) : the_post();
				$i==1 ? $action = ' active' : $action = '';
			?>             
			<div class="item<?=$action?>">
				<?=odin_thumbnail( '', '', get_the_title(),true); ?>
				<div class="text">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>  
			<?php
				$i++;
				endwhile;
				wp_reset_query();
			?>      
		</div>
	</div>
</div>