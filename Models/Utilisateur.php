<?php

class Utilisateur{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $phone;
    private $cours = [];
    private Role $role;
    

    public function __construct(){}

    public function setId($id){
        $this->id = $id;
    }

    public function setNom(string $nom){
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function setPassword(string $password){
        $this->password = $password;
    }

    public function setPhone(string $phone){
        $this->phone = $phone;
    }

    public function setCours(array $cours){
        $this->cours = new Cours();
    }

    public function setRole($role){
        $this->role = $role;
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getCours(){
        return $this->cours;
    }

    public function getRole(){
        return $this->role;
    }


    public function __toString()
    {
        return "Id: " . $this->id . "Nom: " . $this->nom . "Prenom: " . $this->prenom . "Email: " . $this->email . "Password: " . $this->password . "Phone: " .$this->phone . "Cours: [" .implode("," $this->cours) . "]g" . "Role: " . $this->role; 
    }
}

$user = new Utilisateur();
$user->setRole("dfghjk");














?>
