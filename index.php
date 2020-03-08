<?php

use Laurent35240\OpcachePreload\A;

require_once __DIR__ . '/vendor/autoload.php';

$a = new A();
$b = $a->getChildOfB();

echo (string) $b . "\n";

