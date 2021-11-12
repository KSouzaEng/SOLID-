<?php

// Interface definition
interface Area {
    public function makeCalc();
  }
  
  // Class definitions
  class Retangulo implements Area {
  
      private $base = 40;
      private $altura = 20;
    public function makeCalc() {
     echo $this->base * $this->altura;
    }
  }
  
  class Quadrado implements Area {
  
    private $l1 = 120;
     private $l2 = 20;
    public function makeCalc() {
         echo $this->l1 * $this->l2;
    }
  }
  
  
  
  // Create a list of animals
  $cat = new Retangulo();
  $dog = new Quadrado();
  $animals = array($cat, $dog);
  
  // Tell the animals to make a sound
  foreach($animals as $animal) {
    $animal->makeCalc();
  }