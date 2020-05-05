# URL-PARSER \ URL
 class which parse url and enable this URL for more operations.<br>


```php
$GLOBALS["server_root"] = new \UrlParser\Url("root");		// set root folder as ROOT
// BOTH variant are possile ↓
// during constructing URL obj, multiple slashes are transform to ONE
$url = new \UrlParser\Url(["http", "/www.web.cz/root", "/aaa/bbb", "a.html", "?member=me&age=15", "#hashtag"]);
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb//a.html?member=me&age=15#hashtag");

// special possibility for TEMPORARY files
$url = new \UrlParser\Url('C:\xampp\tmp\php8C07.tmp', '\\');


$url->getScheme("string")   => "http"
$url->getHost("string")     => "www.web.cz"
$url->getRoot("string")     => "root"
$url->getPath("string")     => "aaa/bbb/a.html"
$url->getQuery("string")    => "?member=me&age=15"
$url->getFragment("string") => "hashtag"
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


<hr>



## pop($times)
- **$times [int]**		How many time
* **@return [string / array of string]** What was popped

Remove last part of url PATH. NOT just print, but REMOVE!!!\n
```php
$url = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
$url->getString() => "http://www.web.cz/root/aaa/bbb/a.html"

$popped = $url->pop();
$url->getString() => "http://www.web.cz/root/aaa/bbb"
$popped => "a.html"

$popped = $url->pop(3);
$url->getString() => "http://www.web.cz"
$popped => [
	[0] => "bbb",
	[1] => "aaa"
]
```




## shift($times)
$times [int]		How many time<br>
Remove first part of url PATH. NOT just print, but REMOVE!!!

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->getString() => "http://www.web.cz/root/aaa/bbb/a.html"

$shifted = $url->shift();
$url->getString() => "http://www.web.cz/bbb/a.html"
$shifted => "aaa"

$shifted = $url->shift(3);
$url->getString() => "http://www.web.cz"
$shifted => [
	[0] => "bbb",
	[1] => "a.html"
]
```


## swap($from, $to)
$from [string]	which part of URL PATH should be changed<br>
$to [string]	changed to this<br>
Change one part of URL PATH for a new one.

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->getString() => "http://www.web.cz/root/aaa/bbb/a.html"

$url->swap("aaa", "ccc");
$url->getString() => "http://www.web.cz/ccc/bbb/a.html"

```

<hr>


## get....($exp)
$exp [string]	In which form do we want export<br>
1. getScheme() - how is variable saved [string | array of string | key array]
2. getScheme("string") - how could be written in URL
3. getScheme("array") - in array [array of string | key array]

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
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->getString() => "http://www.web.cz/root/aaa/bbb/a.html"
```
```php
$url->getHost() => "www.web.cz"
$url->getHost("string") => "www.web.cz"
$url->getHost("array") => [
	[0] => "www.web.cz"
]
```
```php
$url->getPath() => [
	[0] => "ccc",
	[1] => "bbb",
	[2] => "a.html"
]
$url->getPath("string") => "ccc/bbb/a.html"
$url->getPath("array") => [
	[0] => "ccc",
	[1] => "bbb",
	[2] => "a.html"
]

```



## getString()
get the whole URL in string format.

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->addPath("file");			// add PATH URL
$url->addQuery(["name" => "jerome"]);	// add Query in URL

$url->getString() => "http://www.web.cz/root/aaa/bbb/a/file.html?name=jerome"

```


<hr>

## getDepth()
return number of all folder from ROOT

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->getDepth() => 2

$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a");
$url->getDepth() => 3

```


## linkRoot()
return path, which return this url to root

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->linkRoot() => "../../"

$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a");
$url->linkRoot() => "../../../"

```

<hr>


## addPath($add_part)
$add_part [string | array of strings]
add items to ROOT part.

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->addPath(["ccc", "ddd"]);
$url->getPath("string") => "aaa/bbb/a/ccc/ddd.html"
$url->getString() => "http://www.web.cz/root/aaa/bbb/a/ccc/ddd.html"

$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a");
$url->addPath(["ccc", "ddd"]);
$url->getPath("string") => "aaa/bbb/a/ccc/ddd"
$url->getString() => "http://www.web.cz/root/aaa/bbb/a/ccc/ddd"

```


## beforePath($add_part)
$add_part [string | array of strings]
add items to ROOT part.

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->beforePath(["ccc", "ddd"]);

$url->getPath("string") => "ccc/ddd/aaa/bbb/a.html"
$url->getString() => "http://www.web.cz/root/ccc/ddd/aaa/bbb/a.html"

```


## addQuery($add_part)
$add_part [key array]
add items to ROOT part.

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->addQuery(["name" => "jerome", "age=15"]);

$url->getQuery("string") => "?name=jerome&age=15"
$url->getString() => "http://www.web.cz/root/aaa/bbb/a.html?name=jerome&age=15"

$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html?member=me");
$url->addQuery(["name" => "jerome", "age=15"]);

$url->getQuery("string") => "?member=me&name=jerome&age=15"
$url->getString() => "http://www.web.cz/root/aaa/bbb/a.html?member=me&name=jerome&age=15"

```

<hr>

## hasExtension()
return 1 if the URL is ending with file: ".../a.html"<br>
return 0 if the URL is ending onn folder: ".../a"

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->hasExtension() => 1

$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a");
$url->hasExtension() => 0

```

## getExtension()
Get extension of URL

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->getExtension() => "html"

```


## removeExtension()
If URL has extension => ".html" it will remove it from path

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$extension = $url->removeExtension();

$url->getString() => "http://www.web.cz/root/aaa/bbb/a"
$extension => "html"

```

## exist()
check if URL exist as File/Folder

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->exist() => 1
```

## isFolder()
check if URL exist as Folder

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->isFolder() => 0
```

## isFile()
check if URL exist as File

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$url->isFile() => 1
```


<hr>


## remove...()
$add_part [key array]
add items to ROOT part.

- **removeScheme()** - remove scheme part: "http"
- **removeHost()** - remove Host part: "web.cz"
- **removeRoot()** - remove Root part: ["aaa"]
- **removePath()** - remove Path part: ["bbb", "a.html"]
- **removeQuery()** - remove Query part: ["member" => "me", "age" => "15"]
- **removeFragment()** - remove hastag part: "hashtag"

```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html?member=me&age=15");
$remove_part = $url->removeScheme();

$url->getString() => "www.web.cz/root/aaa/bbb/a.html"
$remove_part => "http"
```

### removePath($path_part)
```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$remove_part = $url->removePath(["aaa", "bbb"]);

$url->getString() => "www.web.cz/root/a.html"
$remove_part = [
	[0] => "aaa",
	[1] => "bbb"
]
```

### removeQuery($key_array)
```php
$url = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html?member=me&age=15");
$remove_part = $url->removeQuery(["member"]);

$url->getString() => "www.web.cz/root/aaa/bbb/a.html?age=15"
$remove_part = [
	["member"] => "me"
]
```
