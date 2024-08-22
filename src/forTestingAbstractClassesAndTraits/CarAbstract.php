<?php

namespace forTestingAbstractClasseAndTraits;

abstract class CarAbstract {

    protected $model;
    protected $year;
    protected $name;
    protected $taxCalculator;

    public function __construct(string $model, int $carYear, TaxCalculator $taxCalculator)
    {
        $this->model = $model;
        $this->year = $carYear;
        $this->taxCalculator = $taxCalculator;
    }

    public function getName()
    {
        return $this->model;
    }

    abstract public function getPrice();

    public function showCarDetails() {
        return $this->model . ' has produced ' . $this->year . ' and brand new price is $' . $this->getPrice();
    }

    public function showTaxes(float $rate) {
        $tax = $this->taxCalculator->calculateTax($this->getPrice(), $rate);
        return "Regular tax on price of $" . $this->getPrice() . " is $" . $tax;
    }
}
