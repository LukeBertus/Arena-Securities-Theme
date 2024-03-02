<div class="archive-container">
    <a href="<?=get_field('media')?>" target="_blank"><h1><?php the_title()?></h1></a>
    <div class="excerpt"><?=get_the_content()?></div>
    <div class="link"><a href="<?=get_field('media')?>" target="_blank"><?=get_field('link_text')?></a><a href="<?=get_field('media')?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M507-480 384-357l56 57 180-180-180-180-56 57 123 123ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg></a></div>
    <hr>
    <p class="date"><?=get_the_date('F j, Y')?></p>
</div>