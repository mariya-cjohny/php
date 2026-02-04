<?php
require_once 'AbstractOperation.php';

class AddOperation extends AbstractOperation
{
    public function calculate(float $a, float $b): float
    {
        return $a + $b;
    }
}
