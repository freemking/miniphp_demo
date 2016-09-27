<?php
/**
 * Created by PhpStorm.
 * User: Luca
 * Date: 16/8/6
 * Time: 16:14
 */

require '../vendor/autoload.php';

define('ENVIRONMENT', 'development');

define("APP_PATH", dirname(dirname(__FILE__)));
$app = new Mini\App(APP_PATH.'/conf/app.ini',ENVIRONMENT);
$app->run();
