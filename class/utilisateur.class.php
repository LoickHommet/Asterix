<?php

abstract class Utilisateur
{
    protected $user_name;
    protected $user_region;
    protected $prix_abo;
    protected $user_pass;
    public const ABONNEMENT = 15;
    public function __destruct()
    {
        //Du code à exécuter}
    }

    abstract public function setPrixAbo();
 
    public function getNom()
        {
            echo $this->user_name;
        }
        public function getPrixAbo()
        {
            echo $this->prix_abo;
        }
}





/*class Utilisateur{
    private $name;
    private $pass;

public function __construct($n, $p)
    {
        $this->name = $n;
        $this->pass = $p;
        }
public function getNom(){
        return $this->name;
         }
     }*/
?>