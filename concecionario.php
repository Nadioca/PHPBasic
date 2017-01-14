<?php

    class Concecionario{

      protected $precio_base;

      function Concecionario($gama){

        if ($gama == "urbano"){
          $this->precio_base = 10000;
        } else if ($gama == "deportivo"){
          $this->precio_base = 20000;
        } else if ($gama == "furgoneta"){
          $this->precio_base = 30000;
        }
      }

      function precio_final(){
        return $this->precio_base;
      }

      function climatizador(){
        $this->precio_base+=2000;
      }

      function gps(){
        $this->precio_base+=3500;
      }

      function llantas_cromadas(){
        $this->precio_base+=5000;
      }

  }

 ?>
