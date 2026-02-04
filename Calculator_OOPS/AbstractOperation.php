<?php
require_once 'OperationInterface.php';

abstract class AbstractOperation implements OperationInterface
{
    abstract public function calculate(float $a, float $b): float;
}
