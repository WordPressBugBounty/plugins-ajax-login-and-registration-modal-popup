<?php
/**
 * Textarea field class
 */

class LRM_Field_Textarea {

	/**
	 * Text field
	 * @param  Field $field Field instance
	 * @return void
	 */
	public function input( $field ) {

		echo '<textarea rows="3" id="' . esc_attr($field->input_id()) . '" name="' . esc_attr($field->input_name()) . '" class="large-text">' . wp_unslash($field->value()) . '</textarea>';

	}

	/**
	 * Sanitize input value
	 * @param  string $value Saved value
	 * @return string        Sanitized text
	 */
	public function sanitize( $value ) {

		return sanitize_textarea_field( $value, true );

	}

}
