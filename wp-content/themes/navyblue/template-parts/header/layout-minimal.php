<?php
/**
 * Template part for minimal Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NavyBlue
 */
?>

<div class="header-container__flex">
	<?php navyblue_social_list( 'header' ); ?>
	<div class="site-branding">
		<?php navyblue_header_logo() ?>
		<?php navyblue_site_description(); ?>
	</div>
	<?php navyblue_main_menu(); ?>
</div>
