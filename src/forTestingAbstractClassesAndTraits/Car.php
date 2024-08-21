<?php

namespace forTestingAbstractClasseAndTraits;

use forTestingAbstractClasseAndTraits\CarAbstract;

class Car extends CarAbstract {
    
    public function getPrice()
    {
        return 4000;
    }
}