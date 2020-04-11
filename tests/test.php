<code>
<?php
//require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
require_once '../src/UrlParser/Url.php';


$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
echo "URL: ".$GLOBALS["url"]->getString()."<br>";

$GLOBALS["url"]->pop(2);
echo "pop(2) => "."URL: ".$GLOBALS["url"]->getString()."<br>";

echo "<br>---------------------------------------------<br><br>";

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
echo "URL: ".$GLOBALS["url"]->getString()."<br>";
$GLOBALS["url"]->shift();
echo "shift() => "."URL: ".$GLOBALS["url"]->getString()."<br>";

echo "<br>---------------------------------------------<br><br>";

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
echo "URL: ".$GLOBALS["url"]->getString()."<br>";
$GLOBALS["url"]->swap("aaa", "ccc");
echo "swap('aaa', 'ccc') => "."URL: ".$GLOBALS["url"]->getString()."<br>";

echo "<br>---------------------------------------------<br><br>";

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html?member=me&age=15#hashtag");
echo "URL: ".$GLOBALS["url"]->getString()."<br>";

echo "getScheme('string') => ".$GLOBALS["url"]->getScheme('string')."<br>";
echo "getHost('string') => ".$GLOBALS["url"]->getHost('string')."<br>";
echo "getRoot('string') => ".$GLOBALS["url"]->getRoot('string')."<br>";
echo "getPath('string') => ".$GLOBALS["url"]->getPath('string')."<br>";
echo "getQuery('string') => ".$GLOBALS["url"]->getQuery('string')."<br>";
echo "getFragment('string') => ".$GLOBALS["url"]->getFragment('string')."<br>";

echo "<br>---------------------------------------------<br><br>";

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
echo "URL: ".$GLOBALS["url"]->getString()."<br>";
echo "getString() => ".$GLOBALS["url"]->getString()."<br>";

echo "<br>---------------------------------------------<br><br>";

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
echo "URL: ".$GLOBALS["url"]->getString()."<br>";

echo "hasFile() => ".$GLOBALS["url"]->hasFile()."<br>";

echo "<br>---------------------------------------------<br><br>";

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a");
echo "URL: ".$GLOBALS["url"]->getString()."<br>";

echo "hasFile() => ".$GLOBALS["url"]->hasFile()."<br>";

echo "<br>---------------------------------------------<br><br>";

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
echo "URL: ".$GLOBALS["url"]->getString()."<br>";

echo "hasFile() => ".$GLOBALS["url"]->hasFile()."<br>";

echo "<br>---------------------------------------------<br><br>";
