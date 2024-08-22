<?php

namespace forTestingAbstractClasseAndTraits;

use forTestingAbstractClasseAndTraits\CarAbstract;
use TaxCalculatorInterface\TaxCalculatorInterface;

class Car extends CarAbstract  {
    
    protected $taxCalculate;

    public function __construct(string $model, int $carYear, TaxCalculatorInterface $taxCalculator)
    {
        parent::__construct($model, $carYear, $taxCalculator);
    }

    public function getPrice() {
        return 100;
    }
}