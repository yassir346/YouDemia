<?php

    class Connexion
    {
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $database = 'youdemia';

        public function connexion()
        {
            try
            {
               return $connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=UTF8",$this->user,$this->password); 
            //    echo 'success';  
            } catch (PDOException $e)
            {
                die("Connection failed: " . $e->getMessage());
            }

        }
    }

    $connexion = new Connexion();
    $connexion->connexion();

?>