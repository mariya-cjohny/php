<?php

// 1. ARRAY
$colors = ["Red", "Green", "Blue"];


// 2. OBJECT
class Student
{
    public $name;

    public function showName()
    {
        return $this->name;
    }
}

$student = new Student();
$student->name = "Mariya";


// 3. CALLABLE
function sayHello($name)
{
    return "Hello " . $name;
}

$callFunc = "sayHello";


// 4. ITERABLE (function accepts array or iterable)
function printItems(iterable $items)
{
    foreach ($items as $item) {
        echo $item . "<br>";
    }
}


// 5. RESOURCE
$file = fopen("demo.txt", "w");


// 6. NULL
$data = NULL;


// OUTPUT

echo "Array value: " . $colors[0] . "<br><br>";

echo "Object value: " . $student->showName() . "<br><br>";

echo "Callable value: " . $callFunc("Mariya") . "<br><br>";

echo "Iterable values:<br>";
printItems($colors);
echo "<br>";

if ($file) {
    fwrite($file, "Hello PHP");
    fclose($file);
    echo "Resource created and file written<br><br>";
}

var_dump($data);
