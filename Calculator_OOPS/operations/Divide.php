<?php
require_once 'AbstractOperation.php';

class DivideOperation extends AbstractOperation
{
    public function calculate(float $a, float $b): float
    {
        if ($b == 0.0) {
            throw new DomainException("Division by zero is not allowed", 400);
        }
        return $a / $b;
    }
}
