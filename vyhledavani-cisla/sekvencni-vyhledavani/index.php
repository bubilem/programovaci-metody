<?php
require_once "Numbers.php";

$numbers = new Numbers();
$numbers->add(42);
$numbers->add(100);
$numbers->add(5);
echo $numbers->get() . PHP_EOL;
$numbers->add(256);
echo $numbers->get() . PHP_EOL;
if ($numbers->exists(2)) {
    echo "Je tam :)";
} else {
    echo "Není tam :(";
}
