<?php
use \Workerman\Worker;

define('GLOBAL_START', true);

// Load classes first
require_once __DIR__ . '/vendor/autoload.php';

// Start services
require_once __DIR__ . '/start_worker.php';
require_once __DIR__ . '/start_web.php';

// Run all workers
Worker::runAll();
