<?php

namespace Utilities\ConfigurationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UtilitiesConfigurationBundle:Default:index.html.twig');
    }
}
