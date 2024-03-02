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
        <div class="media-hero section__outer">
            <div class="seciton__inner">
                <h1>Blog</h1>
            </div>
        </div>
        <div class="media-body section__outer">
            <div class="section__inner">
                <?php
                if (have_posts()) {
                    while(have_posts()) {
                        the_post(); ?>
                        <div><?=get_the_title()?></div>
                    <?php }
                } else echo "<h1 class='error'>No Blogs Found</h1>"
                ?>
            </div>
        </div>
    </span>
    <?php
        get_footer();
    ?>
</body>
</html>