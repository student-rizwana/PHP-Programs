<?php
// Indexed array
$indexedArray = [225, "Dreams", "Glass", 6.22, "Globe"];

// Associative array
$associativeArray = [
  "Clutch" => "Zara",
  "Shoes" => "Bata",
  "Top" => "Rang"
];

// 1. Print both arrays entirely
echo "<h3>Indexed Array:</h3>";
print_r($indexedArray);

echo "<h3>Associative Array:</h3>";
print_r($associativeArray);

// 2. Combine both arrays and print the result as a single array
$combinedArray = array_merge($indexedArray, $associativeArray);

echo "<h3>Combined Array:</h3>";
print_r($combinedArray);

// 3. Get the 3rd value from the indexed array
echo "<h3>3rd Value from Indexed Array:</h3>";
echo $indexedArray[2];

// 4. Get the value for the key "Top" from the associative array
echo "<h3>Value for key 'Top' from Associative Array:</h3>";
echo $associativeArray["Top"];
