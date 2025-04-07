<?php get_header(); ?>

<h1 id="title">Hello, this is the Index page</h1> 

<main>
    <?php get_template_part('includes/section' , 'one'); ?>
    <?php get_template_part('includes/section' , 'two'); ?>
    <?php get_template_part('includes/section' , 'conditional'); ?>
</main>

<?php get_footer(); ?>