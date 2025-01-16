<?php 

    include_once '../Data/Config/Connexion.php';

    class CrudModels
    {
        public $connexion;

        public function __construct()
        {
            $this->connexion = new Connexion();
        }

        // la fonction de la creation
        public function Create($tableName, $names)
        {
            $columns = implode(',',array_keys($names));
            $values = implode(',',array_values($names));
            $query = "INSERT INTO " . $tableName . "(" . $columns . ")" . "VALUES(" . $values . ")";
            
            $stmt = $this->connexion->connexion()->prepare($query);
            $stmt->execute();
        }

        // les fonctions de l'affichage
        public function FindAll($tableName, $finder)
        {
            $query = "SELECT * FROM " . $tableName ;
            $stmt = $this->connexion->connexion()->prepare($query);
            $stmt->execute();
            $row = $stmt->fetchAll();

            foreach($row as $value)
            {
                echo('<div style= "font-family: monospace" >' . $value[$finder] . '</div>' . '<br>');
            } 

        }

        public function DeleteWithId($tableName, $id)
        {
            $query = "DELETE FROM " . $tableName . " WHERE id = " . $id;
            $stmt = $this->connexion->connexion()->prepare($query);
            $stmt->execute();
            // var_dump($stmt);
        }

        
    }






    // $nn = new CrudModels();
    // $tableName = 'roles';
    // // // $names = ['nom' => "'Admin'", 'description' => "'This is admin'"];
    // $nn->FindAll($tableName);

?>