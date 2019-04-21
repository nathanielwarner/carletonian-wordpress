<div class="post-style-2 rpc-bg rpc-box">
    <div class="wcp-img-wrap">
        <a href="<?php the_permalink(); ?>">
            <?php do_action( 'rpc_carousel_thumbnail', $post_id, $carousel_settings ); ?>
        </a>
    </div>
    <div class="wcp-content-wrap">
        <h3>
            <a class="rpc-title" href="<?php echo get_permalink($post_id); ?>" target="<?php echo $carousel_settings['read_more_target']; ?>" class="rpc-title">
                <?php do_action( 'rpc_carousel_title', $post_id,  $carousel_settings ); ?>
            </a>
        </h3>
        <?php if (!isset($carousel_settings['hidemeta'])) { ?>
        <div class="wcp-post-meta wcp-disable-post-meta post-byline">
            <span class="wcp-post-author">By
                <?php the_author_posts_link(); ?>
            </span>
            on
            <span class="wcp-post-date"><?php echo get_the_date(); ?></span>
        </div>
        <?php } ?>
        <div class="wcp-post-contents rpc-content">

            <?php do_action( 'rpc_carousel_desc', $post_id, $carousel_settings); ?>

            <?php do_action( 'rpc_read_more_btn', $post_id, $carousel_settings); ?>

        </div>        
    </div>
</div>