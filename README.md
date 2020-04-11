# url-parser
 class of object which parse url and can work with it.



## makeItString($url_path)
Correct URL in right FORM. You can use STRING or ARRAYofSTRINGS to create url.
This method also erase double slashes.

```bash
makeItString("http://www.web.cz//aaa/bbb/a.html")
makeItString(["http", "/www.web.cz/", "/aaa/bbb", "a.html"])

=> http://www.web.cz/aaa/bbb/a.html
```

@url_path [string, array of string]
