<?php
// Integer
$age = 21;

// Float
$salary = 25000.75;

// String
$name = "Mariya";

// Boolean
$isEmployed = true;

// Display values
echo "Name: $name<br>";
echo "Age: $age<br>";
echo "Salary: $salary<br>";

// Using boolean in condition
if ($isEmployed) {
    echo "Employment Status: Employed<br>";
} else {
    echo "Employment Status: Unemployed<br>";
}

// Checking data types
echo "<br>Data Types:<br>";
var_dump($age);
echo "<br>";
var_dump($salary);
echo "<br>";
var_dump($name);
echo "<br>";
var_dump($isEmployed);
