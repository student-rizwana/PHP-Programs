<?php

include('details.php');


require('my_name.php');


include_once('details.php');


require_once('my_name.php');


echo "<h3>Student Details:</h3>";
foreach ($students as $student) {
  echo "Name: " . $student['name'] . "<br>";
  echo "Age: " . $student['age'] . "<br>";
  echo "Date of Birth: " . $student['dob'] . "<br><br>";
}
