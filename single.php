<?php
get_header();
wp_head();


while ( have_posts() ) : the_post(); 
?>

<style type="text/css" media="screen">
	html { margin-top: 0px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 0px !important; }
	}
    
    h2{
        padding: 50px 400px;
    }
</style>

<div class="container-fluid">
    <div class="sing-page-content">
        <h2 class="text-center">
            <?php the_title(); ?>
        </h2>

        <div class="text-center img-responsive">
        <?php the_post_thumbnail(); ?>
        </div>

        <p class="text-center">
            <?php the_excerpt(); ?>
        </p>
    </div>
</div>

<?php endwhile; 

wp_reset_postdata(); 

get_footer();?>