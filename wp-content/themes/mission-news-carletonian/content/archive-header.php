<?php
if ( is_home() ) {
	echo '<h1 class="screen-reader-text">' . esc_html( get_bloginfo( "name" ) ) . '</h1>';
}

// if not archive or title & description hidden via Customizer
if ( ! is_archive() || ( get_theme_mod( 'archive_title' ) == 'no' ) && get_theme_mod( 'archive_description' ) == 'no' ) {
	return;
}

$icon_class = 'newspaper';
$prefix = esc_html_x( '', 'Posts published in CATEGORY', 'mission-news' );

if ( is_tag() ) {
	$icon_class = 'tag';
	$prefix = esc_html__( 'Articles tagged as', 'mission-news' );
} elseif ( is_date() ) {
	$icon_class = 'calendar';
	// Repeating default value to add new translator note - context may change word choice
	$prefix = esc_html_x( 'Articles published in', 'Posts published in MONTH', 'mission-news' );
}
?>
<?php if ( is_author() ) : ?><div class="loop-container"><div class="post-author"><?php else : ?><div class='archive-header'><?php endif ?>
	<?php if ( get_theme_mod( 'archive_title' ) != 'no' ) : ?>
	<h1>
        <?php if (is_author() ) : ?>
            <div class="avatar-container">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 78, '', get_the_author() ) ?>
            </div>
        <?php else : ?>
            <i class="far fa-<?php echo esc_attr( $icon_class )?>"></i>
        <?php endif;
        echo esc_html( $prefix ) . ' ';
        the_archive_title( '', '' );
        ?>
	</h1>
	<?php endif;
	if ( get_the_archive_description() != '' && get_theme_mod( 'archive_description' ) != 'no' ) :
		the_archive_description();
	endif; ?>
<?php if ( is_author() ) : ?></div><?php endif ?>
</div>