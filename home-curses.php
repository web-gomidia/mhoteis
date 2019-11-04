<div class="courses">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>Nossos Cursos</h2>
			</div>
		</div>
		<div class="row">
            <?php
                wp_reset_query();
                $args = array( 'category_name' => 'cursos','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>6); 
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
            <?php
                endwhile;
                wp_reset_query();
            ?>
		</div>
	</div>
</div>