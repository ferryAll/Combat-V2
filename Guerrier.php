<?php
class Guerrier extends Personnage {
  public function degatsPlus(Personnage $perso)
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
      else
      {
          $this->atout = 0;
      }
  }
// calcul des atouts
// augmentera les dégats par rapport de l'atout
// indique si le perso est frappé ou tué

}