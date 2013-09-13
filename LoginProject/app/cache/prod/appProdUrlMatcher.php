<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // login_login_homepage
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'login_login_homepage',);
        }

        // login_login_signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::signupAction',  '_route' => 'login_login_signup',);
        }

        // login_login_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'login_login_logout',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
