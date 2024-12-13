```php
<?php
function processData(array $data): array {
  $result = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $result[$key] = processData(array_map(fn($v) => $v, $value)); //create a copy using array_map
    } elseif (is_string($value) && strlen($value) > 10) {
      $result[$key] = substr($value, 0, 10);
    } else {
      $result[$key] = $value;
    }
  }
  return $result;
}

$data = [
  'name' => 'John Doe',
  'address' => [
    'street' => '123 Main St',
    'city' => 'Anytown',
    'zip' => '12345-6789'
  ],
  'description' => 'This is a very long description that exceeds the 10-character limit.'
];

$processedData = processData($data);
print_r($processedData);
?>
```