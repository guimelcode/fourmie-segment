<?php
/**
 * Plugin Name:       Fourmie Segment
 * Description:       Segment est un conteneur de 24 colonnes avec une marge à gauche. Délimite les grandes parties verticales d'une page/article. - la fourmi-e -.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.2.0
 * Author:            Guillaume Melennec, The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       fourmie-segment
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function create_block_fourmie_segment_block_init() {
	register_block_type( __DIR__ );
}
add_action( 'init', 'create_block_fourmie_segment_block_init' );
