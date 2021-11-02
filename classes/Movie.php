<?php
class Movie {
    private $titolo;
    private $genere;
    private $regista;
    private $durata;
    private $anno;

    function __construct($_titolo, $_genere, $_regista, $_durata, $_anno)
    {
      $this->titolo= $_titolo;
      $this->genere= $_genere;
      $this->regista= $_regista;
      $this->durata= $_durata;
      $this->anno= $_anno;
    }

    public function getTitolo(){
      return $this->titolo;
    }
    public function getGenere(){
      return $this->genere;
    }
    public function getRegista(){
      return $this->regista;
    }
    public function getDurata(){
      return $this->durata;
    }
    public function getAnno(){
      return $this->anno;
    }
}