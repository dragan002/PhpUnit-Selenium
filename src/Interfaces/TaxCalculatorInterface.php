<?php

namespace TaxCalculatorInterface;

interface TaxCalculatorInterface {
    public function calculateTax(float $price, float $rate): float;
}