<?php

if ( get_theme_mod( 'author_box_posts' ) == 'no' ) return;

$coauthors = array(get_the_author());
if ( function_exists('get_coauthors') ) {
    $coauthors = get_coauthors();
}

foreach ($coauthors as $coauthor) { ?>
    <div class="post-author"> <?php
        if ( get_theme_mod( 'author_avatar_posts' ) != 'no' ) { ?>
            <div class="avatar-container">
                <?php echo get_avatar( get_the_author_meta( 'ID' , $coauthor->ID), 78, '', $coauthor->display_name );?>
            </div> <?php
        } ?>
        <div>
            <div class="author"><?php echo $coauthor->display_name ?></div>
            <p><?php the_author_meta('description', $coauthor->ID); ?></p>
        </div>
    </div> <?php
}
?>
