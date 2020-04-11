# URL-PARSER \ URL
 class which parse url and enable this URL for more operations.

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
```

## makeItString($url_path)
Correct URL in right FORM. You can use STRING or ARRAYofSTRINGS to create url.
This method also erase double slashes.

```php
makeItString("http://www.web.cz//aaa/bbb/a.html")
makeItString(["http", "/www.web.cz/", "/aaa/bbb", "a.html"])

=> http://www.web.cz/aaa/bbb/a.html
```

@url_path [string, array of string]




## pop()
Remove last part of url PATH

```php
$GLOBALS["url"] = new \UrlParser\Url("http://www.web.cz//aaa/bbb/a.html");
=> http://www.web.cz/aaa/bbb/a.html
$GLOBALS["url"].pop()
makeItString(["http", "/www.web.cz/", "/aaa/bbb", "a.html"])

=> http://www.web.cz/aaa/bbb/a.html
```

 * @times [int]		How many time
 */
