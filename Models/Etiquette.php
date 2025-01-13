<?php


class Etiquette{
    private $id;
    private $nom;
    private $description;
    private $logo;

    public function __construct(){}

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
    }


}