<?php get_header(); ?>
<div class="container pt-5 pb-5">
    <div class="row">
        <h1><?php single_cat_title(); ?></h1>

        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="card text-center"">
                    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('smallest'); ?>" alt="" class="img-fluid">
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri() . '/img/placeholder.jpg'; ?>" alt="" class="img-fluid">
                    <?php endif;?>
                    <div class="card-body">
                        <h4 class="card-title"><?php the_title(); ?></h4>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-success btn-sm">Read more</a>
                    </div>
                    <div class="card-footer text-muted success-color white-text">
                        <p class="mb-0"><?php echo get_the_date(); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>