<?php
// Custom Post Type Single Sample

$framework = new ELR_Framework;
get_header();

?>
<main class="main-content elr-container-full">
    <div class="elr-row">
        <div class="content-holder elr-col-two-thirds">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content/content', get_post_type()); ?>
            <?php $framework->link_pages(); ?>
            <?php get_template_part('partials/post-nav'); ?>
            <?php comments_template(); ?>
        <?php endwhile; ?>
        </div>
        <aside class="sidebar elr-col-third" id="sidebar">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</main>
<?php get_footer(); ?>