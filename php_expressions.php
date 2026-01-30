<?php
function twice($n)
{
    return $n * 2;
}

$a = 10;              // simple expression
$b = $a + 5;          // expression adding
$c = twice($b);       // function call expression
$isBig = ($c > 30) ? "Yes" : "No";  // ternary

echo $c;
echo "<br>";
echo $isBig;
