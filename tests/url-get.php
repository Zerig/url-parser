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

echo '<b>$url->getString()</b> => '.$url->getString()."\n";
echo "<br>---------------------------------------------<br><br>";

echo '<b>$url->getScheme()</b> => '.$url->getScheme()."\n";
echo '<b>$url->getScheme("string")</b> => '.$url->getScheme("string")."\n";
echo '<b>$url->getScheme("array")</b> => ['."\n";
foreach($url->getScheme("array") as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";

echo "<br>---------------------------------------------<br><br>";

echo '<b>$url->getHost()</b> => '.$url->getHost()."\n";
echo '<b>$url->getHost("string")</b> => '.$url->getHost("string")."\n";
echo '<b>$url->getHost("array")</b> => ['."\n";
foreach($url->getHost("array") as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";

echo "<br>---------------------------------------------<br><br>";

echo '<b>$url->getRoot()</b> => ['."\n";
foreach($url->getRoot() as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '<b>$url->getRoot("string")</b> => '.$url->getRoot("string")."\n";
echo '<b>$url->getRoot("array")</b> => ['."\n";
foreach($url->getRoot("array") as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";

echo "<br>---------------------------------------------<br><br>";

echo '<b>$url->getPath()</b> => ['."\n";
foreach($url->getPath() as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '<b>$url->getPath("string")</b> => '.$url->getPath("string")."\n";
echo '<b>$url->getPath("array")</b> => ['."\n";
foreach($url->getPath("array") as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";

echo "<br>---------------------------------------------<br><br>";

echo '<b>$url->getQuery()</b> => ['."\n";
foreach($url->getQuery() as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";
echo '<b>$url->getQuery("string")</b> => '.$url->getQuery("string")."\n";
echo '<b>$url->getQuery("array")</b> => ['."\n";
foreach($url->getQuery("array") as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";


echo "<br>---------------------------------------------<br><br>";

echo '<b>$url->getFragment()</b> => '.$url->getFragment()."\n";
echo '<b>$url->getFragment("string")</b> => '.$url->getFragment("string")."\n";
echo '<b>$url->getFragment("array")</b> => ['."\n";
foreach($url->getFragment("array") as $key => $val){
	echo "	".'['.$key.'] => '.$val."\n";
}
echo ']'."\n";

echo "<br>---------------------------------------------<br><br>";

echo '<b>$url->getExtension()</b> => '.$url->getExtension()."\n";
