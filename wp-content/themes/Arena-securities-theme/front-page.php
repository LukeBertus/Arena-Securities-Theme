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
        <div class="info-left">
            <h1>OUR COMPANY</h1>
            <p>Arena Securities is a boutique funds management firm based in Perth, Western Australia. Founded by CIO Aleck Arena, the firm operates with a focus on absolute performance, driven by a commitment to deep fundamental research and understanding of the businesses that we invest in. Arena Securities utilises a go anywhere approach as long as the manager deems the security to be in his circle of competence. Arena Securities is a high-conviction fund and holds between 6-30 positions.</p>
            <button>CONTACT US</button>
        </div>
        <div class="info-right">
            <img src="<?=get_theme_file_uri('images/tree.png')?>">
        </div>
    </div>
</div>

<?php 
    get_footer();
?>