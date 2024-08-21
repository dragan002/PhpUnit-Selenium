<?php

namespace forTestingAbstractClasseAndTraits;

trait TaxableTrait 
{
    public function calculateTax(float $rate): float
    {
        return $this->getPrice * ($rate / 100);
    }
}