<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_footer(); ?>
</head>
<body>
    <div class="footer-container">
        <div class="footer">
            <div class="footer__upper">
                <p class="fineprint">
                The information in this document is not personal financial product advice and has been prepared without taking into account the objectives, financial situation or needs of any particular person. Arena Securities does not hold an Australian Financial Services License and is not authorised to provide general or personal financial product advice. Before making any investment decision, you should consult a licensed financial adviser. Past performance is not indicative of future performance.
                </p>
            </div>
            <div class="footer__lower footer__lower--desktop">
                <img src="<?=get_theme_file_uri('/images/logo.png')?>" alt="logo">
                <p class="copyright">Copyright &copy; 2024 Arena Securities | Design by WallabyWeb</p>
            </div>
            <div class="footer__lower footer__lower--mobile">
                <p class="copyright">Copyright &copy; 2024 Arena Securities | Design by WallabyWeb</p>
            </div>
        </div>
    </div>
</body>