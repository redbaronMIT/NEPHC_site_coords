<?php
/**
 * Contact Information widget.
 *
 * @package NavyBlue
 */

if ( ! class_exists( 'NavyBlue_Contact_Information_Widget' ) ) {

	class NavyBlue_Contact_Information_Widget extends Cherry_Abstract_Widget {

		/**
		 * Constructor.
		 */
		public function __construct() {
			$this->widget_cssclass    = 'contact-information-widget';
			$this->widget_description = esc_html__( 'Display an contact-information.', 'navyblue' );
			$this->widget_id          = 'navyblue_contact_information_widget';
			$this->widget_name        = esc_html__( 'Contact Information', 'navyblue' );

			$this->settings           = array(
				'title'  => array(
					'type'  => 'text',
					'value' => 'Contact Information',
					'label' => esc_html__( 'Title:', 'navyblue' ),
				),
				'contact_information'  => array(
						'type'         => 'repeater',
						'add_label'    => esc_html__( 'Add Contact Information', 'navyblue' ),
						'title_field'  => 'value',
						'hidden_input' => true,
						'fields'       => array(
							'icon' => array(
								'type'        => 'iconpicker',
								'id'          => 'icon',
								'name'        => 'icon',
								'label'       => esc_html__( 'Choose icon', 'navyblue' ),
								'icon_data'   => array(
									'icon_set'    => 'cherryTeamFontAwesome',
									'icon_css'    => NAVYBLUE_THEME_CSS . '/font-awesome.min.css',
									'icon_base'   => 'fa',
									'icon_prefix' => 'fa-',
									'icons'       => navyblue_get_icons_set(),
								),
							),
							'value' => array(
								'type'        => 'textarea',
								'id'          => 'value',
								'name'        => 'value',
								'placeholder' => esc_html__( 'Value', 'navyblue' ),
								'label'       => esc_html__( 'Value', 'navyblue' ),
							),
							'feature' => array(
								'type'  => 'switcher',
								'id'    => 'feature',
								'name'  => 'feature',
								'value'    => 'false',
								'label' => esc_html__( 'Make feature item', 'navyblue' ),
							),
						),
					),
			);

			parent::__construct();
		}

		/**
		 * Returns social icons set
		 *
		 * @return array
		 */
		public function get_icons_set() {

			ob_start();

			include NAVYBLUE_THEME_DIR . '/assets/js/icons.json' ;

			$json = ob_get_clean();

			$result = array();

			$icons = json_decode( $json, true );

			foreach ( $icons['icons'] as $icon ) {
				if ( ! in_array( 'Brand Icons', $icon['categories'] ) ) {
					continue;
				}
				$result[] = $icon['id'];
			}

			return $result;
		}

		/**
		 * Widget function.
		 *
		 * @see   WP_Widget
		 * @since 1.0.1
		 * @param array $args
		 * @param array $instance
		 */
		public function widget( $args, $instance ) {

			if ( $this->get_cached_widget( $args ) ) {
				return;
			}

			$template = locate_template( 'inc/widgets/contact-information/views/contact-information-view.php', false, false );

			if ( empty( $template ) ) {
				return;
			}

			ob_start();

			$this->setup_widget_data( $args, $instance );
			$this->widget_start( $args, $instance );

			echo '<ul class="contact-information-widget__inner">';

			if( ! empty( $instance['contact_information'] ) ){

				foreach ( $instance['contact_information'] as $key => $value ) {
					$icon_class = $value[ 'icon' ] ;
					$text = $value[ 'value' ] ;
					$feature    = isset( $value[ 'feature' ] ) ? $value[ 'feature' ] : false;

					include $template;
				}
			}

			echo '</ul>';

			$this->widget_end( $args );
			$this->reset_widget_data();

			echo $this->cache_widget( $args, ob_get_clean() );
		}
	}
}

add_action( 'widgets_init', 'navyblue_register_contact_information_widget' );
function navyblue_register_contact_information_widget() {
	register_widget( 'NavyBlue_Contact_Information_Widget' );
}
