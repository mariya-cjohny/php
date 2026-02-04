<?php

class User
{

    use Describable;
    public string $name;

    //constants 
    public const MIN_AGE = 13;

    //property hooks 8.4
    // public string $name {
    //     get => strtoupper($this->name);
    //     set {
    //         // validation + normalization
    //         if ($value === '') {
    //             throw new InvalidArgumentException("Name cannot be empty");
    //         }

    //         $this->name = trim($value);
    //     }
    // }

    protected int $age;

    private string $password;

    public static int $userCount = 0;

    public readonly int $id;

    public ?string $email = null;

    public function __construct(
        int $id,
        string $name,
        int $age,
        string $password
    ) {
        $this->id = $id;

        $this->name = $name;
        $this->age = $age;
        $this->password = $password;

        // static property increment
        self::$userCount++;
        echo "User {$this->name} created. Total users: " . self::$userCount . "<br>";
    }

    // Destructor
    public function __destruct()
    {
        self::$userCount--;
        echo "User {$this->name} destroyed. Total users: " . self::$userCount . "<br>";
    }

    public function verifyPassword(string $input): bool
    {
        return $this->password === $input;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        if ($age < self::MIN_AGE) {
            throw new InvalidArgumentException("Age must be at least " . self::MIN_AGE);
        }
        $this->age = $age;
    }
}
