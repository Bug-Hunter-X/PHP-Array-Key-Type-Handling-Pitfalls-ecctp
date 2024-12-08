To avoid this problem, always use either integer or string keys explicitly. For numeric indices, use integers.

```php
$myArray = [];
$myArray[1] = 'Value 1'; // Correct: Integer key
$myArray["1"] = 'Value 2'; //Correct: String key
$myArray["1.5"] = 'Value 3';// Correct: String key

echo count($myArray); // Outputs 3
foreach ($myArray as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

This ensures that keys are handled consistently and prevents unexpected results due to implicit type conversions.