<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'PHP Master';

// 1. get the length of a string
echo strlen($string) . "<br>";

// 2. find the position of the first occurrence of a substring in a string
echo strpos($string, 'M') . "<br>"; // NOTE: it's case sensitive

// 3. find the position of the last occurrence of a substring in a string
echo strrpos($string, 'P') . "<br>";

// 4. reverse a string
echo strrev($string) . "<br>";

// 5. convert all characters to lowercase
echo strtolower($string) . "<br>";

// 6. convert all characters to uppercase
echo strtoupper($string) . "<br>";

// 7. uppercase the first character of each word
echo ucwords(strtolower($string)) . "<br>";

// 8. string replace
echo str_replace('Master', 'Guru', $string) . "<br>";

// 9. return portion of a string specified by the offset and length
echo substr($string, 0, 5) . "<br>";
echo substr($string, 5) . "<br>";

// 10. starts with
if (str_starts_with($string, 'PH')) {
  echo 'YES' . "<br>";
}

// 11. Ends with
if (str_ends_with($string, 'ter')) {
  echo 'YES' . "<br>";
}

// 12. HTML Entities
$string2 = '<h1>On a path to become a PHP Master</h1>';
echo htmlentities($string2) . "<br>";

// 13. Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'great instructor');
echo "<br>";
printf('1 + 1 = %f', 1 + 1); // float (%f), int (%d)
