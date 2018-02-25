<?php get_header(); ?>

<div class="container">
    <?php
    
    if (have_posts()) :
        
        while (have_posts()) : the_post();
        
            get_template_part('post-formats/single', get_post_format());
            
        endwhile;
        
        comments_template();
        
    endif;
    
        
    $adjacent_post = get_adjacent_post(true, '', false);

    if ($adjacent_post) :
    
        $adjacent_post_ID = $adjacent_post->ID;

        if (!has_post_thumbnail($adjacent_post_ID)) {
            $postClass = " no-image-post";
        }
    ?>
    
    <?php if (!comments_open()) : ?>
        <div class="no-comments-space"></div>
    <?php endif;?>
    
    <div id="post-<?php echo $adjacent_post_ID; ?>" class="post adjacent-post <?php echo $postClass; ?>">
        
        <p class="adjacent-post-title"><?php _e('Next Post', 'wordit'); ?></p>

        <?php if (has_post_thumbnail($adjacent_post_ID)) : ?>
            <div class="post-featured-image">
                <?php echo get_the_post_thumbnail($adjacent_post_ID, 'full'); ?>
            </div>
        <?php endif; ?>

        <div class="post-content-wrapper">

            <div class="post-date">
                <span class="post-date-d"><?php echo get_the_date("d", $adjacent_post_ID); ?></span> 
                <span class="post-date-M"><?php echo get_the_date("M", $adjacent_post_ID); ?></span> 
            </div>

            <h1 class="post-title"><?php echo $adjacent_post->post_title; ?></h1>

            <div class="post-content">
                <p><?php echo apply_filters('get_the_excerpt', $adjacent_post->post_excerpt); ?></p>
            </div>

            <a class="post-permalink" href="<?php echo get_the_permalink($adjacent_post_ID); ?>"><?php _e('Continue Reading', 'wordit'); ?></a>

        </div>
    </div>
        
    <?php endif; ?>

</div>

<?php get_footer(); ?>