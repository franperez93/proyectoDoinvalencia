<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // back_end_data_base_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'back_end_data_base_homepage');
            }

            return array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_end_data_base_homepage',);
        }

        if (0 === strpos($pathinfo, '/evento')) {
            // evento_index
            if (rtrim($pathinfo, '/') === '/evento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_evento_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'evento_index');
                }

                return array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\EventoController::indexAction',  '_route' => 'evento_index',);
            }
            not_evento_index:

            // evento_show
            if (preg_match('#^/evento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_evento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evento_show')), array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\EventoController::showAction',));
            }
            not_evento_show:

            // evento_new
            if ($pathinfo === '/evento/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_evento_new;
                }

                return array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\EventoController::newAction',  '_route' => 'evento_new',);
            }
            not_evento_new:

            // evento_edit
            if (preg_match('#^/evento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_evento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evento_edit')), array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\EventoController::editAction',));
            }
            not_evento_edit:

            // evento_delete
            if (preg_match('#^/evento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_evento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evento_delete')), array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\EventoController::deleteAction',));
            }
            not_evento_delete:

        }

        if (0 === strpos($pathinfo, '/participaciones')) {
            // participaciones_index
            if (rtrim($pathinfo, '/') === '/participaciones') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_participaciones_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'participaciones_index');
                }

                return array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\ParticipacionesController::indexAction',  '_route' => 'participaciones_index',);
            }
            not_participaciones_index:

            // participaciones_show
            if (preg_match('#^/participaciones/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_participaciones_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'participaciones_show')), array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\ParticipacionesController::showAction',));
            }
            not_participaciones_show:

            // participaciones_new
            if ($pathinfo === '/participaciones/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_participaciones_new;
                }

                return array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\ParticipacionesController::newAction',  '_route' => 'participaciones_new',);
            }
            not_participaciones_new:

            // participaciones_edit
            if (preg_match('#^/participaciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_participaciones_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'participaciones_edit')), array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\ParticipacionesController::editAction',));
            }
            not_participaciones_edit:

            // participaciones_delete
            if (preg_match('#^/participaciones/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_participaciones_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'participaciones_delete')), array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\ParticipacionesController::deleteAction',));
            }
            not_participaciones_delete:

        }

        if (0 === strpos($pathinfo, '/tipo_evento')) {
            // tipo_evento_index
            if (rtrim($pathinfo, '/') === '/tipo_evento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipo_evento_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipo_evento_index');
                }

                return array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\tipo_EventoController::indexAction',  '_route' => 'tipo_evento_index',);
            }
            not_tipo_evento_index:

            // tipo_evento_show
            if (preg_match('#^/tipo_evento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipo_evento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_evento_show')), array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\tipo_EventoController::showAction',));
            }
            not_tipo_evento_show:

            // tipo_evento_new
            if ($pathinfo === '/tipo_evento/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipo_evento_new;
                }

                return array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\tipo_EventoController::newAction',  '_route' => 'tipo_evento_new',);
            }
            not_tipo_evento_new:

            // tipo_evento_edit
            if (preg_match('#^/tipo_evento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipo_evento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_evento_edit')), array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\tipo_EventoController::editAction',));
            }
            not_tipo_evento_edit:

            // tipo_evento_delete
            if (preg_match('#^/tipo_evento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tipo_evento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_evento_delete')), array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\tipo_EventoController::deleteAction',));
            }
            not_tipo_evento_delete:

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_index
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_index');
                }

                return array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario_index',);
            }
            not_usuario_index:

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\UsuarioController::showAction',));
            }
            not_usuario_show:

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_new;
                }

                return array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }
            not_usuario_new:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\UsuarioController::editAction',));
            }
            not_usuario_edit:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'BackEnd\\DataBaseBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

        }

        // dawplantilla_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Daw\\plantillaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dawplantilla_homepage',);
        }

        // prueba_homepage
        if ($pathinfo === '/evento') {
            return array (  '_controller' => 'Daw\\plantillaBundle\\Controller\\DefaultController::eventoAction',  '_route' => 'prueba_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
