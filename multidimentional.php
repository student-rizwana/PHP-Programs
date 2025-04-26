<?php
// Multidimensional Indexed Array
$details = [
  ['John', 'New York', 25, 'Male'],
  ['Sara', 'London', 22, 'Female'],
  ['Mike', 'Paris', 30, 'Male']
];

// Add one more array
$details[] = ['Ash', 'Tokyo', 20, 'Male'];

// Delete first array item from 0th index
unset($details[0]);
$details = array_values($details); // Reindexing array

// Display only cities
echo "<h3>Only Cities:</h3>";
foreach ($details as $item) {
  echo $item[1] . "<br>";
}

// Display entire array from last index
echo "<h3>Last Index Details:</h3>";
$lastIndex = end($details);
print_r($lastIndex);

// -----------------------

// Multidimensional Associative Array
$product_details = [
  [
    'product_name' => 'Laptop',
    'price' => 50000,
    'date' => '05-01-2024',
    'address' => 'Bangalore'
  ],
  [
    'product_name' => 'Phone',
    'price' => 20000,
    'date' => '05-01-2024',
    'address' => 'Delhi'
  ]
];

// Add one more array
$product_details[] = [
  'product_name' => 'TV',
  'price' => 2000,
  'date' => '06-01-2024',
  'address' => 'Hubli'
];

// Delete first array item
unset($product_details[0]);
$product_details = array_values($product_details); // Reindexing array

// Display product name of date = 06-01-2024
echo "<h3>Product with Date 06-01-2024:</h3>";
foreach ($product_details as $product) {
  if ($product['date'] == '06-01-2024') {
    echo $product['product_name'] . "<br>";
  }
}

// Display last array list
echo "<h3>Last Array List:</h3>";
print_r(end($product_details));
