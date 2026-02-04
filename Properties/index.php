<?php

require_once 'autoload.php';

// User object
$user = new User(
    id: 1,
    name: "Alice",
    age: 23,
    password: "user123"
);

// Admin object
$admin = new Admin(
    id: 2,
    name: "Bob",
    age: 28,
    password: "admin123"
);

echo $user->name;
echo "<br>";
echo $user->id;
echo "<br>";

$user->email = "alice@test.com";

echo User::$userCount;
echo "<br>";
var_dump($user->verifyPassword("user123"));
echo "<br>";
var_dump($admin->isAdult());
echo "<br>";
echo $user->describe();
echo "<br>";
echo $admin->describe();
echo "<br>";
unset($user);
unset($admin);
