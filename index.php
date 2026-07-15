<?php get_header(); ?>
<main class="container" style="padding-top:50px; min-height: 60vh;">
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title( '<h1 class="font-golos">', '</h1>' );
        ?>
        <div class="additional-content-class">
            <?php the_content(); ?>
        </div>
        <?php
    endwhile;
else :
    echo '<h1 class="font-golos">Ничего не найдено</h1>';
endif;
?>
</main>
<?php get_footer(); ?>