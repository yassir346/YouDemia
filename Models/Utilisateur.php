<?php

include 'Cour.php';
include 'Role.php';

class Utilisateur{
    private int $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $password;
    private string $phone;
    private Role $role;
    

    public function __construct(){}

    public function  __call($name, $arguments)
    {
            if($name == "creeUtilisateur"){
                if(count($arguments) == 1){
                    $this->id = $arguments[0];
                } 
                if(count($arguments) == 2){
                    $this->id = $arguments[0];
                    $this->nom = $arguments[1];
                } 
           
                if(count($arguments) == 3){
                    $this->id = $arguments[0];
                    $this->nom = $arguments[1];
                    $this->prenom = $arguments[2];
                } 
                if(count($arguments) == 4){
                    $this->id = $arguments[0];
                    $this->nom = $arguments[1];
                    $this->prenom = $arguments[2];
                    $this->email = $arguments[3];
                }
                if(count($arguments) == 5){
                    $this->id = $arguments[0];
                    $this->nom = $arguments[1];
                    $this->prenom = $arguments[2];
                    $this->email = $arguments[3];
                    $this->password = $arguments[4];
                }
                if(count($arguments) == 6){
                    $this->id = $arguments[0];
                    $this->nom = $arguments[1];
                    $this->prenom = $arguments[2];
                    $this->email = $arguments[3];
                    $this->password = $arguments[4];
                    $this->phone = $arguments[5];
                }
                if(count($arguments) == 7){
                    $this->id = $arguments[0];
                    $this->nom = $arguments[1];
                    $this->prenom = $arguments[2];
                    $this->email = $arguments[3];
                    $this->password = $arguments[4];
                    $this->phone = $arguments[5];
                    $this->role = $arguments[6];
                }
            }
        }

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
        $this->cours = $cours;
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
