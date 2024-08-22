<?php

namespace forTestingAbstractClasseAndTraits;

use TaxCalculatorInterface\TaxCalculatorInterface;

class TaxCalculator implements TaxCalculatorInterface {
    public function calculateTax(float $price, float $rate): float {
        return $price * ($rate / 100);
    }
}