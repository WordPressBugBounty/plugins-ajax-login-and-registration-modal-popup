<?php
/**
 * Textarea field class
 */

class LRM_Field_Textarea_With_Html {

	/**
	 * Text field
	 * @param  underDEV\Utils\Settings\Field $field Field instance
	 * @return void
	 */
	public function input( $field ) {

        $rows = (int)$field->addon( 'rows' ) ? $field->addon( 'rows' ) : 3;

		echo '<textarea rows="' . esc_attr($rows) . '" id="' . esc_attr($field->input_id()) . '" name="' . esc_attr($field->input_name()) . '" class="large-text">' . wp_unslash($field->value()) . '</textarea>';

	}

	/**
	 * Sanitize input value
	 * @param  string $value Saved value
	 * @return string        Sanitized text
	 */
	public function sanitize( $value ) {

		return wp_kses_post( $value, true );

	}

}
