# URL-PARSER \ URL
 class which parse url and enable this URL for more operations.

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
```

## makeItString($url_path)
@url_path [string || array of string]<br>
Correct URL in right FORM. You can use STRING or ARRAYofSTRINGS to create url.
This method also erase double slashes.

```php
makeItString("http://www.web.cz//aaa/bbb/a.html")
makeItString(["http", "/www.web.cz/", "/aaa/bbb", "a.html"])

getString() => "http://www.web.cz/aaa/bbb/a.html"
```






## pop($times)
@times [int]		How many time<br>
Remove last part of url PATH. NOT just print, but REMOVE!!!

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
getString() => "http://www.web.cz/aaa/bbb/a.html"

$GLOBALS["url"].pop();
getString() => "http://www.web.cz/aaa/bbb"

$GLOBALS["url"].pop(3);
getString() => "http://www.web.cz"
```
