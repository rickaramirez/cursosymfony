<?php

namespace Utilities\ConfigurationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConfigurationControllerController extends Controller 
{
    protected $permissions = array (
        'ROLES' =>
        array(
            "ROLE_ADMIN" =>
                array ("NEW" => true,
                    "EDIT" => true,
                    "DELETE" => false),
            "ROLE_SUPER_ADMIN" =>
                array ("NEW" => true,
                    "EDIT" => true,
                    "DELETE" => false)
        )
    );
}
