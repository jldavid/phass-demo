<?php 

return array(
    'phass' => array(
        'applicationName' => "Phass Demo Application",
        'development' => true,
        'subscriptionController' => 'Application\Controller\GlassSubscriptions'
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\GlassSubscriptions' => 'Application\Controller\GlassSubscriptionController'
         )
    )
);
