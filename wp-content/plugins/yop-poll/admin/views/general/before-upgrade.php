<script>
    jQuery( '#wpcontent' ).css( 'background-color', '#fff' );
</script>
<div class="bootstrap-yop wrap upgrade-to-pro-section">
    <form action="" method="post" class="set-upgrade-to-pro-width2">
        <?php _e( 'If you already have a license, please enter it below to activate YOP Poll Pro:', 'yop-poll' ); ?><br><br>
        <input type = "hidden" name = "action" value = "validate_licence">
        <?php wp_nonce_field('yop-poll-before-buy'); ?>
        <input type="text" name="licence">
        <input type = "submit" nameadd_poll = "check_licence" class = "button-primary" value = '<?php echo _e( 'Activate', 'yop-poll' ); ?>'>
    </form>
    <br>
    <?php
    include( YOP_POLL_PATH . 'admin/views/general/upgrade.php' );
    ?>
</div>