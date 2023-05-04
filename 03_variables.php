<?php
// ------------ Variables and Data Types -----------

/* 
  ------------ Data Types in PHP ------------

  1. String - a string is a series of characters surrounded by quotes
  2. Integer - these are whole numbers
  3. Float - these are decimal numbers
  4. Boolean - true or false
  5. Array - a special variable that can hold multiple values
  6. Object - a class
  7. NULL - represents an empty variable
  8. Resource - a special variable that holds a resource
*/

/* 
  ------------ Variable Naming Rules in PHP ------------

  1. Variables must be prefixed with a dollar sign ($)
  2. Variables must start with either a letter or an underscore - nothing else
  3. Variables can only contain alphanumeric characters and underscores
  4. Variables are case-sensitive ($name and $Name point to two different variables)
  5. Array - a special variable that can hold multiple values
*/

$name = "John"; // String
$age = "36"; // Integer
$height_in_m = 1.8;  // Float

var_dump($height_in_m); // var_dump() shows the data type
echo "<br>"; // prints a break

// Adding variables to strings
echo "$name is $age years old.";
echo "<br>";

// Concatenating strings
echo "<h3>" . $name . " loves PHP" . "</h3>";
echo "<br>";

// Constants - values that cannot be changed
define("PI", 3.142);
var_dump(PI);
