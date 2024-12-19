<?php
// Global Constants
define('BASE_URL', 'https://localhost/web/php-static-website-boilerplate');
define('SITE_NAME', 'MyWebsite');
define('ADMIN_EMAIL', 'admin@yourdomain.com');

// Paths
define('ASSETS_PATH', BASE_URL . '/assets/');
define('CSS_PATH', ASSETS_PATH . 'css/');
define('JS_PATH', ASSETS_PATH . 'js/');
define('IMAGES_PATH', ASSETS_PATH . 'images/');

// Debug Mode
define('DEBUG_MODE', false); // Set to true in development, false in production

// Error Handling
if (DEBUG_MODE) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}
