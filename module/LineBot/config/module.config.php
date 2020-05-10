<?php
namespace LineBot;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
	'router' => [
		'routes' => [
			'linebot' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/linebot',
                    'defaults' => [
                        'controller' => Controller\LineBotController::class,
                        'action'     => 'linebot',
                    ],
                ],
            ],
		],
	],
	'controllers' => [
		'factories' => [
            Controller\LineBotController::class => InvokableFactory::class,
        ],
	],
	'view_manager' => [
		'template_path_stack' => [
            __DIR__ . '/../view',
        ],
	],
];
