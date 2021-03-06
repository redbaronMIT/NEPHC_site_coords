<?php

class Tm_Builder_Module_Link_Box extends Tm_Builder_Module {
	public function init() {
		$this->name = esc_html__( 'Link Box', 'navyblue' );
		$this->slug = 'tm_pb_link_box';
		$this->icon = 'f14c';
		$this->whitelisted_fields = array(
			'title',
			'image',
			'button',
			'url',
			'url_new_window',
			'admin_label',
			'module_id',
			'module_class',
		);

		$this->fields_defaults = array(
			'url_new_window'      => array( 'off' ),
		);

		$this->main_css_element = '%%order_class%%.' . $this->slug;

		$this->advanced_options = array(
			'fonts' => array(
				'header' => array(
					'label'    => esc_html__( 'Header', 'navyblue' ),
					'css'      => array(
						'main' => "{$this->main_css_element} h4, {$this->main_css_element} h4 a",
					),
				),
				'body'   => array(
					'label'    => esc_html__( 'Body', 'navyblue' ),
					'css'      => array(
						'line_height' => "{$this->main_css_element} p",
					),
				),
			),
			'background' => array(
				'settings' => array(
					'color' => 'alpha',
				),
			),
			'border' => array(),
			'custom_margin_padding' => array(
				'css' => array(
					'important' => 'all',
				),
			),
		);
	}

	public function get_fields() {
		$tm_accent_color = tm_builder_accent_color();

		$fields = array(
			'title' => array(
				'label'           => esc_html__( 'Title', 'navyblue' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'The title of your blurb will appear in bold below your blurb image.', 'navyblue' ),
			),
			'image' => array(
				'label'              => esc_html__( 'Image', 'navyblue' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'navyblue' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'navyblue' ),
				'update_text'        => esc_attr__( 'Set As Image', 'navyblue' ),
				'description'        => esc_html__( 'Upload an image to display at the top of your blurb.', 'navyblue' ),
			),
			'button' => array(
				'label'           => esc_html__( 'Button Text', 'navyblue' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired button text.', 'navyblue' ),
			),
			'url' => array(
				'label'           => esc_html__( 'Url', 'navyblue' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'If you would like to make your blurb a link, input your destination URL here.', 'navyblue' ),
			),
			'url_new_window' => array(
				'label'           => esc_html__( 'Url Opens', 'navyblue' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'In The Same Window', 'navyblue' ),
					'on'  => esc_html__( 'In The New Tab', 'navyblue' ),
				),
				'description' => esc_html__( 'Here you can choose whether or not your link opens in a new window', 'navyblue' ),
			),
			'content_new' => array(
				'label'             => esc_html__( 'Content', 'navyblue' ),
				'type'              => 'tiny_mce',
				'option_category'   => 'basic_option',
				'description'       => esc_html__( 'Input the main text content for your module here.', 'navyblue' ),
			),
			'disabled_on' => array(
				'label'           => esc_html__( 'Disable on', 'navyblue' ),
				'type'            => 'multiple_checkboxes',
				'options'         => array(
					'phone'   => esc_html__( 'Phone', 'navyblue' ),
					'tablet'  => esc_html__( 'Tablet', 'navyblue' ),
					'desktop' => esc_html__( 'Desktop', 'navyblue' ),
				),
				'additional_att'  => 'disable_on',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'This will disable the module on selected devices', 'navyblue' ),
			),
			'admin_label' => array(
				'label'       => esc_html__( 'Admin Label', 'navyblue' ),
				'type'        => 'text',
				'description' => esc_html__( 'This will change the label of the module in the builder for easy identification.', 'navyblue' ),
			),
			'module_id' => array(
				'label'           => esc_html__( 'CSS ID', 'navyblue' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'option_class'    => 'tm_pb_custom_css_regular',
			),
			'module_class' => array(
				'label'           => esc_html__( 'CSS Class', 'navyblue' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'option_class'    => 'tm_pb_custom_css_regular',
			),
		);
		return $fields;
	}

	public function shortcode_callback( $atts, $content = null, $function_name ) {

		$this->set_vars(
			array(
				'title',
				'image',
				'alt',
				'button',
				'url',
				'url_new_window',
			)
		);

		$this->function_name = $function_name;

		if ( '' !== $this->_var( 'title' ) ) {
			$this->_var( 'title', '<h1 class="tm_pb_link_box_title">' . $this->_var( 'title' ) . '</h1>' );
		}

		if ( '' !== $this->_var( 'button' ) && '' !== $this->_var( 'url' ) ) {
			$this->_var( 'button', sprintf(
				'<a class="tm_pb_button" href="%1$s"%3$s>%2$s</a>',
				esc_url( $this->_var( 'url' ) ),
				$this->_var( 'button' ),
				( 'on' === $this->_var( 'url_new_window' ) ? ' target="_blank"' : '' )
			) );
		} else {
			$this->_var( 'button', '' );
		}

		$classes = array();

		$content = $this->get_template_part( 'link_box.php' );

		$output = $this->wrap_module( $content, $classes, $function_name );

		return $output;
	}

}

new Tm_Builder_Module_Link_Box;