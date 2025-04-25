
  <?php
  $string = "Hello World! Welcome to PHP string functions.";

  echo "Original String: " . $string . "<br><br>";

  // 1. Length of the string
  echo "1. Length of the string: " . strlen($string) . "<br>";

  // 2. Position of the first occurrence of 'Hello'
  echo "2. Position of 'Hello': " . strpos($string, "Hello") . "<br>";

  // 3. Replace 'World' with 'Universe'
  $replaced = str_replace("World", "Universe", $string);
  echo "3. Replace 'World' with 'Universe': " . $replaced . "<br>";

  // 4. Convert to lowercase
  echo "4. Lowercase: " . strtolower($string) . "<br>";

  // 5. Convert to uppercase
  echo "5. Uppercase: " . strtoupper($string) . "<br>";

  // 6. Capitalize the first letter of each word
  echo "6. Capitalize each word: " . ucwords($string) . "<br>";

  // 7. Capitalize the first letter of the string
  echo "7. Capitalize first letter: " . ucfirst($string) . "<br>";

  // 8. Remove whitespace from the beginning and end
  $trimmed = trim($string);
  echo "8. Trimmed string: " . $trimmed . "<br>";
  ?>
