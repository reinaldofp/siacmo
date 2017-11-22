<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $table;
    public function __construct($table)
    {
        $this->table=$table;
    }


    public function indexAction()
    {
        $cliente = $this->table ->fetchAll();
        foreach ($clientes as $cliente){
            echo $cliente->getNome().'<br/>';
        }

        return new ViewModel();
    }
}
