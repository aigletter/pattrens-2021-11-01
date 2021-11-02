<?php

include __DIR__ . '/../../vendor/autoload.php';


//$db = new \Patterns\Db();
$db1 = \Patterns\Singleton\Db::createInstance();
echo $results = $db1->get();

//=============================


//$db = new \Patterns\Db();
$db2 = \Patterns\Singleton\Db::createInstance();
$results = $db2->get();

// ==========================


//$db = new \Patterns\Db();
$db3 = \Patterns\Singleton\Db::createInstance();
$results = $db3->get();


exit();