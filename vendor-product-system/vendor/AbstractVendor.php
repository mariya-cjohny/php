<?php

namespace Vendor;

abstract class AbstractVendor implements VendorInterface
{
    protected string $vendorId;
    protected string $name;
    protected string $contactEmail;

    public function __construct(string $vendorId, string $name, string $contactEmail)
    {
        $this->vendorId     = $vendorId;
        $this->name         = $name;
        $this->contactEmail = $contactEmail;
    }
}
