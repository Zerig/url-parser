# URL-PARSER \ URL
 class which parse url and enable this URL for more operations.<br>


```php
$GLOBALS["server_root"] = new \UrlParser\Url("root");		// set root folder as ROOT
// BOTH variant are possile ↓
// during constructing URL obj, multiple slashes are transform to ONE
$GLOBALS["url"] = new \UrlParser\Url(["http", "/www.web.cz/root", "/aaa/bbb", "a.html", "?member=me&age=15", "#hashtag"]);
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb//a.html?member=me&age=15#hashtag");

// special possibility for TEMPORARY files
$GLOBALS["url"] = new \UrlParser\Url('C:\xampp\tmp\php8C07.tmp', '\\');


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


<hr>



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

$GLOBALS["url"]->shift();
$GLOBALS["url"]->getString() => "http://www.web.cz/bbb/a.html"

$GLOBALS["url"]->shift(3);
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


<hr>

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

<hr>


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


## addQuery($add_part)
$add_part [key array]
add items to ROOT part.

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->addQuery(["name" => "jerome", "age=15"]);

$GLOBALS["url"]->getQuery("string") => "?name=jerome&age=15"
$GLOBALS["url"]->getString() => "http://www.web.cz/root/aaa/bbb/a.html?name=jerome&age=15"

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html?member=me");
$GLOBALS["url"]->addQuery(["name" => "jerome", "age=15"]);

$GLOBALS["url"]->getQuery("string") => "?member=me&name=jerome&age=15"
$GLOBALS["url"]->getString() => "http://www.web.cz/root/aaa/bbb/a.html?member=me&name=jerome&age=15"

```

<hr>

## hasFile()
return 1 if the URL is ending with file: ".../a.html"<br>
return 0 if the URL is ending onn folder: ".../a"

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->hasFile() => 1

$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a");
$GLOBALS["url"]->hasFile() => 0

```

## removeExtension()
If URL has extension => ".html" it will remove it from path

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->removeExtension();

$GLOBALS["url"]->getString() => "http://www.web.cz/root/aaa/bbb/a"

```

## isDir()
check if URL exist as Folder

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->isDir()	=> 0
```

## isFile()
check if URL exist as File

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->isFile()	=> 1
```

## exist()
check if URL exist as File/Folder

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->exist()	=> 1
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
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html?member=me&age=15");
$GLOBALS["url"]->removeScheme();
$GLOBALS["url"]->removeQuery();

$GLOBALS["url"]->getString() => "www.web.cz/root/aaa/bbb/a.html"
```

### removePath($path_part)
```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html");
$GLOBALS["url"]->removePath(["aaa", "bbb"]);
$GLOBALS["url"]->getString() => "www.web.cz/root/a.html"
```

### removeQuery($key_array)
```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz/root/aaa/bbb/a.html?member=me&age=15");
$GLOBALS["url"]->removeQuery(["member"]);
$GLOBALS["url"]->getString() => "www.web.cz/root/aaa/bbb/a.html?age=15"
```
