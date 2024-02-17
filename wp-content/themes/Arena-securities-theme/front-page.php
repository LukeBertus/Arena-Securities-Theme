<?php 
    get_header();
?>

<div class="hero section__outer" style="background-image: url('<?=get_theme_file_uri('images/hero.jpg')?>');">
    <div class="section__inner">
        <div class="title_container">
            <h1 class="page_title">ARENA SECURITIES</h1>
            <hr>
            <div class="subtitle_container" style="height: 100px;">
                <p class="page_subtitle hidden">A Private Investment Company</p>
            </div>
        </div>
    </div>
</div>

<div class="company-info section__outer">
    <div class="section__inner">
        <div class="info info__left">
            <div class="info-title">
                <svg width="3" height="40">
                    <rect width="3" height="40" rx="2" ry="2" stroke-width="1"/>
                </svg>
                <h1>OUR COMPANY</h1>
            </div>
            <p>Arena Securities is a boutique funds management firm based in Perth, Western Australia. Founded by CIO Aleck Arena, the firm operates with a focus on absolute performance, driven by a commitment to deep fundamental research and understanding of the businesses that we invest in.<br><br> Arena Securities utilises a go anywhere approach as long as the manager deems the security to be in his circle of competence. Arena Securities is a high-conviction fund and holds between 6-30 positions.</p>
            <button>CONTACT US</button>
        </div>
        <div class="info info__right">
            <img src="<?=get_theme_file_uri('images/tree.png')?>">
        </div>
    </div>
</div>

<div class="principle section__outer">
    <div class="section__inner">
        <h1 class="principle__title">FUND VALUES</h1>
        <?php $homepageEvents = new WP_Query([
              'posts_per_page' => 4,
              'post_type' => 'principles',
            ]);

            while ($homepageEvents->have_posts()) { 
                $homepageEvents->the_post(); ?>
                    <div class="principle__card">
                        <div class="icon">
                            <img src="<?=the_post_thumbnail_url('medium')?>">
                        </div>
                        <div class="text">
                            <h1><?=the_title()?></h1>
                            <hr>
                            <p><?=the_content()?></p>
                        </div>
                    </div>
                    

                <?php
             } wp_reset_postdata();
          ?>
    </div>
</div>
<?php 
    get_footer();
?>