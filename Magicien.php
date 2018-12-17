<?php
class Magicien extends Personnage {
    const CEST_MOI = 1; // Constante renvoyée par la méthode `frapper` si on se frappe soi-même.
    const PERSONNAGE_TOUCHE = 2; // Constante renvoyée par la méthode `frapper` si on a tué le personnage en le frappant.

}