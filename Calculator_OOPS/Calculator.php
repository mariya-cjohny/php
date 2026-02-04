<?php
require_once 'operations/Add.php';
require_once 'operations/Subtract.php';
require_once 'operations/Multiply.php';
require_once 'operations/Divide.php';

class Calculator
{
    private array $operations;

    public function __construct()
    {
        $this->operations = [
            'add' => new AddOperation(),
            'subtract' => new SubtractOperation(),
            'multiply' => new MultiplyOperation(),
            'divide' => new DivideOperation()
        ];
    }

    public function calculate(string $operation, float $a, float $b): float
    {
        if (!isset($this->operations[$operation])) {
            throw new InvalidArgumentException("Invalid operation", 400);
        }

        return $this->operations[$operation]->calculate($a, $b); // polymorphism
    }

    public function validate(array $data): array
    {
        if (!isset($data['num1'], $data['num2'], $data['operation'])) {
            throw new InvalidArgumentException("num1, num2, and operation are required", 400);
        }

        $num1 = trim($data['num1']);
        $num2 = trim($data['num2']);
        $operation = trim($data['operation']);

        if ($num1 === "" || $num2 === "" || $operation === "") {
            throw new InvalidArgumentException("Values cannot be empty", 400);
        }

        if (!is_numeric($num1) || !is_numeric($num2)) {
            throw new InvalidArgumentException("Numbers must be numeric", 400);
        }

        return [(float)$num1, (float)$num2, $operation];
    }
}
