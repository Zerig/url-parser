<code style="white-space: pre;">
<?php
//require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
require_once '../src/UrlParser/Url.php';

$GLOBALS["server_root"] = new \UrlParser\Url("root/rrr");
echo '$GLOBALS["server_root"] = '.$GLOBALS["server_root"]->getString().'<br>';

echo "<br>---------------------------------------------<br><br>";
$url = new \UrlParser\Url("http://www.web.cz//root/rrr/aaa/bbb/a.html?member=me&age=15#hashtag");
echo '$url = new \UrlParser\Url("http://www.web.cz//root/rrr/aaa/bbb/a.html?member=me&age=15#hashtag")'."\n";
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

echo "<br>---------------------------------------------";
echo "<br>---------------------------------------------<br><br>";

echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->removeScheme()</b> => '.$url->removeScheme()."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->removeHost()</b> => '.$url->removeHost()."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->removeRoot()</b> => ['."\n";
foreach($url->removeRoot() as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo "\n";
echo '<b>$url->removePath()</b> => ['."\n";
foreach($url->removePath() as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '<b>$url->removeQuery()</b> => ['."\n";
foreach($url->removeQuery() as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->removeFragment()</b> => '.$url->removeFragment()."\n";
echo '$url->getString() => '.$url->getString()."\n";

echo "<br>---------------------------------------------<br><br>";

$url = new \UrlParser\Url("http://www.web.cz//root/rrr/aaa/bbb/a.html?member=me&age=15#hashtag");
echo '$url = new \UrlParser\Url("http://www.web.cz//root/rrr/aaa/bbb/a.html?member=me&age=15#hashtag")'."\n";
echo '$url->getString() => '.$url->getString()."\n";

echo "\n";
echo '<b>$url->removeRoot("root")</b> => ['."\n";
foreach($url->removeRoot("root") as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->removePath("aaa")</b> => ['."\n";
foreach($url->removePath("aaa") as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->removeQuery("member")</b> => ['."\n";
foreach($url->removeQuery("member") as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";

echo "<br>---------------------------------------------<br><br>";

$url = new \UrlParser\Url("http://www.web.cz//root/rrr/aaa/bbb/a.html?member=me&age=15#hashtag");
echo '$url = new \UrlParser\Url("http://www.web.cz//root/rrr/aaa/bbb/a.html?member=me&age=15#hashtag")'."\n";
echo '$url->getString() => '.$url->getString()."\n";

echo "\n";
echo '<b>$url->removeRoot(["root","rrr"])</b> => ['."\n";
foreach($url->removeRoot(["root","rrr"]) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->removePath(["aaa", "bbb"])</b> => ['."\n";
foreach($url->removePath(["aaa", "bbb"]) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->removeQuery(["member", "age"])</b> => ['."\n";
foreach($url->removeQuery(["member", "age"]) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";

echo "<br>---------------------------------------------<br><br>";

$url = new \UrlParser\Url("http://www.web.cz//root/rrr/aaa/bbb/a.html?member=me&age=15#hashtag");
echo '$url = new \UrlParser\Url("http://www.web.cz//root/rrr/aaa/bbb/a.html?member=me&age=15#hashtag")'."\n";
echo '$url->getString() => '.$url->getString()."\n";

echo "\n";
echo '<b>$url->removeRoot([])</b> => ['."\n";
foreach($url->removeRoot([]) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->removePath([])</b> => ['."\n";
foreach($url->removePath([]) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->removeQuery([])</b> => ['."\n";
foreach($url->removeQuery([]) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";

echo "<br>---------------------------------------------<br><br>";

$url = new \UrlParser\Url("http://www.web.cz//root/rrr/aaa/bbb/a.html?member=me&age=15#hashtag");
echo '$url = new \UrlParser\Url("http://www.web.cz//root/rrr/aaa/bbb/a.html?member=me&age=15#hashtag")'."\n";
echo '$url->getString() => '.$url->getString()."\n";

echo "\n";
echo '<b>$url->removeRoot(["wrong"])</b> => ['."\n";
foreach($url->removeRoot(["wrong"]) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->removePath(["wrong"])</b> => ['."\n";
foreach($url->removePath(["wrong"]) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";
echo "\n";
echo '<b>$url->removeQuery(["wrong"])</b> => ['."\n";
foreach($url->removeQuery(["wrong"]) as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '$url->getString() => '.$url->getString()."\n";

echo "<br>---------------------------------------------<br><br>";

$url = new \UrlParser\Url("http://www.web.cz//root/rrr/aaa/bbb/a.html?member=me&age=15#hashtag");
echo '$url = new \UrlParser\Url("http://www.web.cz//root/rrr/aaa/bbb/a.html?member=me&age=15#hashtag")'."\n";
echo "\n";
echo '<b>$url->removeExtension()</b> => '.$url->removeExtension()."\n";
echo '$url->getString() => '.$url->getString()."\n";
