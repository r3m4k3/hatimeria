<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'Example.php';
require 'ExampleIterator.php';

$object = new Example();
$object->setItems(array(
 'element',
 'element1',
 'element2',
 'element3'
));
$object->setIterator(new ExampleIterator());

foreach ($object as $element) {
 	var_dump($element);
}