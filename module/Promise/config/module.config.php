<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'promise-controller-index' => 'Promise\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'promise-index' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/promise',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
//                        '__NAMESPACE__' => 'ZendSkeletonModule\Controller',
                        'controller'    => 'promise-controller-index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Promise',
                'route' => 'promise-index',
                'lastmod' => '2014-08-03',
                'changefreq' => 'monthly',
                'priority' => '1.0',
                'order' => '20',
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Promise' => __DIR__ . '/../view',
        ),
    ),
);
