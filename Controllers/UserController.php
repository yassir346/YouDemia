<?php
    include ("../Models/Utilisateur.php");
   class UserController
   {
    private Utilisateur $user;

    public function __construct()
    {
        $this->user = new Utilisateur();
    }

    public function Users()
    {
       $users=  $this->user->findusers('roles');
        var_dump($users);
    }

   }
?>