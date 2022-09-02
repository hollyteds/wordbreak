<?php
/*
 * Plugin Name: WordBreak
 * Description: class名 u-wbr で自動改行    
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Version: 0.1.0
 * Author: Aoba Koukoku. CO,LTD
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * ファイルの読み込み
*/
add_action( 'wp_footer', function() {
	wp_enqueue_script( 'budou-X', plugins_url( 'wordbreak/dist/js/main.js' ), array() );
} );
