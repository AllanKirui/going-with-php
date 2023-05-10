<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
  - defined like functions in JavaScript
  - can be defined as arrow functions as well
*/

function registerUser()
{
  echo 'User has been registered!<br><br>';
}

// Running a function
registerUser();

// Adding params
function registerUser2($username)
{
  echo "User $username has been registered!<br><br>";
}

// Pass in an argument
registerUser2('JackJones');

// Returning values
function add($num1, $num2)
{
  return $num1 + $num2;
}

$sum = add(5, 5);
echo "$sum<br><br>";

// Adding default values
function subtract($num1 = 10, $num2 = 5)
{
  return $num1 - $num2;
}

echo subtract();
echo "<br><br>";

// Assigning anonymous functions to variables.
// Often used for closures and callback functions
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

echo $add(500, 500);
echo "<br><br>";

// Arrow functions
$multiply = fn ($num1, $num2) => $num1 * $num2;

echo $multiply(5, 5);
