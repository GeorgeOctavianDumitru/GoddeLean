<?php get_template_part('template-parts/header');?>


<main class = "contentStart">
     <?php
        while (have_posts()) :
            the_post();
        // Get the first image from the post content
        $first_image_url = get_first_image_in_post_content();

        // Check if an image was found
        if ($first_image_url) :
        ?>
    <section class = "hero__container" id = "blogpostHero" style="background-image: url('<?php echo esc_url($first_image_url); ?>');">
        <div class="overlay"></div>     
        <div class="content-container">
            <h1 class="entry-title"><?php the_title();?></h1>
            <h6 class="AuthoredInfo"> 
                 <?php
                    // Get the author's ID for the current post
                    $author_id = get_the_author_meta('ID');
                    // Get the author's display name
                    $author_name = get_the_author_meta('display_name', $author_id);
                    // Get the author's profile picture (avatar)
                    $author_avatar = get_avatar($author_id, 32); // You can adjust the size (32) as needed
                    // Output the author's profile picture, name, and date
                    echo $author_avatar; // Display the author's avatar
                    echo ' By ' . $author_name . ' / Posted on : ' . get_the_date();
                ?>
            </h6>
                <div class="cat_name_container">
                    <p>Post Category:</p>
                     <?php
                                    $categories = get_the_category();
                                    if ($categories) {
                                        echo '<ul class="post-categories">';
                                        foreach ($categories as $category) {
                                            echo '<li>' . esc_html($category->name) . '</li>';
                                        }
                                        echo '</ul>';
                                    }
                                    ?></div>
        </div>
        
    </section>
    <?php endif; ?>
    <section class="section__Archive">
        
        <div class="container">
            <div class="summary-container" id="summaryContainer">
                <div>Table of contents</div>
            </div>
            <div class="post__container">
                <?php the_content(); ?>
                <div class="related__articles">
                    <div class="latest-articles">
                        <h3>Latest Articles</h3>
                            <ul>
                                <?php
                                    $args = array(
                                        'post_type' => 'post', // Adjust the post type if needed
                                        'posts_per_page' => 5, // Number of latest articles to display
                                        'post__not_in' => array( get_the_ID() ), // Exclude the current post
                                    );

                                    $latest_articles = new WP_Query( $args );

                                    while ( $latest_articles->have_posts() ) : $latest_articles->the_post();
                                    ?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </li>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </ul>
                    </div>
                </div>
            </div>
          
        </div>
    </section>
     <?php endwhile; ?>
</main>










<?php get_template_part('template-parts/footer');?>