<?php

spl_autoload_register(function ($class) {

    // Convert namespace to file path
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

use Math\Calculator as MathCalc;
use Text\Calculator as TextCalc;

$m = new MathCalc();
echo $m->add(4, 5);
echo "<br>";
$t = new TextCalc();
echo $t->append("Hello ", "World");
