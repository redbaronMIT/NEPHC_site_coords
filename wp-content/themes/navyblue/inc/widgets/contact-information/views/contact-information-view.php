<?php
/**
 * Template part to display Contact Information widget.
 *
 * @package NavyBlue
 * @subpackage widgets
 */
?>

<?php

$feature_class = ( $feature == 'true' ) ? 'big-font-size' : '';
$li_icon_class = ( ! empty( $icon_class ) ) ? 'with-icon' : '';

?>

<li class="<?php echo $feature_class . ' ' . $li_icon_class; ?>">
	<?php if ( ! empty( $icon_class ) ) { echo '<span class="icon fa ' . $icon_class . '"></span>'; } ?>
	<?php echo $text; ?>
</li>
