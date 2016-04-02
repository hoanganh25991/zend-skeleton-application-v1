<?php
return array(
    'view_manager' => array(
        'template_path_stack' => array(
           'coder' => __DIR__ . '/../view',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Coder\Controller\Index' => 'Coder\Controller\IndexController'
        )
    ), // This lines opens the configuration for the RouteManager
    'router' => array(
        // Open configuration for all possible routes
        'routes' => array(
            // Define a new route called "post"
            'post' => array(
                // Define the routes type to be "Zend\Mvc\Router\Http\Literal", which is basically just a string
                'type' => 'literal',
                'options' => array(
                    // Listen to "/coder" as uri
                    'route' => '/coder',
                    // Define default controller and action to be called when this route is matched
                    'defaults' => array(
                        'controller' => 'Coder\Controller\Index',
                        'action' => 'index',
                    )
                )
            )
        )
    )
);
