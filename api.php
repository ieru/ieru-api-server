<?php
// Autoload files with the Symfony autoloader, according to PSR-0
require_once( 'vendor/autoload.php' );

// Allowed domain for cross domain javascript requests
// Please, change * for your server name, including http://
// It distinguises between www.yourserver.com and yourserver.com
define( 'XDOMAIN_ALLOWED_SERVER', '*' );

// Remove error reporting (uncomment in production environment)
//error_reporting(0);

// Start ieru restengine, with api URI identifier and API URI namespace
$api = new \Ieru\Restengine\Engine\Engine( 'api', 'Ieru\Ieruapis' );
$api->start();