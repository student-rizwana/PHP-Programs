<?php
// Define the creative function Mal()
function Mal($a, $b)
{
  echo "Calling Mal() with parameters: $a and $b<br>";
  for ($i = 1; $i <= 5; $i++) {
    $result = $a * $b;
    echo "Iteration $i: $a * $b = $result<br>";
  }
  echo "<br>";
}

// Call Mal() five times with different parameters using a for loop
for ($i = 1; $i <= 5; $i++) {
  $param1 = $i * 2;     // Example: 2, 4, 6, 8, 10
  $param2 = $i + 3;     // Example: 4, 5, 6, 7, 8
  Mal($param1, $param2);
}
