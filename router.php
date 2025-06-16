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
    'template18' => 'main_templates/template18.php',
    'template19' => 'main_templates/template19.php',
    'template20' => 'main_templates/template20.php',
    'template21' => 'main_templates/template21.php',
    'template22' => 'main_templates/template22.php',
    'template23' => 'main_templates/template23.php',
    'template24' => 'main_templates/template24.php',
    'template25' => 'main_templates/template25.php',
    'template26' => 'main_templates/template26.php',
    'template27' => 'main_templates/template27.php',
    'template28' => 'main_templates/template28.php',
    'template29' => 'main_templates/template29.php',
    'template30' => 'main_templates/template30.php',
    'template31' => 'main_templates/template31.php',
    'template32' => 'main_templates/template32.php',
    'template33' => 'main_templates/template33.php',
    'template34' => 'main_templates/template34.php',
    'template35' => 'main_templates/template35.php',
    'template36' => 'main_templates/template36.php',
    'template37' => 'main_templates/template37.php',
    'template38' => 'main_templates/template38.php',
    'template39' => 'main_templates/template39.php',
    'template40' => 'main_templates/template40.php',
    'template41' => 'main_templates/template41.php',
    'template42' => 'main_templates/template42.php',
    'template43' => 'main_templates/template43.php',
    'template44' => 'main_templates/template44.php',
    'template45' => 'main_templates/template45.php',
    'template46' => 'main_templates/template46.php',
    'template47' => 'main_templates/template47.php',
    'template48' => 'main_templates/template48.php',
    'template49' => 'main_templates/template49.php',
    'template50' => 'main_templates/template50.php',
    'template51' => 'main_templates/template51.php',
    'template52' => 'main_templates/template52.php',
    'template53' => 'main_templates/template53.php',

    // Client templates
    'Test' => 'templates/Test.php',
    'rovenrich' => 'templates/rovenrich.php',
    'infinity' => 'templates/infinity.php',
    'bhikkhubodhi' => 'templates/bhikkhubodhi.php',
    'sapphire' => 'templates/sapphire.php',
    'sapphire1' => 'templates/sapphire1.php',
    'rasikamobile' => 'templates/rasikamobile.php',
    'abdullahali' => 'templates/abdullahali.php',
    'highhydro' => 'templates/highhydro.php',
    'icmpd' => 'templates/icmpd.php',
    'luzara' => 'templates/luzara.php',
    'abeywickrama' => 'templates/abeywickrama.php',
    'sandunedirisinghe' => 'templates/sandunedirisinghe.php',
    'travelglobal' => 'templates/travelglobal.php',
    'teshura' => 'templates/teshura.php',
    'deelaka' => 'templates/deelaka.php',
    'shashika' => 'templates/shashika.php',
    'danuka' => 'templates/danuka.php',
    'fashion' => 'templates/fashion.php',
    'suduaraliya' => 'templates/suduaraliya.php',
    'digitalworld' => 'templates/digitalworld.php',
    'ayurvedayasas' => 'templates/ayurvedayasas.php',
    'ayurvedakasun' => 'templates/ayurvedakasun.php',
    'ayurvedaranuka' => 'templates/ayurvedaranuka.php',
    'ayurvedaamila' => 'templates/ayurvedaamila.php',
    'ayurvedakumara' => 'templates/ayurvedakumara.php',
    'ayurvedamihiri' => 'templates/ayurvedamihiri.php',
    'ayurvedasajini' => 'templates/ayurvedasajini.php',
    'ayurvedadilan' => 'templates/ayurvedadilan.php',
    'ayurvedamalinda' => 'templates/ayurvedamalinda.php',
    'ayurvedapubudini' => 'templates/ayurvedapubudini.php',
    'ayurvedaanushka' => 'templates/ayurvedaanushka.php',
    'ayurvedadanushika' => 'templates/ayurvedadanushika.php',
    'ayurvedaniwarthana' => 'templates/ayurvedaniwarthana.php',
    'ayurvedaisuru' => 'templates/ayurvedaisuru.php',
    'ayurvedajanani' => 'templates/ayurvedajanani.php',
    'ghayani' => 'templates/ghayani.php',
    'rajeev' => 'templates/rajeev.php',
    'dilmy' => 'templates/dilmy.php',
    'nexaura' => 'templates/nexaura.php',
    'buddhi' => 'templates/buddhi.php',
    'tropical' => 'templates/tropical.php',
    'horizon' => 'templates/horizon.php',
    'lucknow' => 'templates/lucknow.php',
    'pamela' => 'templates/pamela.php',
    'iconic' => 'templates/iconic.php',
    'donsherman' => 'templates/donsherman.php',
    'amywijesiri' => 'templates/amywijesiri.php',
    'nikigarment' => 'templates/nikigarment.php',
    'infiveiresh' => 'templates/infiveiresh.php',
    'mahanil' => 'templates/mahanil.php',
    'skyone' => 'templates/skyone.php',
    'sachith' => 'templates/sachith.php',
    'ldm' => 'templates/ldm.php',
    'udari' => 'templates/udari.php',
    'kasun' => 'templates/kasun.php',
    'misteroyster' => 'templates/misteroyster.php',
    'samafen' => 'templates/samafen.php',
    'iranga' => 'templates/iranga.php',
    'delloite' => 'templates/delloite.php',
    'nipun' => 'templates/nipun.php',
    'sachindu' => 'templates/sachindu.php',
    'isuru' => 'templates/isuru.php',
    'hasini' => 'templates/hasini.php',
    'zara' => 'templates/zara.php',
    'firaz' => 'templates/firaz.php',
    'thilina' => 'templates/thilina.php',
    'shavee' => 'templates/shavee.php',
    'shivantha' => 'templates/shivantha.php',
    'aruna' => 'templates/aruna.php',
    'infivetharidu' => 'templates/infivetharidu.php',
    'shivantha2' => 'templates/shivantha2.php',
    'sharlz' => 'templates/sharlz.php',
    'jeewan' => 'templates/jeewan.php',
    'jeewan2' => 'templates/jeewan2.php',
    'jeewan3' => 'templates/jeewan3.php',
    'jeewan4' => 'templates/jeewan4.php',
    'bahamasdentalinstitute' => 'templates/bahamasdentalinstitute.php',
    'gallways' => 'templates/gallways.php',
    'wagafarm' => 'templates/wagafarm.php',
    'nishan' => 'templates/nishan.php',
    'kosala' => 'templates/kosala.php',
    'mihirami' => 'templates/mihirami.php',
    'gurusinghe' => 'templates/gurusinghe.php',
    'manoj' => 'templates/manoj.php',
    'chathura' => 'templates/chathura.php',
    'sonali' => 'templates/sonali.php',
    'charith' => 'templates/charith.php',
    'cricketkingdom' => 'templates/cricketkingdom.php',
    'thusitha' => 'templates/thusitha.php',
    'pubudu' => 'templates/pubudu.php',
    'tuktuk' => 'templates/tuktuk.php',
    'thilini' => 'templates/thilini.php',
    'srimal' => 'templates/srimal.php',
    'vvmobile' => 'templates/vvmobile.php',
    'dilini' => 'templates/dilini.php',
    'somarathne' => 'templates/somarathne.php',
    'shen' => 'templates/shen.php',
    'dilhani' => 'templates/dilhani.php',
    'ranhuya' => 'templates/ranhuya.php',
    'maheema' => 'templates/maheema.php',
    'suvishal' => 'templates/suvishal.php',
    'sanjaya' => 'templates/sanjaya.php',
    'elizabeth' => 'templates/elizabeth.php',
    'kinnarawi' => 'templates/kinnarawi.php',
    'sansari' => 'templates/sansari.php',
    'dorit-dimand' => 'templates/dorit-dimand.php',
    'ifixpro' => 'templates/ifixpro.php',
    'edirisinghe' => 'templates/edirisinghe.php',
    'muhammed' => 'templates/muhammed.php',
    'cradlewell' => 'templates/cradlewell.php',
    'dk' => 'templates/dk.php',
    'shakila' => 'templates/shakila.php',
    'lokesh' => 'templates/lokesh.php',
    'schenova' => 'templates/schenova.php',
    'sudesh' => 'templates/sudesh.php',
    'sampath' => 'templates/sampath.php',
    'shantha' => 'templates/shantha.php',
    'rameez' => 'templates/rameez.php',
    'travellers' => 'templates/travellers.php',
    'suren' => 'templates/suren.php',
    'mahesh' => 'templates/mahesh.php',
    'kalum' => 'templates/kalum.php',
    'CBL-CEO-kamal' => 'templates/CBL-CEO-kamal.php',
    'kushal' => 'templates/kushal.php',
    'champ' => 'templates/champ.php',
    'ratnayake' => 'templates/ratnayake.php',
    'lisari' => 'templates/lisari.php',
    'infive' => 'templates/infive.php',
    'sandaruwan' => 'templates/sandaruwan.php',
    'amila' => 'templates/amila.php',
    'sudaraka' => 'templates/sudaraka.php',
    'piotravels' => 'templates/piotravels.php',
    'bandara' => 'templates/bandara.php',
    'irshad' => 'templates/irshad.php',
    'ibrahim' => 'templates/ibrahim.php',
    'dushmantha' => 'templates/dushmantha.php',
    'agra' => 'templates/agra.php',
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