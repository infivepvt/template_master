<?php
// Enable full error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the clean request URI
$request_uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Remove the base directory if present (works for both localhost and Hostinger)
$base_dir = basename(dirname(__DIR__)); // Gets parent directory name
$request_uri = str_replace($base_dir, '', $request_uri);
$request_uri = trim($request_uri, '/');

// For Hostinger specifically (public_html folder)
if (strpos($request_uri, 'public_html') !== false) {
    $request_uri = str_replace('public_html', '', $request_uri);
    $request_uri = trim($request_uri, '/');
}

// Debug output (remove in production)
echo "<!-- Debug: Request URI: '{$request_uri}' -->\n";

// Define all application routes
$routes = [
    // Main routes
    '' => 'login.php',  // Root redirects to login
    'login' => 'login.php',
    'gallery' => 'template_gallery.php',
    'shop' => 'shop_more.php',
    'maintenance' => 'maintenance.php',
    
    // Template routes
    'template1' => 'main_templates/template1.php',
    'template2' => 'main_templates/template2.php',
    'template3' => 'main_templates/template3.php',
    'template4' => 'main_templates/template4.php',
    'template5' => 'main_templates/template5.php',
    'template6' => 'main_templates/template6.php',
    'template7' => 'main_templates/template7.php',
    'template8' => 'main_templates/template8.php',
    'template9' => 'main_templates/template9.php',
    'template10' => 'main_templates/template10.php',
    'template11' => 'main_templates/template11.php',
    'template12' => 'main_templates/template12.php',
    'template13' => 'main_templates/template13.php',
    'template14' => 'main_templates/template14.php',
    'template15' => 'main_templates/template15.php',
    'template16' => 'main_templates/template16.php',
    'template17' => 'main_templates/template17.php',
    
    // Client templates
    'Test' => 'templates/Test.php',
    'rovenrich' => 'templates/rovenrich.php',
    'infinity' => 'templates/infinity.php',
    'bhikkhubodhi' => 'templates/bhikkhubodhi.php',
    'sapphire' => 'templates/sapphire.php',
    'sapphire1' => 'templates/sapphire1.php',
    'rasikamobile' => 'templates/rasikamobile.php',
];

// Handle the request
if (array_key_exists($request_uri, $routes)) {
    $file_path = $routes[$request_uri];
    
    // Check if the file exists using absolute path
    $absolute_path = __DIR__ . '/' . ltrim($file_path, '/');
    
    if (file_exists($absolute_path)) {
        include $absolute_path;
    } else {
        // Log the error
        error_log("Router Error: File not found - {$absolute_path}");
        
        // Show 404 page
        http_response_code(404);
        include '404.php'; // Create this file
        exit;
    }
} else {
    // Check if this is a direct file request (like CSS/JS/images)
    $requested_file = __DIR__ . '/' . $request_uri;
    if (file_exists($requested_file) && !is_dir($requested_file)) {
        return false; // Let the server handle direct file requests
    }
    
    // No route found - show 404
    http_response_code(404);
    include '404.php';
    exit;
}