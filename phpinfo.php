<?php
phpinfo();

class MojeTestowe
{
    private $imie;
    function __construct($imie)
    {
        $this->imie = $imie;
    }

    function getImie() {
        return $this->imie;
    }
}

$ja = new MojeTestowe("Łukasz");
echo $ja->getImie();


