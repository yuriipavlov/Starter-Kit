<?php

use StarterKit\Helper\Utils;

return [
	'name'                    => esc_html__( 'Contact Form', 'starter-kit' ),
	'base'                    => 'contact_form',
	'icon'                    => Utils::getConfigSetting( 'shortcodes_icon_uri' ) . 'email-send.svg',
	'category'                => esc_html__( 'Theme Elements', 'starter-kit' ),
	'description'             => esc_html__( 'Add contact form', 'starter-kit' ),
	'as_parent'               => [
		'only' => 'form_checkbox, form_email, form_file_uploader, form_submit, form_text, form_text_datepicker, form_textarea, vc_column_text, heading, vc_row',
	],
	'content_element'         => true,
	'is_container'            => true,
	'show_settings_on_create' => true,
	'js_view'                 => is_admin() ? 'VcColumnView' : '',
	'params'                  => [
		
		/**
		 *  Form tab
		 **/
		[
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Email To', 'starter-kit' ),
			'description' => esc_html__( 'The form will be sent to this email address.', 'starter-kit' ),
			'param_name'  => 'email_to',
			'save_always' => true,
			'value'       => get_option( 'admin_email' ),
			'group'       => esc_html__( 'Form', 'starter-kit' ),
		],
		[
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Subject Message', 'starter-kit' ),
			'description' => esc_html__( 'This text will be used as subject message for the email', 'starter-kit' ),
			'param_name'  => 'subject_message',
			'value'       => esc_html__( 'New message', 'starter-kit' ),
			'group'       => esc_html__( 'Form', 'starter-kit' ),
		],
		[
			'type'       => 'textfield',
			'heading'    => esc_html__( 'CSS classes', 'starter-kit' ),
			'param_name' => 'classes',
			'value'      => '',
			'group'       => esc_html__( 'Form', 'starter-kit' ),
		],
		[
			'type'        => 'el_id',
			'heading'     => esc_html__( 'Element ID', 'starter-kit' ),
			'param_name'  => 'el_id',
			'settings'    => [
				'auto_generate' => true,
			],
			'group'       => esc_html__( 'Form', 'starter-kit' ),
			'description' => esc_html__( 'Unique identifier of this element', 'starter-kit' ),
		],
		
		/**
		 *  Redirect tab
		 **/
		[
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Redirect on success', 'starter-kit' ),
			'description' => esc_html__( 'Type here any URL where user will be redirected after form submit, e.g. to the Thank You page.', 'starter-kit' ),
			'param_name'  => 'redirect_on_success',
			'value'       => '',
			'group'       => esc_html__( 'Redirect', 'starter-kit' ),
		],
		
		/**
		 * Messages tab
		 **/
		[
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Success Message', 'starter-kit' ),
			'description' => esc_html__( 'This text will be displayed when the form will successfully send', 'starter-kit' ),
			'param_name'  => 'success_message',
			'value'       => esc_html__( 'Message sent!', 'starter-kit' ),
			'group'       => esc_html__( 'Messages', 'starter-kit' ),
		],
	
	],
];
