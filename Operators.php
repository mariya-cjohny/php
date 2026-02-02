<?php

// Arithmetic Operators
$a = 10;
$b = 3;
echo $a + $b;   
echo "<br>";
echo $a % $b;   
echo "<br>";

// Assignment Operators
$a += 5;      
echo $a;     
echo "<br>";

// Comparison Operators
var_dump(5 == "5");
echo "<br>";
var_dump(5 === "5");
echo "<br>";

// Increment / Decrement
$x = 5;
echo ++$x;     // 6
echo "<br>";
echo $x--;     // 6
echo "<br>";
echo $x;       // 5
echo "<br>";

// Logical Operators
$age = 20;
var_dump($age > 18 && $age < 30); 
echo "<br>";
var_dump($age > 25 || $age < 10);
echo "<br>";
var_dump(!$age);
echo "<br>";

// String Operators
$msg = "Hello";
$msg .= " PHP";
echo $msg; 
echo "<br>";

// Array Operators
$arr1 = ["a" => 1];
$arr2 = ["b" => 2];
print_r($arr1 + $arr2);
echo "<br>";

// Ternary Operator
echo ($age >= 18) ? "Adult" : "Minor";
echo "<br>";

// Null Coalescing Operator
$user = $_GET['user'] ?? "Guest";
echo $user;
echo "<br>";

// Error Control Operator
$data = @file("missing.txt");
echo "Error suppressed";
echo "<br>";

// instanceof Operator
class Test {}
$obj = new Test();
var_dump($obj instanceof Test);

// funational operator
// $result = "PHP Rocks"
// |> strtoupper(...)
// |> str_split(...)
// |> array_reverse(...);
// print_r($result);
