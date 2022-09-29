<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20)
echo "1";
// Without circle braces
if ($age === 20)echo "1";
// Sample if-else
if ($age > 20)
echo "1";
else{
    echo"2";
}
// Difference between == and ===
if ($age == 20)
echo "1".'<br>';

if ($age === 20)
echo "2";
// if AND

if ($age == 20 && $salary === 300000)
echo "do something";

// if OR

// Ternary if

echo  $age < 22 ? 'young' : 'Old';

// Short ternary
$myage = $age ?:18;
echo '<pre>';
var_dump($myage);
echo '</pre>';
// Null coalescing operator

$myname = isset($name) ? $name : 'tonny';
$myname =  $name ?? 'tonny';
// switch


