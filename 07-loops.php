<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax (written like JavaScript for loops)
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($x = 0; $x <= 10; $x++) {
  echo "Number: $x <br>";
}
echo "<br>";

/* ------------ While Loop ------------ */

/*
** While Loop Syntax (written like JavaScript while loops)
  while (condition) {
  // code to be executed
  }
*/

// the initializer
$x = 1;

// the condition
while ($x <= 5) {
  echo "Number: $x <br>";
  $x++;
}
echo "<br>";

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax (written like JavaScript do-while loops)
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once,
even if the condition is false.
*/

do {
  echo "Num: $x <br>";
  $x++; // $x is 6 from the while loop operation
} while ($x <= 5);
echo "<br>";

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax (slightly different syntax from the for-each JavaScript loop)

  > $variable - is the array
  > $key - is the index of the element 
  > $value - is the actual element of the array

  foreach ($variable as $key => $value) {
    # code...
  }

  Omitting the $key and just using the $value as shown below
  gives you direct access to the array's elements without the index

  foreach ($fruits as $fruit) {
    # code ...
  }
*/

// Loop through an array

$numbers = [10, 20, 30, 40, 50];

foreach ($numbers as $x) {
  echo "Number: $x <br>";
}
echo "<br>";

// Use the indexes within the loop

$posts = ['Post One', 'Post Two', 'Post Three'];

foreach ($posts as $index => $post) {
  echo "$index - $post <br>";
}
echo "<br>";

// Use the keys within the loop for an associative array

$person = [
  'first_name' => 'John',
  'last_name' => 'Doe',
  'email' => 'j.doe@gmail.com',
];

// Get Keys
foreach ($person as $key => $val) {
  echo "$key - $val <br>";
}
