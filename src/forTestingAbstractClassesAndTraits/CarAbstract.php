<?php

namespace forTestingAbstractClasseAndTraits;

abstract class CarAbstract {

    use TaxableTrait;

    protected $model;
    protected $year;
    protected $name;

    public function __construct(string $model, int $carYear)
    {
        $this->model = $model;
        $this->year = $carYear;
    }

    public function getName()
    {
        return $this->model;
    }

    abstract public function getPrice();

    public function showCarDetails() {
        return $this->model . ' has produced ' . $this->year . ' and brand new price is $' . $this->getPrice();
    }

    // public function showTaxes() {
    //     return "Regular tax on price of $4000" . $this->getPrice() . " is 2%";
    // }

    public function showTaxes(float $rate)
    {
        $tax = $this->calculateTax($rate);
        return "Regular tax on price of $" . $this->getPrice() . " is $" . $tax;
    }
}