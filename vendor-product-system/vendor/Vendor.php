<?php

namespace Vendor;

class Vendor extends AbstractVendor
{
    public function getDetails(): array
    {
        return [
            'vendorId'     => $this->vendorId,
            'name'         => $this->name,
            'contactEmail' => $this->contactEmail
        ];
    }
}
