<?php 
/*Template Name:  Places*/

get_header();
wp_head();

while ( have_posts() ) : the_post(); ?>

    <div class="container-fluid">
        <div class="single-page-content">
            <h1>
                <?php the_title(); ?>
            </h1>

            <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
        </a>

        <p>
            <?php the_excerpt(); ?>
        </p>
        <p>
            <?php the_content() ?>
        </p>
        </div>
    </div>

    <?php endwhile; 
    
    get_footer();
    ?>