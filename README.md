# URL-PARSER \ URL
 class which parse url and enable this URL for more operations.<br>


```php
$GLOBALS["server_root"] = new \UrlParser\Url("root");		// set root folder as ROOT
$GLOBALS["url"] = new \UrlParser\Url(["http", "/www.web.cz/root", "/aaa/bbb", "a.html"]);
```

## makeItString($url_path)
$url_path [string || array of string]<br>
Correct URL in right FORM. You can use STRING or ARRAYofSTRINGS to create url.
This method also erase double slashes.

```php
makeItString("http://www.web.cz//aaa/bbb/a.html")
makeItString(["http", "/www.web.cz/root", "/aaa/bbb", "a.html"])

getString() => "http://www.web.cz/root/aaa/bbb/a.html"
```






## pop($times)
$times [int]		How many time<br>
Remove last part of url PATH. NOT just print, but REMOVE!!!

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
$GLOBALS["url"]->getString() => "http://www.web.cz/root/aaa/bbb/a.html"

$GLOBALS["url"]->pop();
$GLOBALS["url"]->getString() => "http://www.web.cz/root/aaa/bbb"

$GLOBALS["url"]->pop(3);
$GLOBALS["url"]->getString() => "http://www.web.cz"
```




## shift($times)
$times [int]		How many time<br>
Remove first part of url PATH. NOT just print, but REMOVE!!!

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->getString() => "http://www.web.cz/root/aaa/bbb/a.html"

$GLOBALS["url"].shift();
$GLOBALS["url"]->getString() => "http://www.web.cz/bbb/a.html"

$GLOBALS["url"].shift(3);
$GLOBALS["url"]->getString() => "http://www.web.cz"
```


## swap($from, $to)
$from [string]	which part of URL PATH should be changed<br>
$to [string]	changed to this<br>
Change one part of URL PATH for a new one.

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->getString() => "http://www.web.cz/root/aaa/bbb/a.html"

$GLOBALS["url"].swap("aaa", "ccc");
$GLOBALS["url"]->getString() => "http://www.web.cz/ccc/bbb/a.html"

```




## get....($exp)
$exp [string]	In which form do we want export<br>
getScheme() / getScheme("string") / getScheme("array")

```php
"http://web.cz/aaa/bbb/c.html"
```
- **getScheme()** - get scheme part: "http"
- **getHost()** - get Host part: "web.cz"
- **getRoot()** - get Root part: ["aaa"]
- **getPath()** - get Path part: ["bbb", "a.html"]
- **getQuery()** - get Query part: ["member" => "me", "age" => "15"]
- **getFragment()** - get hastag part: "hashtag"

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->getString() => "http://www.web.cz/root/aaa/bbb/a.html"

$GLOBALS["url"]->getPath() => "ccc/bbb/a.html"

```



## getString()
get the whole URL in string format.

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->getString() => "http://www.web.cz/root/aaa/bbb/a.html"

```


## hasFile()
return 1 if the URL is ending with file: ".../a.html"<br>
return 0 if the URL is ending onn folder: ".../a"

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->hasFile() => 1

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a");
$GLOBALS["url"]->hasFile() => 0

```



## getDepth()
return number of all folder from ROOT

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->getDepth() => 2

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a");
$GLOBALS["url"]->getDepth() => 3

```
