<?php get_header(); ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post()?>
    <div>
        <h1><?php the_title()?></h1>
        <?php the_excerpt()?>
    </div>
    <?php endwhile ?>
<?php endif?>


<?php get_footer(); ?>