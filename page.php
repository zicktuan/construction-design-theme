<?php get_header(); ?>
<div class="content no-mrg">
    <div class="container">
        <div id="pl-7788" class="panel-layout">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('page', 'content');  ?>
<?php endwhile;
endif; ?>
        </div>
        </div>
        </div>
    <?php get_sidebar();?>
<?php get_footer(); ?>
