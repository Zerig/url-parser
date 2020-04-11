<?php
//require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
require_once '../src/UrlParser/Url.php';


$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");

$GLOBALS["url"]->pop(3);
echo $GLOBALS["url"]->getString();
