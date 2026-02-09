<?php

namespace Product;

class Product extends AbstractProduct
{
    public function getDetails(): array
    {
        return [
            'sku'   => $this->sku,
            'price' => $this->price,
            'stock' => $this->getStock()
        ];
    }
}
