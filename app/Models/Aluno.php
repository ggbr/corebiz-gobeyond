<?php

namespace App\Models;


class Aluno 
{
    protected $name = "Gabriel";

    protected $idadeInicial = 0;

    protected $status = 0;


   
    public function getName(){
        return $this->name;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getStatus(){
        return $this->status;
    }
}
