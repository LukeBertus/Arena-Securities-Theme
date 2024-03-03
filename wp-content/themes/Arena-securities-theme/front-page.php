<?php 
    get_header();
?>

<div class="hero hero-background section__outer" style="background-image: url('<?=get_theme_file_uri('images/hero.jpg')?>');">
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
<div class="company-info section__outer" id="contact">
    <div class="section__inner">
        <div class="info__left" data-aos="fade-in">
            <div class="info-title">
                <svg width="3" height="40">
                    <rect width="3" height="40" rx="2" ry="2" stroke-width="1"/>
                </svg>
                <h1>OUR COMPANY</h1>
            </div>
            <p>Arena Securities is a boutique funds management firm based in Perth, Western Australia. Founded by CIO Aleck Arena, the firm operates with a focus on absolute performance, driven by a commitment to deep fundamental research and understanding of the businesses that we invest in.<br><br> Arena Securities utilises a go anywhere approach as long as the manager deems the security to be in his circle of competence. Arena Securities is a high-conviction fund and holds between 6-30 positions.</p>
            <button>CONTACT US</button>
        </div>
        <div class="info__right">
            <img src="<?=get_theme_file_uri('images/tree.png')?>">
        </div>
    </div>
</div>

<div class="transition__upper">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 24">
        <path fill-opacity="1" d="M0,12 C96,24 192,0 288,12 C384,24 480,0 576,12 L576,24 L0,24 Z"></path>
    </svg>
</div>

<div class="values section__outer">
    <div class="section__inner" data-aos="fade-in">
        <h1 class="values__title">FUND VALUES</h1>
        <?php $homepageValues = new WP_Query([
              'posts_per_page' => 4,
              'post_type' => 'values',
              'order' => 'ASC'
            ]);

            while ($homepageValues->have_posts()) { 
                $homepageValues->the_post(); 
                get_template_part('template-parts/value');
             } wp_reset_postdata();
          ?>
    </div>
</div>

<div class="transition__lower">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 24">
        <path fill-opacity="1" d="M0,12 C96,24 192,0 288,12 C384,24 480,0 576,12 L576,24 L0,24 Z"></path>
    </svg>
</div>

<div class="contact section__outer">
    <div class="contact__inner section__inner" data-aos="fade-in">
        <div class="contact__title">
            <svg width="3" height="40">
                <rect width="3" height="40" rx="2" ry="2" stroke-width="1"/>
            </svg>
            <h1>CONTACT US</h1>
        </div>
        <div class="contact__body">
            <h1>Aleck Arena</h1>
            <hr>
            <p>CIO</p>

            <div class="contact__methods">
                <?php $homepageContacts = new WP_Query([
                    'posts_per_page' => 4,
                    'post_type' => 'contact_methods',
                    'order' => 'ASC'
                ]);

                while ($homepageContacts->have_posts()) { 
                    $homepageContacts->the_post();
                        $type = get_field('type');
                        $title = get_the_title();
                        $linkto = get_field('link_to');
                    ?>
                    <div class="contact__method">
                        <div class="icon">
                            <img src="<?=the_post_thumbnail_url('medium')?>">
                        </div>
                        <div class="text">
                            <a href="<?=link_contact($type, $title, $linkto)?>"><?=the_title()?></a>
                        </div>
                    </div>
                <?php } wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>

<?php 
    get_footer();
?>