<?php

namespace Users\UserBundle\Entity;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as Controller;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Symfony\Component\HttpFoundation\Request;

class UserProvider implements UserProviderInterface {

    protected $doctrine;

    public function __construct($doctrine, Container $container = null) {
        $this->doctrine = $doctrine;
        $this->container = $container;
    }

    public function loadUserByUsername($username = "none") {
        if ($username == "" || $username == "*") {
            $username = "_none_username";
            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
        }
        $request = Request::createFromGlobals();
        $_username = $request->get('_username');
        $_password = $request->get('_password');
        $repository = $this->doctrine->getRepository('UsersUserBundle:User');
        $user_result = $repository->findOneBy(array(
            'username' => $_username, 'password' => $_password
        ));
        if (!$user_result)
            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
        else {
            $roles = $user_result->getRoles();
            $user = new User($user_result->getUsername(), $user_result->getPassword(), "salt", $roles[0], $user_result->getEmail());
            $user->setData($user_result);
            return $user;
        }
    }

    public function refreshUser(UserInterface $user) {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $user;
    }

    public function supportsClass($class) {
        return $class === 'Users\UserBundle\Entity\User';
    }

}
