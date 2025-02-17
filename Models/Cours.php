<?php

include 'Tags.php';
include 'Categories.php';
include 'Enseignant.php';
include 'Etudiant.php';

class Cours{
    private int $id;
    private string $titre;
    private string $description;
    private $tags = [];
    private Categories $categorie;
    private Enseignant $enseignant;
    private $Etudiant = [];

    public function __construct(){}

    public function __call($name, $arguments) {
        if($name == "creeCours"){
            if(count($arguments) == 2){
                $this->titre = $arguments[0];
                $this->description = $arguments[1];
            } 
            if(count($arguments) == 3){
                $this->id = $arguments[0];

                $this->titre = $arguments[1];
                $this->description = $arguments[2];
            } 
            if(count($arguments) == 8){
        $this->id = $arguments[0];
        $this->titre = $arguments[1];
        $this->description =$arguments[2];
        $this->contenue =$arguments[3];
        $this->categorie =$arguments[4];

        $this->etudiants = $arguments[5];

        $this->tags = $arguments[6];

        $this->photo = $arguments[7];
                 } 
        }
    }

    public function getId(){
        return $this->id;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getTags(){
        return $this->tags;
    }

    public function getCategorie(){
        return $this->categorie;
    }

    public function getEnseignant(){
        return $this->enseignant;
    }

    public function getEtudiant(){
        return $this->etudiant;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function setTags($tags){
        $this->tags = $tags;
    }

    public function setCategorie($categorie){
        $this->categorie = $categorie;
    }

    public function setEnseignant($enseignant){
        $this->enseignant = $enseignant;
    }

    public function setEtudiant($etudiant){
        $this->etudiant = $etudiant;
    }

    public function __toString(){
        return "Id: " . $this->id . "Titre: " . $this->titre . "Description: " . $this->description . "Tags: " . $this->tags . "Categorie: " . $this->categorie . "Enseignant: " . $this->enseignant . "Etudiant: " . $this->etudiant . " ";
        }
}