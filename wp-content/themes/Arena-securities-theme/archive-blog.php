<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        get_header();
    ?>
    <span class="archive">
        <div class="archive-hero media-hero hero-background section__outer" style="background-image: url('<?=get_theme_file_uri('images/blog-hero.jpg')?>');">
            <div class="seciton__inner">
                <h1>Blog</h1>
            </div>
        </div>
        <div class="archive-body media-body section__outer">
            <div class="section__inner">
            <?php
                if (have_posts()) {
                    while(have_posts()) {
                        the_post();
                        get_template_part('template-parts/archiveCard', 'blog');
                    }
                } else echo "<h1 class='error'>No Media Available</h1>"
                ?>
            </div>
        </div>
    </span>
    <?php
        get_footer();
    ?>
</body>
</html>