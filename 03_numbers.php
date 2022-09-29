<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b.'<br>';
echo $a + $b + $c.'<br>';
echo $a + $b * $c;
echo $a / $b.'<br>';
echo $a % $b;
// Assignment with math operators
echo $a = $a + $b;

// Increment operator
echo $a++.'<br>';
echo ++$a;

// Decrement operator
echo $a--.'<br>';
echo --$a;
// Number checking functions

is_float(1.25);//true
is_double(1.34);//true
is_int(5);//true
is_numeric("3-45");//true
// Conversion

$strNumber = '12,34';
$number = (float)$strNumber;
var_dump($number);
// Number functions

echo "abs(-15)" . abs(-15). '<br>' ;
echo "pow(2. 3)" . pow(2, 3). '<br>' ;
echo "sqrt(-16)" . sqrt(-16). '<br>' ;
echo "max(2, 3)" . max(2, 3). '<br>';
echo "min(2, 3)" . min(2, 3). '<br>' ;
echo "round(2.4)" . round(2.4). '<br>' ;
echo "abs(-15)" . abs(-15). '<br>' ;
echo "abs(-15)" . abs(-15). '<br>' ;


// Formatting numbers

$number = 123456789.12345;//
echo number_format($number,2,',',' ');

// https://www.php.net/manual/en/ref.math.php
