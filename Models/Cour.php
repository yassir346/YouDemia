<?php

include 'Tags.php';
include 'Categories.php';
include 'Enseignant.php';
include 'Etudiant.php';

class Cour{
    private int $id;
    private string $titre;
    private string $description;
    private $tags = [];
    private Categories $categorie;
    private Enseignant $enseignant;
    private $Etudiant = [];

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