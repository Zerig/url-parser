<code style="white-space: pre;">
<?php
//require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
require_once '../src/UrlParser/Url.php';

$GLOBALS["server_root"] = new \UrlParser\Url("root");
echo '$GLOBALS["server_root"] = '.$GLOBALS["server_root"]->getString().'<br>';

echo "<br>---------------------------------------------<br><br>";
$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a.html?member=me&age=15#hashtag");
echo '$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a.html?member=me&age=15#hashtag")'."\n";
echo '$url->scheme   => '.$url->scheme."\n";
echo '$url->host     => '.$url->host."\n";
echo '$url->root     => ['."\n";
foreach($url->root as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->path     => ['."\n";
foreach($url->path as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->query    => ['."\n";
foreach($url->query as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->fragment => '.$url->fragment."\n";
echo '$url->sign     => '.$url->sign."\n";

echo "\n";
echo '<b>$url->getString()</b> => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->pop()</b>       => '.$url->pop()."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->shift()</b>     => '.$url->shift()."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->swap("aaa","ddd")</b>'.$url->swap("bbb","dddd")."\n";
echo '$url->getString() => '.$url->getString()."\n";

echo "<br>---------------------------------------------<br><br>";

$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a.html?member=me&age=15#hashtag");
echo '$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a.html?member=me&age=15#hashtag")'."\n";
echo '<b>$url->getString()</b> => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->pop(3)</b> => ['."\n";
foreach($url->pop(3) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->shift(3)</b> => ['."\n";
foreach($url->shift(3) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '<b>$url->shift()</b> => '.$url->shift()."\n";


echo "<br>---------------------------------------------<br><br>";

$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a.html?member=me&age=15#hashtag");
echo '$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a.html?member=me&age=15#hashtag")'."\n";
echo '<b>$url->getString()</b> => '.$url->getString()."\n";
echo '<b>$url->shift(3)</b> => ['."\n";
foreach($url->shift(3) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->pop(3)</b> => ['."\n";
foreach($url->pop(3) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo "\n";
echo '<b>$url->pop()</b> => '.$url->pop()."\n";


echo "<br>---------------------------------------------";
echo "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";
echo "<br>---------------------------------------------<br><br>";

$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a.html?member=me&age=15#hashtag");
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->getDepth()</b> => '.$url->getDepth()."\n";
echo '<b>$url->linkRoot()</b> => '.$url->linkRoot()."\n";
echo "\n";
$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a.html");
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->getDepth()</b> => '.$url->getDepth()."\n";
echo '<b>$url->linkRoot()</b> => '.$url->linkRoot()."\n";
echo "\n";
$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a");
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->getDepth()</b> => '.$url->getDepth()."\n";
echo '<b>$url->linkRoot()</b> => '.$url->linkRoot()."\n";

echo "<br>---------------------------------------------<br><br>";

$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a.html");
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->addPath("ccc")</b>'.$url->addPath("ccc")."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->addPath(["ddd", "eee"])</b>'.$url->addPath(["ddd", "eee"])."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb");
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->addPath("ccc")</b>'.$url->addPath("ccc")."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->addPath(["ddd", "eee"])</b>'.$url->addPath(["ddd", "eee"])."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a.html");
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->beforePath("ccc")</b>'.$url->beforePath("ccc")."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->beforePath(["ddd", "eee"])</b>'.$url->beforePath(["ddd", "eee"])."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a.html");
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->addQuery(["name" => "me", "age" => 15])</b>'.$url->addQuery(["name" => "me", "age" => 15])."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";

echo "<br>---------------------------------------------";
echo "<br>---------------------------------------------<br><br>";

$url = new \UrlParser\Url("http://www.web.cz//root/aaa/bbb/a.html");
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->exist()</b>     => '.$url->exist()."\n";
echo '<b>$url->isFile()</b>    => '.$url->isFile()."\n";
echo '<b>$url->isFolder()</b>  => '.$url->isFolder()."\n";
echo "\n";

$url = new \UrlParser\Url("root/file.txt");
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->exist()</b>     => '.$url->exist()."\n";
echo '<b>$url->isFile()</b>    => '.$url->isFile()."\n";
echo '<b>$url->isFolder()</b>  => '.$url->isFolder()."\n";
echo "\n";

$url = new \UrlParser\Url("root/folder");
echo '$url->getString() => '.$url->getString()."\n";
echo '<b>$url->exist()</b>     => '.$url->exist()."\n";
echo '<b>$url->isFile()</b>    => '.$url->isFile()."\n";
echo '<b>$url->isFolder()</b>  => '.$url->isFolder()."\n";
echo "\n";


echo "<br>---------------------------------------------";
echo "<br>---------------------------------------------<br><br>";
