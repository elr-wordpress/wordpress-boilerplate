<?php
    use Framework\Helpers\Loop;
    $loop = new Loop;
    get_header();
?>
<main class="main-content elr-container-full">
    <div class="elr-row">
        <div class="content-holder elr-col-two-thirds">
            <header class="archive-header">
                <h1 class="archive-title">Archive</h1>
            </header>
            <?php $loop->loop(); ?>
        </div>
        <aside class="sidebar elr-col-third" id="sidebar">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</main>
<?php get_footer(); ?>