<?php
use \Workerman\Worker;

define('GLOBAL_START', true);

require_once __DIR__ . '/vendor/autoload.php'; // this must come first!
require_once __DIR__ . '/start_worker.php';
require_once __DIR__ . '/start_web.php';

Worker::runAll();
