<?php get_template_part('template-parts/header');?>
<section class="page-wrap">
    <div class="container">
        <h1><?php the_title();?></h1>
        <?php get_template_part('includes/section','content');?>
    </div>
</section>


<?php get_footer();?>