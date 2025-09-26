<?php get_header(); // Load the header.php file ?>

    <main id="main" class="site-main">
        <?php
        if ( have_posts() ) :
            // Start the Loop if there are posts/pages to display
            while ( have_posts() ) :
                the_post(); // Sets up the post data
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); // Displays the page title ?></h1>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); // Displays the page content from the WordPress editor ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            // Content to show if no posts are found
            echo '<p>Sorry, no content found.</p>';
        endif;
        ?>
    </main><!-- #main -->


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<?php get_footer(); // Load the footer.php file ?>