<?php

declare(strict_types=0); // allow type juggling

// 1. ENUMERATION
enum Status
{
    case ACTIVE;
    case INACTIVE;
}

// 2. CLASS (for relative types)
class User
{
    public function getName(): string
    {
        return "Mariya";
    }

    // 3. VOID (returns nothing)
    public function sayHello(): void
    {
        echo "Hello from User<br>";
    }

    // 4. NEVER (this function never finishes normally)
    public function stopApp(): never
    {
        exit("App stopped<br>");
    }

    // 5. RELATIVE TYPE (self)
    public static function create(): self
    {
        return new self();
    }
}

// 6. MIXED
function showValue(mixed $value)
{
    var_dump($value);
}

// 7. TYPE DECLARATION + TYPE JUGGLING
function add(int $a, int $b): int
{
    return $a + $b;
}


// Enum usage
$currentStatus = Status::ACTIVE;
echo "Status is ACTIVE<br>";

// Object & relative type
$user = User::create();
echo $user->getName() . "<br>";
$user->sayHello();

// mixed
showValue(10);
showValue("PHP");
echo "<br>";

// type juggling (string becomes int)
echo add("5", 10) . "<br>";

// singleton types
$isLoggedIn = true;
$nothing = null;

var_dump($isLoggedIn);
var_dump($nothing);

// never (uncomment to test)
// $user->stopApp();
