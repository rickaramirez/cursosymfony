<?php

namespace Users\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    public function loginAction()
    {
        return $this->render('UsersSecurityBundle:Security:login.html.twig', array(
            // ...
        ));
    }

}
