<?php
/**
 * Plugin Name:       LCCC Foundation Blocks
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.6
 * Requires PHP:      7.2
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       lccc-foundation-blocks
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function lc_foundation_blocks_init() {
	register_block_type( __DIR__ . '/build/lc-grid-container-block' );
	register_block_type( __DIR__ . '/build/lc-grid-margin-block' );
	register_block_type( __DIR__ . '/build/lc-cell-block' );
	register_block_type( __DIR__ . '/build/lc-full-width-block' );
}
add_action( 'init', 'lc_foundation_blocks_init' );

// Load Admin Styles

function lorainccc_foundation_blocks_wp_admin_scripts() {

	wp_enqueue_style('lorainccc-foundation-blocks-styles', plugin_dir_url( __FILE__ ) . 'css/lc_block_admin_styles.css', 20);
	
}

add_action( 'admin_enqueue_scripts', 'lorainccc_foundation_blocks_wp_admin_scripts' );