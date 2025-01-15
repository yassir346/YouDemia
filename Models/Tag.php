<?php
include 'Etiquette.php';

class Tag extends Etiquette{
    
    public function __construct(){}

    public function __call($name, $arguments)
    {
        if($name == "creeTag")
        {
            if(count($arguments) == 1)
            {
                $this->id = $arguments[0];
            }

            if(count($arguments) == 2)
            {
                $this->id = $arguments[0];
                $this->nom = $arguments[1];
            }

            if(count($arguments) == 3)
            {
                $this->id = $arguments[0];
                $this->nom = $arguments[1];
                $this->description = $arguments[2];
            }

            if(count($arguments) == 4)
            {
                $this->id = $arguments[0];
                $this->nom = $arguments[1];
                $this->description = $arguments[2];
                $this->logo = $arguments[3];
            }
        }
    }

    public function toString()
    {
        return parent::toString();
    }
}