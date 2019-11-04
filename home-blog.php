<div class="blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>Novidades</h2>
			</div>
		</div>
		<?php
			wp_reset_query();
			$args = array( 'category_name' => 'blog','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>3);
			query_posts($args);
			$i = 0;
			while ( have_posts() ) : the_post();
			$cat = get_the_category();
			if($i == 0){
		?>
		<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 nopad">
			<div class="notice ml">
				<?=odin_thumbnail( 640, 600, get_the_title(),true); ?>
				<a href="<?php the_permalink(); ?>">
					<div class="bg"></div>
				</a>
				<div class="title">
					<a href="<?php the_permalink(); ?>">
						<h3><?php the_title(); ?></h3>
					</a>
				</div>					
			</div>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-6 col-md-6 nopad">
		<?php }else{ ?>
		<div class="row">
			<div class="col-xs-12">
				<div class="notice mr">
					<?php if(wp_is_mobile()): ?>
					<?=odin_thumbnail( 640, 600, get_the_title(),true); ?>
					<?php else: ?>
					<?=odin_thumbnail( 640, 298, get_the_title(),true); ?>
					<?php endif; ?>
					<a href="<?php the_permalink(); ?>">
						<div class="bg"></div>
					</a>
					<div class="title">
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
						</a>
					</div>					
				</div>
			</div>
		</div>
		<?php
			}
			$i++;
			endwhile;
			wp_reset_query();
		?>
		</div>
	</div>	
</div>