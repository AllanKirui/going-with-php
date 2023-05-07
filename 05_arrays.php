<?php
/*
  ------------ Introduction to Arrays -----------

  In PHP, arrays can be made using:
  1. square bracket notation []
  2. the array() function that takes comma-separated values
*/

// simple array of numbers
$numbers = [1, 12, 7.3, -4];

// simple array of strings
$colors = ["red", "green", "blue"];

// using the array function to create an array
$people = array("James", "Rose", "Bill", "Mary");

// outputting values from an array
echo $numbers[1];
echo "<br><br>";

// using the var_dump() fn to view the length of the array
// and the data type of its contents
var_dump($numbers);
echo "<br><br>";

/*
  ------------ Associative Arrays -------------
  These arrays are kinda like JavaScript objects with key-value pairs,
  but a slightly different syntax from their JavaScript counterparts

  Assign values to keys using a fat arrow (=>)
*/

$employee1 = [
  "name" => "Jill",
  "age" => 23,
  "role" => "Frontend Developer"
];

echo "Hello, " . $employee1["name"];
echo "<br><br>";

/*
  ------------ Multi-dimensional arrays ------------
  
  Multi-dimansional arrays are often used to store data in a table format.
*/

$employees = [
  $employee1,
  [
    "name" => "Casey",
    "age" => 29,
    "role" => "Project Lead"
  ],
  [
    "name" => "Jessica",
    "age" => 27,
    "role" => "UI/UX designer"
  ],
];

var_dump($employees);
echo "<br><br>";

// Accessing values in a multi-dimensional array
echo $employees[1]["name"] . " is the company's " . $employees[1]["role"];
