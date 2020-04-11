<?php
//require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
require_once '../src/UrlParser/Url.php';


$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
echo $GLOBALS["url"]->getString()."<br>";

$GLOBALS["url"]->pop(2);
echo "pop(2) => ".$GLOBALS["url"]->getString()."<br>";

echo "---------------------------------------------<br>";

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
echo $GLOBALS["url"]->getString()."<br>";
$GLOBALS["url"]->shift();
echo "shift() => ".$GLOBALS["url"]->getString()."<br>";

echo "---------------------------------------------<br>";

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
echo $GLOBALS["url"]->getString()."<br>";
$GLOBALS["url"]->swap("aaa", "ccc");
echo "swap('aaa', 'ccc') => ".$GLOBALS["url"]->getString()."<br>";

echo "---------------------------------------------<br>";
