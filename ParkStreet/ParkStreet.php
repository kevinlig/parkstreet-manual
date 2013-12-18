<?php

namespace ParkStreet;
ini_set('display_errors',1);

/**
 * Autoload everything for the app
 *
 * Start out by requiring the vendor modules
 */


/*
 * Load the Slim framework
 */
require_once("vendor/Slim/Slim.php");
// now we need to register it
use Slim\Slim;
Slim::registerAutoloader();

/*
 * Load Idiorm (ORM) and Paris (Active Record)
 */
require_once("vendor/Idiorm/idiorm.php");
require_once("vendor/Paris/paris.php");

/*
 * Load Mustache for templating
 */
require_once("vendor/Mustache/Autoloader.php");
use Mustache;
Mustache\Mustache_Autoloader::register();



/*
 * Vendor frameworks are done, now let's load our internal files
 */

/*
 * Load framework constants
 */
require_once("Constants.php");

/*
 * Load the configuration file
 */
require_once(APPDIR . "/Config.php");

/*
 *  Load the custom classes the user has made (Models, Views, Controllers)
 */


class ParkStreet extends Slim {

    public function __construct() {
        parent::__construct();

    }

}

?>