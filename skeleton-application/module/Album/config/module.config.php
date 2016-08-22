<?php
/**
 * Created by PhpStorm.
 * User: hlbinamyslenia
 * Date: 8/22/16
 * Time: 4:44 PM
 */

namespace Album;

use Zend\Router\Http\Segment;

return [
// And remove the entire "controllers" section here:
//	    'controllers' => [
//		'factories' => [
//			Controller\AlbumController::class => InvokableFactory::class,
//		],
//	],

	// The following section is new and should be added to your file:
	'router' => [
		'routes' => [
			'album' => [
				'type'    => Segment::class,
				'options' => [
					'route' => '/album[/:action[/:id]]',
					'constraints' => [
						'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
						'id'     => '[0-9]+',
					],
					'defaults' => [
						'controller' => Controller\AlbumController::class,
						'action'     => 'index',
					],
				],
			],
		],
	],

	'view_manager' => [
		'template_path_stack' => [
			'album' => __DIR__ . '/../view',
		],
	],
];