<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require 'FeedGenerator.php';
require 'CoreFormatter.php';
require 'XMLFormatter.php';
require 'JSONFormatter.php';
require 'YAMLFormatter.php';
require 'Configurable.php';
require 'CoreAdapter.php';
require 'CURLAdapter.php';
require 'DbAdapter.php';

$gen = new FeedGenerator();

$jsonFormatter = new JSONFormatter(); 
$ad = new CURLAdapter();
$ad->setSource("https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670,151.1957&radius=500&types=food&name=cruise&key=AIzaSyDxV_O820vhaMMF409xJTgFuMWtSLPZ6_g");
$jsonFormatter->setData($ad->getData());
$jsonFormatter->setFields(array('html_attributions'));
$gen->setFormatter($jsonFormatter);
echo $gen->getResponse();

$xmlFormatter = new XMLFormatter();
$xmlFormatter->setFields(array('klucz1', 'klucz3')); 
$hardcodedArr = array('klucz1' => 'test', 'klucz2' => 'a', 'klucz3' => 5);
/* 
$adapter = new DbAdapter();
$adapter->loadConfiguration('config.php');
$data = $adapter->getData(); 
*/
$xmlFormatter->setData($hardcodedArr);
/* 
$gen->setFormatter($xmlFormatter);
echo $gen->getResponse();  */
