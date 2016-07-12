# Installation
    composer require denismitr/dprint

## Usage
```php
$a = "Stringing";
$b = 1234.2344;
$e = new Exception("Testing...");

$arr = ["Rome", "London", "Moscow", "New York"];

dprint($a, $b, $e, $arr);
```
or, to print and kill
```php
ddump($a, $b, $e, $arr);
```

Works both under CLI and in browser with a and readable convenient theme.