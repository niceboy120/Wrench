<?php

/**
 * Bootstrap file for the test suite
 */

// Use SplClassLoader
require_once(__DIR__ . '/../../SplClassLoader.php');

$classLoader = new \SplClassLoader('WebSocket', __DIR__ . '/../..');
$classLoader->register();