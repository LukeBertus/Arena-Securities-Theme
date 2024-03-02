<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <div class="header-container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="<?=get_theme_file_uri('/images/logo.png')?>" width="150" alt="site logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link <?php if (is_front_page()) echo "nav-active"?>" href="<?=esc_url(home_url())?>">HOME</a>
                    <a class="nav-item nav-link <?php if (get_post_type() == 'files' || is_post_type_archive('files')) echo "nav-active"?>" href="<?=get_post_type_archive_link('files')?>">MEDIA</a>
                    <a class="nav-item nav-link <?php if (get_post_type() == 'blog' || is_post_type_archive('blog')) echo "nav-active"?>" href="<?=get_post_type_archive_link('blog')?>">BLOG</a>
                    <a class="nav-item nav-link <?php if (get_post_type() == 'updates' || is_post_type_archive('updates')) echo "nav-active"?>" href="<?=get_post_type_archive_link('updates')?>">UPDATES</a>
                    <a class="nav-item nav-link" href="#">ABOUT</a>
                </div>
            </div>
        </nav>
    </div>
</body>