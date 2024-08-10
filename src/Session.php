<?php

class Session implements SessionInterface {

    public function open()
    {
        echo "real opening session";
    }

    public function close()
    {
        echo "real closing session";
    }

    public function write(string $product): void
    {
        echo "real writing to the session" . $product;
    }
}