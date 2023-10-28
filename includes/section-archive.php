<!-- <?php if(have_posts()):while(have_posts()):the_post();?>
    <h1><?php the_title();?></h1>
    <?php the_content();?>
<?php endwhile;else:endif;?> -->


<!-- <?php 
    $categories = get_categories();

foreach ($categories as $category) {
    echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a><br>';
}

?> -->

 <?php
        $args = array(
            'post_type' => 'post', // Display regular posts
            'posts_per_page' => -1, // Display all posts
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="card mb-3 post__container <?php post_class(); ?>" id="post-<?php the_ID();?>">
                    <div class="card-body">
                        <?php
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                            if ($thumbnail_url) :
                            ?>
                            <div class="post-thumbnail" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
                            </div>
                        <?php endif; ?>
                        

                         <div class="card-data">
                             <div class="post-excerpt">
                            <?php
                                    $categories = get_the_category();
                                    if ($categories) {
                                        echo '<ul class="post-categories">';
                                        foreach ($categories as $category) {
                                            echo '<li>' . esc_html($category->name) . '</li>';
                                        }
                                        echo '</ul>';
                                    }
                                    ?>
                            <h2><?php the_title(); ?></h2>
                            <p class="auth">By:<?php the_author();?> / Posted on:  <?php the_date() ;?></p>
                                <?php the_excerpt(); ?>
                                
                            <a href="<?php the_permalink(); ?>" class="btn btn-success">Read more</a>
                         </div>
                         </div>
                    </div>
                </div>




            <?php endwhile; ?>
            <?php wp_reset_postdata(); // Reset the post data query ?>
        <?php else : ?>
            <p><?php esc_html_e('No posts found', 'your-theme-textdomain'); ?></p>
        <?php endif; ?>