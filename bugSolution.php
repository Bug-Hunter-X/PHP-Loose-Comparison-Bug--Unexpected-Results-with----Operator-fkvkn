The solution involves using the strict comparison operator (`===`) instead of the loose comparison operator (`==`). Strict comparison checks for both value and type equality. 

```php
function checkValue($value) {
  if ($value === 0) {
    return 'Value is zero';
  } else {
    return 'Value is not zero';
  }
}

$result1 = checkValue(0);     // Correctly returns 'Value is zero'
$result2 = checkValue(0.0);   // Returns 'Value is not zero' (strict comparison)
$result3 = checkValue('0');   // Returns 'Value is not zero' (strict comparison)
$result4 = checkValue(false); // Returns 'Value is not zero' (strict comparison)

 echo "Result 1:" . $result1 . "\n";
 echo "Result 2:" . $result2 . "\n";
 echo "Result 3:" . $result3 . "\n";
 echo "Result 4:" . $result4 . "\n";
```
By using strict comparison, we ensure that the function accurately determines whether a variable holds a value that is numerically zero and of the same data type.