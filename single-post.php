<?php get_header()?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="article">
        <h1><?php the_title()?></h1>
        <p>Rédigé par : <?php the_author()?>, le <?php the_date()?></p>
        <hr>
        <h3><?php the_category(', ')?></h3>
        <img src="<?php the_post_thumbnail_url() ?>" alt="" width="500px" height="auto">
        <?php the_content() ?>
    </div>
    <?php endwhile ?>
</div>
<?php endif;?>
<?php get_footer() ?>