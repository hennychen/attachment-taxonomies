<?php
/**
 * @package AttachmentTaxonomies
 * @version 1.0.0
 * @author Felix Arntz <felix-arntz@leaves-and-love.net>
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

if ( class_exists( 'Attachment_Category' ) ) {
	return;
}

/**
 * Represents the attachment_category taxonomy.
 *
 * @since 1.0.0
 */
final class Attachment_Category extends Attachment_Taxonomy {
	/**
	 * Holds the taxonomy slug.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	protected $slug = 'attachment_category';

	/**
	 * Holds the taxonomy labels.
	 *
	 * @since 1.0.0
	 * @var array
	 */
	protected $labels = array(); // leave empty to use WordPress Core category labels

	/**
	 * Holds the taxonomy arguments.
	 *
	 * @since 1.0.0
	 * @var array
	 */
	protected $args = array(
		'hierarchical'		=> true,
		'query_var'			=> 'attachment_category',
		'rewrite'			=> true,
		'public'			=> true,
		'show_ui'			=> true,
		'show_admin_column'	=> true,
		'capabilities'		=> array(
			'manage_terms'		=> 'upload_files',
			'edit_terms'		=> 'upload_files',
			'delete_terms'		=> 'upload_files',
			'assign_terms'		=> 'upload_files',
		),
	);
}
