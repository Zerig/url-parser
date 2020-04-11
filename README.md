# URL-PARSER \ URL
 class which parse url and enable this URL for more operations.<br>


```php
$GLOBALS["server_root"] = new \UrlParser\Url("root");		// set root folder as ROOT
$GLOBALS["url"] = new \UrlParser\Url(["http", "/www.web.cz/root", "/aaa/bbb", "a.html", "?member=me&age=15", "#hashtag"]);

$GLOBALS["url"]->getScheme("string") 	=> "http"
$GLOBALS["url"]->getHost("string") 	=> "www.web.cz"
$GLOBALS["url"]->getRoot("string") 	=> "root"
$GLOBALS["url"]->getPath("string") 	=> "aaa/bbb/a.html"
$GLOBALS["url"]->getQuery("string") 	=> "?member=me&age=15"
$GLOBALS["url"]->getFragment("string") 	=> "hashtag"
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
$GLOBALS["url"]->addPath("file");			// add PATH URL
$GLOBALS["url"]->addQuery(["name" => "jerome"]);	// add Query in URL

$GLOBALS["url"]->getString() => "http://www.web.cz/root/aaa/bbb/a/file.html?name=jerome"

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


## linkRoot()
return path, which return this url to root

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->linkRoot() => "../../"

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a");
$GLOBALS["url"]->linkRoot() => "../../../"

```


## addRoot($add_part)
$add_part [string | array of strings]
add items to ROOT part.

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->addRoot(["rrr", "sss"]);

$GLOBALS["url"]->getRoot("string") => "root/rrr/sss"
$GLOBALS["url"]->getString() => "http://www.web.cz/root/rrr/sss/aaa/bbb/a.html"

```
## beforeRoot($add_part)
$add_part [string | array of strings]
add items to ROOT part.

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->beforeRoot(["rrr", "sss"]);

$GLOBALS["url"]->getRoot("string") => "rrr/sss/root"
$GLOBALS["url"]->getString() => "http://www.web.cz/rrr/sss/root/aaa/bbb/a.html"

```




## addPath($add_part)
$add_part [string | array of strings]
add items to ROOT part.

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->addPath(["ccc", "ddd"]);

$GLOBALS["url"]->getPath("string") => "aaa/bbb/a/ccc/ddd.html"
$GLOBALS["url"]->getString() => "http://www.web.cz/root/aaa/bbb/a/ccc/ddd.html"

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a");
$GLOBALS["url"]->addPath(["ccc", "ddd"]);

$GLOBALS["url"]->getPath("string") => "aaa/bbb/a/ccc/ddd"
$GLOBALS["url"]->getString() => "http://www.web.cz/root/aaa/bbb/a/ccc/ddd"

```
## beforePath($add_part)
$add_part [string | array of strings]
add items to ROOT part.

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->beforePath(["ccc", "ddd"]);

$GLOBALS["url"]->getPath("string") => "ccc/ddd/aaa/bbb/a.html"
$GLOBALS["url"]->getString() => "http://www.web.cz/root/ccc/ddd/aaa/bbb/a.html"

```
