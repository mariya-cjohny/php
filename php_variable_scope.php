<?php
// GLOBAL SCOPE
$globalMessage = "Hello from Global Scope";
$number1 = 10;
$number2 = 20;

// FUNCTION USING GLOBAL KEYWORD
function useGlobalKeyword()
{
    global $globalMessage;
    echo "Inside function (using global): $globalMessage <br>";
}

// FUNCTION USING $GLOBALS ARRAY
function useGlobalsArray()
{
    echo "Using \$GLOBALS array: ";
    echo $GLOBALS['number1'] + $GLOBALS['number2'];
    echo "<br>";
}

// LOCAL SCOPE
function localScopeExample()
{
    $localVar = "I exist only inside this function";
    echo "Local variable: $localVar <br>";
}

// STATIC VARIABLE
function counter()
{
    static $count = 0;
    echo "Static count: $count <br>";
    $count++;
}

// FUNCTION CALLS
useGlobalKeyword();
useGlobalsArray();
localScopeExample();

echo "<br>Calling static function multiple times:<br>";
counter();
counter();
counter();

// GLOBAL VARIABLE (outside function)
echo "<br>Outside function (global scope): $globalMessage <br>";
