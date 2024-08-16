<?php

namespace forTestingAbstractClasseAndTraits;

use forTestingAbstractClasseAndTraits\PersonAbstract;


class Employee extends PersonAbstract
{
    public function getSalary()
    {
        return 6000;
    }
}