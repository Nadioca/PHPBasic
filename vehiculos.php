<?php

class Coche{

  protected $ruedas, $color, $motor, $nombre;

  function Coche($name){
    //método constructor
    $this->nombre = $name;
    $this->ruedas = 4;
    $this->color = "";
    $this->motor = "1600";
  }

  function arrancar(){
      echo "Estoy arrancando"."<br>";
  }

  function apagar(){
      echo "Apagando...</br>";
  }

  function getNombre(){
    return $this->nombre;
  }

  function pintar($col){
    $this->color = $col;
    return "".$this->nombre. " se ha pintado de: ". $this->color."<br>";
  }

  function getRuedas(){
    return $this->nombre . " tiene " . $this->ruedas. " ruedas";
  }

  function getMoror(){
    return "El motor tiene ".$this->motor . "cc";
  }

  function setRuedas($tires){
    $this->ruedas = $tires;
  }

}

class Moto extends Coche{

  function Moto($name){
    //método constructor
    $this->nombre = $name;
    $this->ruedas = 2;
    $this->color = "";
    $this->motor = "999";
  }

  function arrancar(){
    parent::arrancar();
    echo "La moto hace brum brum <br/>";
  }

}

class Camion extends Coche{

  function Camion($name){
    //método constructor
    $this->nombre = $name;
    $this->ruedas = 6;
    $this->color = "";
    $this->motor = "2600";
  }

}


 ?>
