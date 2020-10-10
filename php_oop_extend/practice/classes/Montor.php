<?php

class Montor 
{
    public $Kecepatan="5"; //bisa diakses dari base,child dan global class
    private $Warna; //hanya bisa diakses dari base class
    protected $merk="honda"; //protectd bisa diakses dari base dan child class

    public function __construct($Warna) //base class
    {
        $this->Warna=$Warna;
    }

    public function KecepatanWarna()
    {
        echo $this->Warna;
    }

}

?>