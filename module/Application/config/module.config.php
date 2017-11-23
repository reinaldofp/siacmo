<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/application[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'usuario' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/usuario[/:action]',
                    'defaults' => [
                        'controller' => Controller\UsuarioController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'disciplina' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/disciplina[/:action]',
                    'defaults' => [
                        'controller' => Controller\DisciplinaController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'lms' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/lms[/:action]',
                    'defaults' => [
                        'controller' => Controller\LmsController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'matricula' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/matricula[/:action]',
                    'defaults' => [
                        'controller' => Controller\MatriculaController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'perfil' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/perfil[/:action]',
                    'defaults' => [
                        'controller' => Controller\PerfilController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'projeto' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/projeto[/:action]',
                    'defaults' => [
                        'controller' => Controller\ProjetoController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'sala' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/sala[/:action]',
                    'defaults' => [
                        'controller' => Controller\SalaController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\UsuarioController::class => InvokableFactory::class,
            Controller\DisciplinaController::class => InvokableFactory::class,
            Controller\LmsController::class => InvokableFactory::class,
            Controller\MatriculaController::class => InvokableFactory::class,
            Controller\PerfilController::class => InvokableFactory::class,
            Controller\ProjetoController::class => InvokableFactory::class,
            Controller\SalaController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'secretaria/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
           __DIR__ . '/../view',
        ],
    ],
];
