<?php get_header(); ?>
<section id="recentBlogs">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if ( has_post_thumbnail() ) {
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
} 
?>
<?php static $count = 0;
if ($count == 6 ) { break; }
else { ?>
    <a class="recentBlogCard" style="background-image: url(<?php echo $feat_image; ?>);" href="<?php the_permalink(); ?>" >
        <div class="recentBlogCardInner">
            <div class="post-categories">
                <span class="<?php echo get_post_meta($post->ID, 'category_class', true); ?>
"><?php echo get_post_meta($post->ID, 'category_name', true); ?>
</span>
            </div>
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
<?php $count++; } ?>
    <?php endwhile; ?>
<?php endif; ?>
</section>
    
<?php dynamic_sidebar('top-banner-widget'); ?>

<div class="sectionHeader">
    <h2>Trending Topics</h2><i class="fas fa-circle"></i>
</div>
<php? rewind_posts(); ?>
    <section id="popularCategories">

    <?php foreach (get_categories(array(
    'orderby' => 'count',
    'order'   => 'DESC',
    'number'  => '4'
    )) as $cat) : ?>

        <a href="<?php echo get_category_link($cat->term_id); ?>" class="categoryCardWrapper">
            <div class="categoryCard <?php echo $cat->slug; ?>"></div>
            <div class="post-categories <?php echo $cat->slug; ?>">
                <span><?php echo $cat->cat_name; ?></span>
            </div>
        </a>

<?php endforeach; ?>
</section>
<?php dynamic_sidebar('bottom-banner-widget'); ?>
    
<div class="sectionHeader">
    <h2>Editors' Picks</h2><i class="fas fa-circle"></i>
</div>
    
<section id="editorPicks">
<php? rewind_posts(); ?>
<?php if ( has_post_thumbnail() ) {
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
} 
?>
<?php if (has_tag('editor')) { ?>
    <a href="<?php the_permalink(); ?>" class="blogCard">
        <div class="imgWrapper" style="background-image: url(<?php echo $feat_image; ?>);">
            <div class="post-categories">
                <span class="<?php echo get_post_meta($post->ID, 'category_class', true); ?>"><?php echo get_post_meta($post->ID, 'category_name', true); ?></span>
            </div>
        </div>
        <div class="post-details">
            <h3 class="post-title"><?php the_title(); ?></h3>
            <div class="post-author"><div class="post-avatar"><?php echo get_avatar($author->ID); ?></div>By <?php the_author(); ?></div>
            <div class="post-date"><?php echo get_the_date('F j, Y'); ?></div>
        </div>
        <div class="post-excerpt"><?php the_excerpt(); ?></div>
    </a>
<?php } ?>

</section>
<?php get_footer(); ?>
        