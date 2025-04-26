<?php
// Comparison Operators

// 1st set of variables (strings)
$a = "raj";
$b = "raj";

echo "<h3>Comparison between Strings:</h3>";
echo "a == b: " . var_export($a == $b, true) . "<br>";
echo "a === b: " . var_export($a === $b, true) . "<br>";
echo "a != b: " . var_export($a != $b, true) . "<br>";
echo "a !== b: " . var_export($a !== $b, true) . "<br>";
echo "Datatype of a: " . gettype($a) . "<br>";
echo "Datatype of b: " . gettype($b) . "<br><br>";

// 2nd set of variables (numbers)
$a = 90;
$b = 34;

echo "<h3>Comparison between Numbers:</h3>";
echo "a > b: " . var_export($a > $b, true) . "<br>";
echo "a < b: " . var_export($a < $b, true) . "<br>";
echo "a >= b: " . var_export($a >= $b, true) . "<br>";
echo "a <= b: " . var_export($a <= $b, true) . "<br>";
echo "a == b: " . var_export($a == $b, true) . "<br>";
echo "a != b: " . var_export($a != $b, true) . "<br>";
echo "Datatype of a: " . gettype($a) . "<br>";
echo "Datatype of b: " . gettype($b) . "<br><br>";

// Logical Operators

// 1st set of variables
$a = 14;
$b = 40;

echo "<h3>Logical Operators (Set 1):</h3>";
echo "(a < b) AND (a != b): " . var_export(($a < $b) && ($a != $b), true) . "<br>";
echo "(a > b) OR (a == b): " . var_export(($a > $b) || ($a == $b), true) . "<br>";
echo "NOT (a == b): " . var_export(!($a == $b), true) . "<br><br>";

// 2nd set of variables
$a = -2;
$b = 70;

echo "<h3>Logical Operators (Set 2):</h3>";
echo "(a < 0) AND (b > 0): " . var_export(($a < 0) && ($b > 0), true) . "<br>";
echo "(a > 0) OR (b > 0): " . var_export(($a > 0) || ($b > 0), true) . "<br>";
echo "NOT (a > b): " . var_export(!($a > $b), true) . "<br>";
