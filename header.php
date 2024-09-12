<!DOCTYPE html>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
   <div class="wrapper main-wrapper">
    <header>
        <div class="container">
            
            <h1><?php bloginfo('title'); ?></h1>
            
        </div>
    </header>

    <nav class="nav-bar main-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>
   
    <main>