<?php
// There are various ways to output data to the screen using PHP

// 1. The 'echo' keyword is used to output strings, numbers, html etc
echo "Hello PHP\n",  123;

// 2. The 'print' keyword works like echo, but only accepts a single argument 
// at time
print "\nUsing print to print a single item";

// 3. The 'print_r()' function is used to print single values and arrays
print_r(['mangoes', 'apples', 'bananas']);

// 4. The 'var_dump()' function returns more info about the argument such as
// the data type and length for strings
var_dump("Hello"); // -> 'string(5) "Hello"'
var_dump(true); // -> 'bool(true)'

// 5. The 'var_export()' similar to var_dump().
// It outputs a string representation of a variable
var_export("Hello"); // -> 'Hello';