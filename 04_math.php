<?php
// ------------ Arithmetic and Math Functions -----------

// Arithmetic Operators
echo 2 + 2 . "<br>";
echo 13 - 3 . "<br>";
echo 9 * 9 . "<br>";
echo 50 / 2 . "<br>";
echo "<br>";
// Math Functions
// 1. getting the power of numbers
echo pow(2, 3) . "<br>"; // --> 8

// 2. getting random numbers
echo rand() . "<br>"; // --> random number without a specified range
echo rand(1, 10) . "<br>"; // --> random number between 1 and 10 inclusive

// 3. getting the squareroot of numbers
echo sqrt(-36) . "<br>"; // --> for negative inputs fn returns NAN
echo sqrt(0) . "<br>";
echo sqrt(9) . "<br>";

// 4. rounding up numbers to the next highest integer
echo ceil(3.7) . "<br>";

// 5. rounding down numbers to the next lowest integer
echo floor(3.7) . "<br>";

// 5. rounding down numbers automatically
echo round(6.4) . "<br>";
