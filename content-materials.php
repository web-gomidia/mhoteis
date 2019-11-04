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
  <div id="materials">
    <div class="container">
      <div class="row">
        <?php
          wp_reset_query();
          $args = array( 'category_name' => 'materiais','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>9);
          query_posts($args);
          while ( have_posts() ) : the_post();        
        ?>
        <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
          <div class="material">
            <?=odin_thumbnail(767, 767, get_the_title(),true)?>
            <div class="bg">
              <div class="title">
                <a href="<?=get_post_meta(get_the_ID(), 'Link',true);?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" target="_blank">
                  <h3><?php the_title(); ?></h3>
                </a>
                <a href="<?=get_post_meta(get_the_ID(), 'Link',true);?>" class="btn btn-primary" target="_blank"><?=get_post_meta(get_the_ID(), 'Texto Link',true);?></a>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <?php
            odin_paging_nav();
            wp_reset_query();
          ?>
        </div>
      </div>      
    </div>
  </div>
</article><!-- #post-## -->
