<?php

namespace forTestingAbstractClasseAndTraits;

trait MyTrait {
    
    public function traitMethod($number)
    {
        return $number + 10;
    }
}