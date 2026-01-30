<?php

//Defining constants using define()
define("SITE_NAME", "My First Website");
define("MAX_USERS", 100);

// Defining constants using const
const PI = 3.14;

// Using constants
echo SITE_NAME;
echo "<br>";

echo MAX_USERS;
echo "<br>";

echo PI;
echo "<br><br>";

// Getting constant value dynamically using constant()
$constName = "SITE_NAME";
echo constant($constName);
echo "<br><br>";

// Magic constants
echo "Line number: " . __LINE__;
echo "<br>";

echo "File path: " . __FILE__;
echo "<br><br>";

// Constants are GLOBAL (usable inside functions)
function showInfo()
{
    echo SITE_NAME;
    echo "<br>";
    echo PI;
}

showInfo();
