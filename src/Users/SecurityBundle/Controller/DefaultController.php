<?php

namespace Users\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UsersSecurityBundle:Default:index.html.twig');
    }
}
