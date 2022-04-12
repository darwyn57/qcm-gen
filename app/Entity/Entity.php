<?php

abstract class Entity
{
    public function hydrate(array $data)//Permet de passer d'un tableau associatif à un objet
    {
        foreach($data as $key => $value)
        {
            $key = explode('_',$key);  //Ici nous vérifions la première lettre de chaque mot afin de mettre cette dernière en majuscule (d'abord dans le cas ou il n'y qu'un seul ensuite nous faisons une condition pour gérer ceci automatiquement)
            $method = count($key) == 1 ? "set" . ucfirst($key[0]) : "set";

            if(count($key) > 1){
                foreach($key as $k => $v){
                    $method .= ucfirst($v);
                }
            }
            //Le commentaire du dessus nous permet ensuite de faire appel a des méthodes set en fonction du nom de la clé du tableau associatif (les propriétés de notre objet et le nom de clé doivent être similaire)
            if(method_exists($this, $method)){
                $this->$method($value);
            }

            $this->$method($value);
        }

        return $this;
    }
}