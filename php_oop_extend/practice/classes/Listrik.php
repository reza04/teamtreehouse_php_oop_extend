<?php

include 'Montor.php';

class Listrik extends Montor  //Child Class
{
    public function tesproperti()
    {
        echo PHP_EOL.$this->merk;
        echo PHP_EOL.$this->Kecepatan;
    }
}
$menu= new Listrik("Biru");
$menu->KecepatanWarna();
echo PHP_EOL. $menu->Kecepatan;  //Global Class
$menu->tesproperti();
