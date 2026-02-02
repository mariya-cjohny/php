<?php

declare(strict_types=1);

// include example
include_once "config.php"; // safe even if repeated

$age = 20;

// if / elseif / else
if ($age < 18) {
    echo "Minor\n";
} else {
    echo "Adult\n";
}

// alternative syntax
if ($age >= 18):
    echo "Eligible to vote\n";
endif;

// for loop
for ($i = 1; $i <= 3; $i++) {
    if ($i == 2) continue;
    echo "For: $i\n";
}

// while
$count = 1;
while ($count <= 2) {
    echo "While: $count\n";
    $count++;
}

// do-while
$x = 1;
do {
    echo "Do-while: $x\n";
    $x++;
} while ($x <= 1);

// foreach
$colors = ["Red", "Blue"];
foreach ($colors as $color) {
    echo $color . "\n";
}

// switch
$num = 1;
switch ($num) {
    case 1:
        echo "One\n";
        break;
    default:
        echo "Other\n";
}

// match
$result = match ($num) {
    1 => "Matched One",
    default => "No match"
};
echo $result . "\n";

// goto
goto end;

echo "Skipped";

end:
echo "End reached\n";

// return
function add(int $a, int $b): int
{
    return $a + $b;
}

echo add(2, 3);
