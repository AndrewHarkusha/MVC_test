<?php

namespace Featon\Controller;

use Vit\Model\Show;
use Symfony\Component\HttpFoundation\Response;

class ShowController extends AbstractController
{
    /**
     * @return Response
     */
    public function showAction()
    {
        return new Response($this->twig->render('show.html.twig', ['show' => Show::show()]));
    }
}
