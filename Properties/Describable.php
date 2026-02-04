<?php

trait Describable
{
    public function describe(): string
    {
        return get_class($this) . " – Name: {$this->name}, ID: {$this->id}";
    }
}
