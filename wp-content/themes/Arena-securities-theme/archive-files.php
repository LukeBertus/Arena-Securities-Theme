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
        <div class="archive-hero media-hero hero-background section__outer" style="background-image: url('<?=get_theme_file_uri('images/media-hero.jpg')?>');">
            <div class="seciton__inner">
                <h1>Media</h1>
            </div>
        </div>
        <div class="archive-body media-body section__outer">
            <div class="section__inner">
                <div class="archive-container">
                    <a href="#"><h1>Media Title</h1></a>
                    <p class="excerpt">This is some dummy text. Just seeing how it looks</p>
                    <div class="link"><a href="#">READ MORE</a><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M507-480 384-357l56 57 180-180-180-180-56 57 123 123ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg></a></div>
                    <hr>
                    <p class="date">September 1, 2023</p>
                </div>
                <div class="archive-container">
                    <a href="#"><h1>Media Title, This One is Longer</h1></a>
                    <p class="excerpt">This is some dummy text. Just seeing how it looks</p>
                    <div class="link"><a href="#">READ MORE</a><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M507-480 384-357l56 57 180-180-180-180-56 57 123 123ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg></a></div>
                    <hr>
                    <p class="date">September 1, 2023</p>
                </div>
                <div class="archive-container">
                    <a href="#"><h1>Media Title</h1></a>
                    <p class="excerpt">This is some dummy text. Just seeing how it looks. this card has even more content, increasing its size drastically.</p>
                    <div class="link"><a href="#">READ MORE</a><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M507-480 384-357l56 57 180-180-180-180-56 57 123 123ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg></a></div>
                    <hr>
                    <p class="date">September 1, 2023</p>
                </div>
                <div class="archive-container">
                    <a href="#"><h1>Media Title</h1></a>
                    <p class="excerpt">This is some dummy text. Just seeing how it looks</p>
                    <div class="link"><a href="#">READ MORE</a><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M507-480 384-357l56 57 180-180-180-180-56 57 123 123ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg></a></div>
                    <hr>
                    <p class="date">September 1, 2023</p>
                </div>
                
            <?php
                $ValuePosts = new WP_Query([
                    'posts_per_page' => 4,
                    'post_type' => 'values',
                    'order' => 'ASC'
                ]);

                if (have_posts()) {
                    while(have_posts()) {
                        the_post();
                        get_template_part('template-parts/archive', 'content');
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