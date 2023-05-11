<?php
/* ------------ Array Functions ----------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange'];

// 1. getting the length of array
echo count($fruits) . "<br><br>";

// 2. searching the array for an item
echo in_array('banana', $fruits) . "<br><br>";

// 3. adding an item to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // adds item to the beginning

// 4. removing an item from an array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first

// 5. removing specific element
unset($fruits[2]);

// 6. split into chunks of 2
$chunked_array = array_chunk($fruits, 2);
var_dump($chunked_array);
echo "<br><br>";

// 7. concatenating arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
echo "<br><br>";

$arr4 = [...$arr1, ...$arr2]; // using the ...Spread operator
var_dump($arr4);
echo "<br><br>";


// 8. combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

// 9. getting an array of keys from an assoc array
$keys = array_keys($c);
var_dump($keys);
echo "<br><br>";

// 10. flipping keys with values
$flipped = array_flip($c);
var_dump($flipped);
echo "<br><br>";

// 11. creating array of numbers with range()
$numbers = range(1, 20);

// 12. mapping through an existing array and create a new one
$new_numbers = array_map(function ($number) {
  return "Number: $number";
}, $numbers);

// 13. filtering an array
$less_than_10 = array_filter($numbers, fn ($number) => $number < 10);

// 14. using array_reduce() function
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
var_dump($sum);
echo "<br><br>";

// 15. sorting an array
$ages = [27, 16, 18, 22, 19, 23, 28, 17, 20];
sort($ages);

// 16. getting the highest value in the array
echo "Highest age: " . max($ages) . "<br>";

// 17. getting the lowest value in the array
echo "Lowest age: " . min($ages) . "<br>";
