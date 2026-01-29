<?php
// Base variable
$animal = "cat";

// Variable variable
$$animal = "tiger";

echo "\$animal = $animal <br>";  // prints: cat
echo "\$cat = " . $cat . "<br>"; // prints: tiger
