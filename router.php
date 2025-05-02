<?php
$request_uri = trim($_SERVER['REQUEST_URI'], '/');

// Remove project folder name if in URL (adjust "template_master" to match your folder name)
$request_uri = str_replace('template_master/', '', $request_uri);


// Define routes
$routes = [
    // client templates
    'Test' => 'templates/Test.php',

    // Add more templates as needed

    //Main templates router  
    'login' => 'login.php',
    'gallery' => 'template_gallery.php',
    'shop_more' => 'shop_more.php',

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
    
];

// Optional: redirect root to login
if ($request_uri === '') {
    header("Location: /template_master/login");
    exit;
}

if (array_key_exists($request_uri, $routes)) {
    include $routes[$request_uri];
} else {
    http_response_code(404);
    echo "404 - Page not found";
}
?>
