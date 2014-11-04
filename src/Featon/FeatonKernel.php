<?php

namespace Featon;

class FeatonKernel extends Kernel
{
    public function getRoutes()
    {
        return array(
            ['GET', '/', 'Featon\Controller\IndexController:indexAction'],
            ['GET', '/Show', 'Featon\Controller\ShowController:showAction'],
        );
    }

    public function getTemplateHandler()
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../app/views');
        $twig = new \Twig_Environment($loader);

        return $twig;
    }
}
