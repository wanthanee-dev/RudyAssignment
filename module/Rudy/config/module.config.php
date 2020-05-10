<?php
namespace Rudy;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
	'router' => [
		'routes' => [
			'rudy' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\RudyController::class,
                        'action'     => 'rudy',
                    ],
                ],
            ],
            'action' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '[/:action]',
                    'defaults' => [
                        'controller' => Controller\RudyController::class,
                        'action'     => '[a-zA-Z][a-zA-Z0-9]*',
                    ],
                ],
            ],
            'ajax' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/ajax',
                    'defaults' => [
                        'controller' => Controller\RudyController::class,
                        'action'     => 'placeapiajax',
                    ],
                ],
            ],
		],
	],
	'controllers' => [
		'factories' => [
            Controller\RudyController::class => InvokableFactory::class,
        ],
	],
	'view_manager' => [
		'template_path_stack' => [
            __DIR__ . '/../view',
        ],
	],
	'strategies' => [
        'ViewJsonStrategy',
    ],
];
?>