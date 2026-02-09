<?php

namespace Product;

abstract class AbstractProduct implements ProductInterface
{
    protected string $sku;
    protected float $price;

    // Encapsulation
    private int $stock;

    public function __construct(string $sku, float $price, int $stock)
    {
        $this->sku   = $sku;
        $this->price = $price;
        $this->stock = $stock;
    }

    // upcoming use
    // Internal stock control only
    protected function increaseStock(int $qty): void
    {
        if ($qty <= 0) {
            throw new \InvalidArgumentException('Invalid stock increase');
        }
        $this->stock += $qty;
    }

    protected function decreaseStock(int $qty): void
    {
        if ($qty <= 0 || $qty > $this->stock) {
            throw new \InvalidArgumentException('Invalid stock decrease');
        }
        $this->stock -= $qty;
    }

    protected function getStock(): int
    {
        return $this->stock;
    }
}
