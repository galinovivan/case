<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29.04.17
 * Time: 16:58
 */

use caseweb\core\Loader;
use caseweb\helpers\HttpHelper;
use caseweb\routes\Route;

define('PROJECT_ACCESS', true);

require_once ('application/configs/config.php');
require_once ('core/Loader.php');
require_once ('core/routes/Route.php');

$app = new Loader();
$app->setConfig($config);
$app->loadHelpers();
$app->loadLibs();

$route = new Route();
$route->setConfig($config['route']);
$route->load();

