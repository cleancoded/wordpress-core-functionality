<?php
/**
 * Plugin Name: WordPress Core Functionality
 * Plugin URI: https://github.com/cleancoded/wordpress-core-functionality
 * Description: All of your website's core functionality independent of its theme.
 * Version: 2.0.0
 * Author: CLEANCODED
 * Author URI: https://cleancoded.com
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

// Plugin Directory 
define( 'CC_DIR', dirname( __FILE__ ) );

require_once( CC_DIR . '/inc/general.php'              ); // General
require_once( CC_DIR . '/inc/cpt-testimonial.php'      ); // Testimonial CPT
//require_once( CC_DIR . '/inc/widget-sample.php'      ); // Sample Widget
