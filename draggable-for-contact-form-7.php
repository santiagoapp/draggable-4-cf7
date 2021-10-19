<?php
/**
 * Plugin Name: Sorting Draggable for CF7 
 * Plugin URI: https://www.santiagoapp.com/draggable-wordpress
 * Description: Adding functionality for options sortable for wordpress.
 * Version: 1.0.0
 * Author: Santiago Pereira
 * Author URI: https://www.santiagoapp.com
 */

if ( !defined( 'ABSPATH' ) ) {
    die;
}

define( 'SPP_SORTABLE_CF7_DIR', dirname( __FILE__ ) );
define( 'SPP_SORTABLE_CF7_URL', plugins_url( '', __FILE__ ) );

require_once constant('SPP_SORTABLE_CF7_DIR') . '/includes/main.php';
require_once constant('SPP_SORTABLE_CF7_DIR') . '/includes/enqueue.php';