<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\AdapterInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    const VERSION = '3.0.3-dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getServiceConfig()
    {
        return[
            'factories'=>[
                Model\ClienteTable::class => function($container)
                {
                    $tableGateway = $container->get(Model\ClienteTableGateway::class);
                    return new Model\ClienteTable($tableGateway);
                },
                Model\ClienteTableGateway::class => function($container)
                {
                    $adapter = $container->get(AdapterInterface::class);
                    $resultsetPrototype = new ResultSet();
                    $resultsetPrototype->setArrayObjectPrototype(new Model\Cliente);
                    return new TableGateway('cliente', $adapter,null,$resultsetPrototype);
                }
            ]
        ];
    }
    public function getControllerConfig()
    {
        return[
            'factories'=>[
                Controller\IndexController::class => function($container){
                    return new Controller\IndexController(
                        $container->get(Model\ClienteTable::class)
                    );
                }
            ]
        ];
    }
}
