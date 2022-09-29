<?php

// Create array
$fruits = ['bananas', 'apple', 'oranges'];
// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';
// Get element by index
echo $fruits[1].'<br>';
// Set element by index
$fruits[0] = 'peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';
// Check if array has element at index 2
isset($fruits[3]); //false

// Append element
$fruits[] = 'bananas';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'foo');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'bar');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array

// Split the string into an array
$string = 'bananas,apple,peach';
echo '<pre>';
var_dump(explode(",",$string));
echo '</pre>';
// Combine array elements into string
echo implode("&", $fruits);

// Check if element exist in the array
echo '<pre>';
var_dump(in_array('mangoe'  ,$fruits));
echo '</pre>';
// Search element index in the array
echo '<pre>';
var_dump(in_array('apple'  ,$fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ['potatoes', 'cucumber'];
echo '<pre>';
var_dump(array_merge($vegetables ,$fruits));
echo '</pre>';
// Sorting of array (Reverse order also)
sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' =>'Tonny',
    'surname' => 'sandry',
    'age' => 19,
    'hobbies' => ['football', 'gaming']
];
echo '<pre>';
var_dump($person);
echo '</pre>';
// Get element by key
echo $person['name'];
// Set element by key
$person['channel'] = 'world of football';
echo '<pre>';
var_dump(in_array('mangoe'  ,$fruits));
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
$person['address']??= 'unknown';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the keys of the array

echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';
// Print the values of the array

echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person);

echo '<pre>';
var_dump($person);
echo '</pre>';

asort($person);

echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
