<?php
class Magicien extends Personnage {
 public function lancerUnSort(Personnage $perso)
 {
     // la cible n'est pas celui qui lance le sort

     // le magicien doit obligatoirement avoir de la magie
     if ($this->_degats >= 0 && $this->degats <=25)
     {
         $this->atout = 4;
     }
     elseif ($this->_degats >= 25 && $this->degats <=50)
     {
         $this->atout = 3;
     }
     elseif ($this->_degats >= 50 && $this->degats <= 75)
     {
         $this->atout = 2;
     }
     elseif ($this->_degats >=75  && $this->degats <=90)
     {
         $this->atout = 1;
     }
     elseif ($this->_degats > 90)
     {
         $this->atout = 0;
     }
 }

}