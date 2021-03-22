<?php

/* @var $fields NewsletterFields */
?>

<?php $fields->text('text', __('Text', 'newsletter')) ?>
<?php $fields->text('view', __('View online', 'newsletter')) ?>
<?php $fields->font( 'font', __('Font', 'newsletter'), [ 'family_default' => true, 'size_default' => true, 'weight_default' => true ] ) ?>

<?php $fields->block_commons() ?>
