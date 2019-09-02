<?php get_header(); ?>
<div class="container pt-5 pb-5">
    <div class="row">
        <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('largest'); ?>" alt="" class="img-fluid">
        <?php endif;?>
        
        <h1><?php the_title(); ?></h1>

        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        
            <?php the_content(); ?>

        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>