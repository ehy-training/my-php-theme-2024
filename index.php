<?php get_header(); ?>
<div class="container my-blog-template">
   
   
    <?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>

   <article>
    <h2 class="my-post-title"><?php the_title(); ?></h2>
    
    <figure class="my-post-thumbnail"><?php the_post_thumbnail(); ?></figure>
    
    <?php the_content(); ?>
    </article>

    <?php
        
    endwhile;
endif;
?>
</div>
<?php get_footer(); ?>
