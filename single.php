<?php get_header();?>

<section id="blogPost">
    <div class="container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="blog-header-image">
        <div class="img" style="background: url('<?php the_post_thumbnail_url(); ?>');"></div>
    </div>
    <?php dynamic_sidebar('top-banner-widget'); ?>
    <?php the_content(); ?>
    <?php dynamic_sidebar('bottom-banner-widget'); ?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>