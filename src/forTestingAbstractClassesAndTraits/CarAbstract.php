<?php

namespace forTestingAbstractClasseAndTraits;

abstract class CarAbstract {

    protected $model;
    protected $year;

    public function __construct(string $model, int $carYear)
    {
        $this->model = $model;
        $this->year = $carYear;
    }

    abstract public function getPrice();

    public function showCarDetails() {
        return $this->model . ' has produced ' . $this->year . ' and brand new price is $' . $this->getPrice();
    }
}