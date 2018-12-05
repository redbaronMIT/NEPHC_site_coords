<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NavyBlue
 */
?>

<div class="header-container__flex">
	<div class="site-branding">
		<?php navyblue_header_logo() ?>
		<?php navyblue_site_description(); ?>
	</div>

	<?php navyblue_social_list( 'header' ); ?>

	<?php navyblue_main_menu(); ?>
</div>
