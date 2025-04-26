<?php
$globalValue = 90;


function add()
{
  global $globalValue;
  $globalValue += 10;
  echo "Value after adding 10: " . $globalValue . "<br>";
}


function sub()
{
  global $globalValue;
  $globalValue -= 50;
  echo "Value after subtracting 50: " . $globalValue . "<br>";
}


add();
sub();
