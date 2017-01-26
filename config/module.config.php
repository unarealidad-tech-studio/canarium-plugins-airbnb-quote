<?php
return array(

    'controllers' => array(
        'invokables' => array(
            'CanariumAirbnbQuote\Index' => 'CanariumAirbnbQuote\Controller\IndexController',
        ),
    ),

    'bjyauthorize' => array(
        'guards' => array(
            'BjyAuthorize\Guard\Controller' => array(
                array('controller' => 'CanariumAirbnbQuote\Index', 'roles' => array('guest', 'admin', 'user')),
            ),
        ),
    ),

    'router' => array(
        'routes' => array(
            'airbnbquote' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/airbnb-quote[/:action[/:id]]',
                    'defaults' => array(
                        'controller' => 'CanariumAirbnbQuote\Index',
                        'action' => 'index',
                    ),
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                ),
                'may_terminate' => true,
            ),

        ),
    ),

    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
        'template_map' => array(
            'widget/booking' => __DIR__ . '/../view/canarium-airbnb-quote/widget/show_booking_widget.phtml'
        )
    )

);