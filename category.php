<?php get_header(); ?>

<section id="category">
        <div class="title"><h1><?php single_cat_title(); ?></h1><i class="fas fa-circle fa-xs"></i></div>
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if ( has_post_thumbnail() ) {
            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            } 
        ?>

        <a class="categoryBlogCard" style="background-image: url(<?php echo $feat_image; ?>);" href="<?php the_permalink(); ?>">
        <div class="categoryBlogCardInner">
            <div class="post-details">
                <h3 class="post-title">
                <?php the_title(); ?>
                </h3>
                <div class="post-date">
                <?php echo get_the_date('F j, Y'); ?>
                </div>
            </div>
        </div>


        </a>
            <?php endwhile; else : ?>
            <h2>We're working on it come back later</h2>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>