<?php get_header();?>

<section id="blogPost">
    <div class="container">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="post-details">
    <div class="post-avatar"><?php echo get_avatar(get_the_author_meta('ID')); ?></div>
    <div class="post-author">By <?php the_author(); ?></div>
    </div>
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