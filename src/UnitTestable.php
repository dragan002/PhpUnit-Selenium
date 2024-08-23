<?php

class UnitTestable {

protected $data_source;
protected $random_number;

public function __construct(DataSource $datasource)
{
    $this->data_source = $datasource;
}

public function setRandomNumber($random_number)
{
    $this->random_number = $random_number;
}


public function getRandomQoute()
{
    $body = 'Today the quote from ';

    $random = $this->random_number;
    if($random == 0) $body .= 'one the famous physicist '.$person='Albert Einstein';
    elseif($random == 1) $body .= 'head of the Catholic Church and sovereign of the Vatican City '.$person='Pope John Paul II';
    elseif($random == 2) $body .= 'the co-founder of Microsoft Corporation '.$person='Bill Gates';

    $quotes = $this->data_source;
    $quote = $quotes->fetchQuote($person);

    return $body.': '.$quote;
}

}

// example usage:
$obj = new UnitTestable( (new DataSource()) );
$obj->setRandomNumber( (new RandomNumber())->getRandomNumber(0,2) );
echo $obj->getRandomQoute();