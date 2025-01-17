<?php

trait CustomAssertionTrait 
{
    public function assertArrayData( array $array) 
    {
        foreach(['nick', 'email', 'age'] as $key)
        {
            $this->assertArrayHasKey($key, $array, "Array doesn't contain the $key key");
        }

        $this->assertIsString($array['nick'], 'Nick field must be a string');

        $this->assertMatchesRegularExpression('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $array['email'], 'Email field must be a valid email');

        $this->assertIsInt($array['age'], "Age field must be type of int");
    }
}