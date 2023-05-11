<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
  // If Statement Syntax
  if (condition) {
    // code to be executed if condition is true
  }
*/

$age = 20;

if ($age >= 18) {
  echo 'You are old enough to vote!<br>';
} else {
  echo 'Sorry, you are too young to vote.<br>';
}

// Dates
// $today = date("F j, Y, g:i a"); // -> May 8, 2023, 9:14 pm

$time = date('H');

if ($time < 12) {
  echo 'Have a good morning!<br>';
} elseif ($time < 17) {
  echo 'Have a good afternoon!<br>';
} else {
  echo 'Have a good evening!<br>';
}

// Check if an array is empty
//
// The isset() function will generate a warning or e-notice
// when the variable does not exist.
//
// The empty() function will not generate any warning
// or e-notice when the variable does not exist.

$posts = [];

if (!empty($posts[0])) {
  echo $posts[0];
} else {
  echo 'You have no new posts<br>';
}

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// Echo based on a condition (Same as above)
echo !empty($posts[0]) ? $posts[0] : 'There are no posts<br>';

// Assign a variable based on a condition
$first_post = !empty($posts[0]) ? $posts[0] : 'There are no posts<br>';

$first_post = !empty($posts[0]) ? $posts[0] : null;

// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL
$firstPost = $posts[0] ?? null;

var_dump($firstPost);
echo "<br>";

/* -------- Switch Statements ------- */

$fav_food = 'chicken';

switch ($fav_food) {
  case 'noodles':
    echo 'Your favorite food is noodles!<br>';
    break;
  case 'chicken':
    echo 'Your favorite food is chicken!<br>';
    break;
  case 'fries':
    echo 'Your favorite food is fries!<br>';
    break;
  default:
    echo 'Your favorite food is neither noodles, nor chicken, nor fries!<br>';
}
