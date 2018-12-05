<?php get_header( navyblue_template_base() ); ?>

	<?php navyblue_site_breadcrumbs(); ?>

	<?php do_action( 'navyblue_render_widget_area', 'full-width-header-area' ); ?>

	<div class="container">

		<?php do_action( 'navyblue_render_widget_area', 'before-content-area' ); ?>

		<div class="row">

			<div id="primary" class="col-md-12">

				<?php do_action( 'navyblue_render_widget_area', 'before-loop-area' ); ?>

				<main id="main" class="site-main" role="main">

					<?php include navyblue_template_path(); ?>

				</main><!-- #main -->

				<?php do_action( 'navyblue_render_widget_area', 'after-loop-area' ); ?>

			</div><!-- #primary -->

		</div><!-- .row -->

		<?php do_action( 'navyblue_render_widget_area', 'after-content-area' ); ?>

	</div><!-- .container -->

	<?php do_action( 'navyblue_render_widget_area', 'after-content-full-width-area' ); ?>

<?php get_footer( navyblue_template_base() ); ?>
