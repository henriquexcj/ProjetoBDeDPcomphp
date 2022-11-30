<?php

namespace App\Model;

class Pessoa{

    public $none;
    public $tel;

    function __construct(string $nome, string $tel){
        echo "construtor de pessoa ta funfando";

        $this->nome = $nome;
        $this->tel = $tel;
    }

    
}

