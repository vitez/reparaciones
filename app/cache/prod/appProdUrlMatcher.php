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

        // wixair_reparaciones_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wixair\\ReparacionesBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'wixair_reparaciones_default_index'));
        }

        if (0 === strpos($pathinfo, '/')) {
            // reparacion
            if (rtrim($pathinfo, '/') === '/reparacion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reparacion');
                }

                return array (  '_controller' => 'Wixair\\ReparacionesBundle\\Controller\\ReparacionController::indexAction',  '_route' => 'reparacion',);
            }

            // reparacion_show
            if (0 === strpos($pathinfo, '/reparacion') && preg_match('#^/reparacion/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wixair\\ReparacionesBundle\\Controller\\ReparacionController::showAction',)), array('_route' => 'reparacion_show'));
            }

            // reparacion_new
            if ($pathinfo === '/reparacion/new') {
                return array (  '_controller' => 'Wixair\\ReparacionesBundle\\Controller\\ReparacionController::newAction',  '_route' => 'reparacion_new',);
            }

            // reparacion_create
            if ($pathinfo === '/reparacion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reparacion_create;
                }

                return array (  '_controller' => 'Wixair\\ReparacionesBundle\\Controller\\ReparacionController::createAction',  '_route' => 'reparacion_create',);
            }
            not_reparacion_create:

            // reparacion_edit
            if (0 === strpos($pathinfo, '/reparacion') && preg_match('#^/reparacion/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wixair\\ReparacionesBundle\\Controller\\ReparacionController::editAction',)), array('_route' => 'reparacion_edit'));
            }

            // reparacion_update
            if (0 === strpos($pathinfo, '/reparacion') && preg_match('#^/reparacion/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reparacion_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wixair\\ReparacionesBundle\\Controller\\ReparacionController::updateAction',)), array('_route' => 'reparacion_update'));
            }
            not_reparacion_update:

            // reparacion_delete
            if (0 === strpos($pathinfo, '/reparacion') && preg_match('#^/reparacion/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reparacion_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Wixair\\ReparacionesBundle\\Controller\\ReparacionController::deleteAction',)), array('_route' => 'reparacion_delete'));
            }
            not_reparacion_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
