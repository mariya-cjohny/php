<?php
// 1. Normal variable assignment
$name = "Mariya";
$age = 20;

// 2. Case-sensitive variables
$city = "Delhi";
$City = "Mumbai";

// 3. Integer and float
$marks = 85;
$percentage = 85.5;

// 4. Boolean
$isStudent = true;

// 5. Array (auto-created)
$subjects[] = "Maths";
$subjects[] = "Science";

// 6. Associative array
$student = [
    "name" => $name,
    "age" => $age
];

/* -----------------------------
   COPY (Assignment by VALUE)
-------------------------------- */
$x = 10;
$y = $x;   // COPY of value
$y = 30;   // change only y

/* -----------------------------
   REFERENCE (Assignment by &)
-------------------------------- */
$a = 10;
$b = &$a;  // REFERENCE
$b = 20;   // change affects both

// 8. Weird variable name (variable variable)
${'my-var'} = "Special Value";

// 9. Unset a variable
$temp = "Delete me";
unset($temp);

// Output everything
echo "Name: $name <br>";
echo "Age: $age <br>";

echo "City: $city <br>";
echo "City with capital C: $City <br>";

echo "Marks: $marks <br>";
echo "Percentage: $percentage <br>";

echo "Is Student: $isStudent <br>";

echo "First Subject: $subjects[0] <br>";

echo "Student Name from array: " . $student["name"] . "<br>";

// COPY output
echo "<br>Copy Example:<br>";
echo "x = $x <br>";
echo "y = $y <br>";

// REFERENCE output
echo "<br>Reference Example:<br>";
echo "a = $a <br>";
echo "b = $b <br>";

echo "<br>Weird variable value: " . ${'my-var'} . "<br>";

var_dump($temp); // will be NULL
