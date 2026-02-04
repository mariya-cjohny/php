<?php

class Admin extends User

{
    use Describable;
    public function isAdult(): bool
    {
        return $this->getAge() >= parent::MIN_AGE;
    }
}
