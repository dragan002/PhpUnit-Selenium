<?php

class Calculator {


    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply ($a, $b)
    {
        return $a * $b;
    }

    public function divide ($a, $b) 
    {
        if($a == 0 || $b == 0) {
            throw new InvalidArgumentException('Dividing by 0 is always 0');
        }
        return $a / $b;
    }

    public function power($a) {
        return $a * $a;
    }
}