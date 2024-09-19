<?php 
/*
Template Name: Canvas 
Template Post Type: post, page
*/
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <div class="wrapper main-wrapper">


        <main>

            <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
    ?>

        </main>

    </div>
    <!--.main-wrapper-->
    <?php wp_footer() ?>
</body>

</html>
