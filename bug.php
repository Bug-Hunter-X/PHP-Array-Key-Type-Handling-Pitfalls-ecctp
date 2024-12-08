In PHP, a common yet subtle error arises when dealing with array keys that are not strictly integers or strings.  Consider this scenario:

```php
$myArray = [];
$myArray[1.5] = 'Value 1';
$myArray["1.5"] = 'Value 2';
echo count($myArray); // Outputs 2
foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

PHP will treat `1.5` as a string key, not a numeric key. Thus,  `$myArray[1.5]` and `$myArray["1.5"]` are different elements, leading to unexpected results if you expect keys to behave as numbers.