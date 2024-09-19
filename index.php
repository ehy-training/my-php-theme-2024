<?php get_header(); ?>
<div class="container my-blog-template">
   
   
    <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
            ?>

           <article>
            <h2 class="my-post-title">
            
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

           <a href="<?php the_permalink(); ?>">
               <figure class="my-post-thumbnail">
            <?php the_post_thumbnail(); ?>
            </figure>
               
            </a>
            

            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Zum Beitrag …</a>
            </article>

            <?php
            endwhile;
        endif;
    ?>
</div>
<?php get_footer(); ?>
