<?php

class Entity
{
    public $nume;
    public $prenume;
    public $cnp;
    public $telefon;
    public $nrdep;
    public $preg;
    public $vechime;
    public $angajare;
    public $functie;
    
    
    function __construct($nume, $prenume, $cnp, $telefon, $nrdep, $preg, $vechime, $angajare, $functie) {
        $this->nume = $nume;
        $this->prenume = $prenume;
        $this->cnp = $cnp;
        $this->telefon = $telefon;
        $this->nrdep = $nrdep;
        $this->preg = $preg;
        $this->vechime = $vechime;
        $this->angajare = $angajare;
        $this->functie = $functie;
    }

}

?>
