<?php
/**
 * Created by PhpStorm.
 * User: reinaldo.pereira
 * Date: 20/11/2017
 * Time: 17:00
 */

namespace Application\Model;

use Zend\Db\TableGateway\TableGatewayInterface;

class ClienteTable{
    protected $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }
}