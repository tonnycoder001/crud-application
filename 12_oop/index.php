<?php

// What is class and instance
class person {
    public $name;
    public $surname;
    private $age;
}
$p = new person();
$p->name = 'tonny';
$p->surname = 'sandry';
echo '<pre>';
var_dump($p);
echo '</pre>';

echo $p->name. '<br>';
echo $p->surname .'<br>';

$p= new person().'<br>';
$p2->name = 'smith';
$p2->surname = 'Rowe';
echo '<pre>';
var_dump($p);
echo '</pre>';


// Create Person class in Person.php

// Create instance of Person

// Using setter and getter