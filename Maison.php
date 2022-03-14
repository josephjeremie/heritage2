<?php

class Maison extends Batiment {

    private  $ascenseur; 
    private  $nbAppartement;
    private  $garage;

    public function getAscenseur() {

        return $this ->ascenseur;
    }
 public function getNbAppartement() {
        return $this ->nbAppartement;

    }
    public function getGarage() {

        return $this -> garage;
    }
}