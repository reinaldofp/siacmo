<?php
/**
 * Created by PhpStorm.
 * User: reinaldo.pereira
 * Date: 20/11/2017
 * Time: 17:00
 */

namespace Application\Model;

class Cliente
{

    protected $id;
    protected $nome;

    public function exchangeArray(array $data)
    {
        $this->id = $data['$id'];
        $this->nome = $data['nome'];
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }

}