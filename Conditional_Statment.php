<?php
$mark1 = 28;
$mark2 = 67;
$mark3 = 95;

function checkResult($mark)
{
  if ($mark > 90) {
    echo "Good<br>";
  } elseif ($mark > 35 && $mark < 70) {
    echo "Average<br>";
  } elseif ($mark <= 35) {
    echo "Filed<br>";
  } else {
    echo "Marks not in defined Range<br>";
  }
}

echo "<h3>Result for Mark 1 ($mark1):</h3>";
checkResult($mark1);

echo "<h3>Result for Mark 2 ($mark2):</h3>";
checkResult($mark2);


echo "<h3>Result for Mark 3 ($mark3):</h3>";
checkResult($mark3);
