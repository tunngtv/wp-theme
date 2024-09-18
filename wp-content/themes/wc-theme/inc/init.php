<?php

/**
 * Define variables
 */

define('WC_PATH', get_parent_theme_file_path());     // template directory path
define('WC_URI', get_parent_theme_file_uri());       // template directory uri
const WC_ASSETS = WC_URI . '/assets';             // template assets directory uri
const WC_INC = WC_PATH . '/inc';                  // template include directory path
const WC_PLUGINS = WC_INC . '/plugins';           // template plugins directory path
const WC_PLUGINS_URI = WC_URI . '/inc/plugins';   // template plugins directory uri
const WC_CSS = WC_ASSETS . '/css';                // template css uri
const WC_JS = WC_ASSETS . '/js';                  // template javascript uri
const WC_PART = 'template_parts';


require_once WC_INC . '/general_function.php';


/**
 * Setup & Register Theme assets and support
 */
require_once WC_INC . '/setup/theme-assets.php';
//require_once WC_INC . '/setup/theme-setup.php';

