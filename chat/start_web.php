<?php
use Workerman\Worker;
use Workerman\WebServer;
use Workerman\Autoloader;
use PHPSocketIO\SocketIO;

// composer autoload
require_once  '/home/tyraan/Desktop/www/vendor/autoload.php';

$web = new WebServer('http://0.0.0.0:2022');
$web->addRoot('localhost', __DIR__ . '/public');

if (!defined('GLOBAL_START')) {
    Worker::runAll();
}
