<?php

/* DawplantillaBundle:Default:evento.html.twig */
class __TwigTemplate_e9d9b46293b3cc611e38b7aa5bf83b32b52e2df69b17ec9c59f5d75cedbe9622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DawplantillaBundle:Default:evento.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59d29e6d55bfb6cf09138b6efe3523726e26824529c2058f59cb57b4523a2c1b = $this->env->getExtension("native_profiler");
        $__internal_59d29e6d55bfb6cf09138b6efe3523726e26824529c2058f59cb57b4523a2c1b->enter($__internal_59d29e6d55bfb6cf09138b6efe3523726e26824529c2058f59cb57b4523a2c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DawplantillaBundle:Default:evento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59d29e6d55bfb6cf09138b6efe3523726e26824529c2058f59cb57b4523a2c1b->leave($__internal_59d29e6d55bfb6cf09138b6efe3523726e26824529c2058f59cb57b4523a2c1b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f50563b3090db092c63919a84768d1402c836be852bda9a8190662281f34b1da = $this->env->getExtension("native_profiler");
        $__internal_f50563b3090db092c63919a84768d1402c836be852bda9a8190662281f34b1da->enter($__internal_f50563b3090db092c63919a84768d1402c836be852bda9a8190662281f34b1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pagina principal de DoInValencia";
        
        $__internal_f50563b3090db092c63919a84768d1402c836be852bda9a8190662281f34b1da->leave($__internal_f50563b3090db092c63919a84768d1402c836be852bda9a8190662281f34b1da_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_494f1e62d21e3f5ff216e07f89b6ef5608c1493c1e9557ea43dab00e6d82b0d6 = $this->env->getExtension("native_profiler");
        $__internal_494f1e62d21e3f5ff216e07f89b6ef5608c1493c1e9557ea43dab00e6d82b0d6->enter($__internal_494f1e62d21e3f5ff216e07f89b6ef5608c1493c1e9557ea43dab00e6d82b0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" />";
        
        $__internal_494f1e62d21e3f5ff216e07f89b6ef5608c1493c1e9557ea43dab00e6d82b0d6->leave($__internal_494f1e62d21e3f5ff216e07f89b6ef5608c1493c1e9557ea43dab00e6d82b0d6_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3988041584d09666b0950c9e84d9b84fdbb1703da2b98803170a7018620b72ab = $this->env->getExtension("native_profiler");
        $__internal_3988041584d09666b0950c9e84d9b84fdbb1703da2b98803170a7018620b72ab->enter($__internal_3988041584d09666b0950c9e84d9b84fdbb1703da2b98803170a7018620b72ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <section class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"carousel slide\" id=\"home-carousel\" data-ride=\"carousel\">
                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/pruebas/image1.jpg"), "html", null, true);
        echo "\" alt=\"image1\" />
                        </div>
                        <div class=\"item\"> 
                            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/pruebas/image2.jpg"), "html", null, true);
        echo "\" alt=\"image2\" />
                            <div class=\"carousel-caption\">
                              <h3>Chania</h3>
                              <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                            </div>
                        </div>
                        <div class=\"item\">
                            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/pruebas/image3.jpg"), "html", null, true);
        echo "\" alt=\"image3\" />
                        </div>
                        <div class=\"item\">  
                            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/pruebas/image4.jpg"), "html", null, true);
        echo "\" alt=\"image4\" />
                        </div>
                    </div>
                    <a class=\"carousel-control left\" href=\"#home-carousel\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></a>
                    <a class=\"carousel-control right\" href=\"#home-carousel\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></a>
                </div>
            </div>    
        </div>
    </section>
    
    <section class=\"main container\">
        <div class=\"row\">
            <!--Seccion principal-->
            <section class=\"posts col-md-9\">
                <div class=\"indice\">
                    <ol class=\"breadcrumb\">
                        <!--son referencias de ejemplo.. en este caso solo estaria inicio ya que estamos en la principal-->
                        <li><a href=\"#\">Inicio</a></li>
                        <li class=\"active\">Eventos</li>
                    </ol>
                </div>
                <!-- Articulo 1-->
                <article class=\"post clearfix\">
                    <a href=\"#\" class=\"thumb pull-left\">
                        <img class=\"img-thumbnail imagen\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/pruebas/bootstrap.png"), "html", null, true);
        echo "\"></img>
                    </a>
                    <h2 class=\"post-tittle\">
                        <a href=\"#\">Titulo de ejemplo</a>
                    </h2>
                    <p class=\"post-contenido text-justify\">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                        cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
                        galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    </p>
                    <p align=\"right\"><span class=\"fecha\">14 de Enero de 2016</span> por <span class=\"post-autor\"><a href=\"#\">Fran Perez</a></span></p><br>
                    <div class=\"contenedor-botones\">
                        <a href=\"#\" class=\"btn btn-success\">Comentar <span class=\"badge\">10</span></a>
                    </div>
                </article>
                 <!-- Articulo 2-->
                <article class=\"post clearfix\">
                    <a href=\"#\" class=\"thumb pull-left\">
                        <img class=\"img-thumbnail imagen\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/pruebas/html.png"), "html", null, true);
        echo "\"></img>
                    </a>
                    <h2 class=\"post-tittle\">
                        <a href=\"#\">Titulo de ejemplo 2</a>
                    </h2>
                    <p class=\"post-contenido text-justify\">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                        cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
                        galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    </p>
                    <p align=\"right\"><span class=\"fecha\">13 de Enero de 2016</span> por <span class=\"post-autor\"><a href=\"#\">Fran Perez</a></span></p>
                    <div class=\"contenedor-botones\">
                        <a href=\"#\" class=\"btn btn-success\">Comentar <span class=\"badge\">20</span></a>
                    </div>
                </article>
                <!--Barra de paginacion-->
                <nav>
                    <div clas=\"center-block\">
                        <ul class=\"pagination\">
                            <li class=\"disabled\"><a href=\"#\">&laquo;<span class=\"sr-only\">Anterior</span></a></li>
                            <li class=\"active\"><a href=\"#\">1</a></li>
                            <li><a href=\"#\">2</a></li>
                            <li><a href=\"#\">3</a></li>
                            <li><a href=\"#\">4</a></li>
                            <li><a href=\"#\">5</a></li>
                            <li><a href=\"#\">&raquo;<span class=\"sr-only\">Siguiente</span></a></li>
                        </ul>
                    </div>  
                </nav>
            </section>
            <!--Seccion secundaria Barra lateral-->
            <aside class=\"col-md-3 hidden-xd hidden-sm\">
                <h4>Clase</h4>
                <div class==\"list-group\">
                    <a href=\"#\" class=\"list-group-item active\">Fran</a>
                    <a href=\"#\" class=\"list-group-item\">Emilio</a>
                    <a href=\"#\" class=\"list-group-item\">Victor</a>
                    <a href=\"#\" class=\"list-group-item\">Raul cabron</a>
                    <a href=\"#\" class=\"list-group-item\">Josep maricon</a>
                </div>
                
                <h4>Articulos recientes</h4>
                <a href=\"#\" class=\"list-group-item\">
                    <h4 class=\"list-group-item-heading\">Titulo de ejemplo</h4>
                    <p class=\"list-group-item-text\">como hacer un artiuclo de ejemplo</p>
                </a>
                <a href=\"#\" class=\"list-group-item\">
                    <h4 class=\"list-group-item-heading\">Titulo de ejemplo 2</h4>
                    <p class=\"list-group-item-text\">como hacer un artiuclo de ejemplo 2</p>
                </a>
            </aside>
        </div>
    </section>
";
        
        $__internal_3988041584d09666b0950c9e84d9b84fdbb1703da2b98803170a7018620b72ab->leave($__internal_3988041584d09666b0950c9e84d9b84fdbb1703da2b98803170a7018620b72ab_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_473f2c23254f8d35813d231b1226e6d5b758f49fd56271015fbbeeb767f2d43e = $this->env->getExtension("native_profiler");
        $__internal_473f2c23254f8d35813d231b1226e6d5b758f49fd56271015fbbeeb767f2d43e->enter($__internal_473f2c23254f8d35813d231b1226e6d5b758f49fd56271015fbbeeb767f2d43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_473f2c23254f8d35813d231b1226e6d5b758f49fd56271015fbbeeb767f2d43e->leave($__internal_473f2c23254f8d35813d231b1226e6d5b758f49fd56271015fbbeeb767f2d43e_prof);

    }

    public function getTemplateName()
    {
        return "DawplantillaBundle:Default:evento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 127,  149 => 70,  127 => 51,  100 => 27,  94 => 24,  84 => 17,  78 => 14,  69 => 7,  63 => 6,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Pagina principal de DoInValencia{% endblock %}*/
/* {% block stylesheets %}<link rel="stylesheet" href="{{asset('bundles/dawplantilla/css/estilo.css')}}" type="text/css" />{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <section class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="carousel slide" id="home-carousel" data-ride="carousel">*/
/*                     <div class="carousel-inner">*/
/*                         <div class="item active">*/
/*                             <img src="{{asset('bundles/dawplantilla/images/pruebas/image1.jpg')}}" alt="image1" />*/
/*                         </div>*/
/*                         <div class="item"> */
/*                             <img src="{{asset('bundles/dawplantilla/images/pruebas/image2.jpg')}}" alt="image2" />*/
/*                             <div class="carousel-caption">*/
/*                               <h3>Chania</h3>*/
/*                               <p>The atmosphere in Chania has a touch of Florence and Venice.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="item">*/
/*                             <img src="{{asset('bundles/dawplantilla/images/pruebas/image3.jpg')}}" alt="image3" />*/
/*                         </div>*/
/*                         <div class="item">  */
/*                             <img src="{{asset('bundles/dawplantilla/images/pruebas/image4.jpg')}}" alt="image4" />*/
/*                         </div>*/
/*                     </div>*/
/*                     <a class="carousel-control left" href="#home-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></a>*/
/*                     <a class="carousel-control right" href="#home-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></a>*/
/*                 </div>*/
/*             </div>    */
/*         </div>*/
/*     </section>*/
/*     */
/*     <section class="main container">*/
/*         <div class="row">*/
/*             <!--Seccion principal-->*/
/*             <section class="posts col-md-9">*/
/*                 <div class="indice">*/
/*                     <ol class="breadcrumb">*/
/*                         <!--son referencias de ejemplo.. en este caso solo estaria inicio ya que estamos en la principal-->*/
/*                         <li><a href="#">Inicio</a></li>*/
/*                         <li class="active">Eventos</li>*/
/*                     </ol>*/
/*                 </div>*/
/*                 <!-- Articulo 1-->*/
/*                 <article class="post clearfix">*/
/*                     <a href="#" class="thumb pull-left">*/
/*                         <img class="img-thumbnail imagen" src="{{asset('bundles/dawplantilla/images/pruebas/bootstrap.png')}}"></img>*/
/*                     </a>*/
/*                     <h2 class="post-tittle">*/
/*                         <a href="#">Titulo de ejemplo</a>*/
/*                     </h2>*/
/*                     <p class="post-contenido text-justify">*/
/*                         Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.*/
/*                         Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,*/
/*                         cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una*/
/*                         galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.*/
/*                     </p>*/
/*                     <p align="right"><span class="fecha">14 de Enero de 2016</span> por <span class="post-autor"><a href="#">Fran Perez</a></span></p><br>*/
/*                     <div class="contenedor-botones">*/
/*                         <a href="#" class="btn btn-success">Comentar <span class="badge">10</span></a>*/
/*                     </div>*/
/*                 </article>*/
/*                  <!-- Articulo 2-->*/
/*                 <article class="post clearfix">*/
/*                     <a href="#" class="thumb pull-left">*/
/*                         <img class="img-thumbnail imagen" src="{{asset('bundles/dawplantilla/images/pruebas/html.png')}}"></img>*/
/*                     </a>*/
/*                     <h2 class="post-tittle">*/
/*                         <a href="#">Titulo de ejemplo 2</a>*/
/*                     </h2>*/
/*                     <p class="post-contenido text-justify">*/
/*                         Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.*/
/*                         Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,*/
/*                         cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una*/
/*                         galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.*/
/*                     </p>*/
/*                     <p align="right"><span class="fecha">13 de Enero de 2016</span> por <span class="post-autor"><a href="#">Fran Perez</a></span></p>*/
/*                     <div class="contenedor-botones">*/
/*                         <a href="#" class="btn btn-success">Comentar <span class="badge">20</span></a>*/
/*                     </div>*/
/*                 </article>*/
/*                 <!--Barra de paginacion-->*/
/*                 <nav>*/
/*                     <div clas="center-block">*/
/*                         <ul class="pagination">*/
/*                             <li class="disabled"><a href="#">&laquo;<span class="sr-only">Anterior</span></a></li>*/
/*                             <li class="active"><a href="#">1</a></li>*/
/*                             <li><a href="#">2</a></li>*/
/*                             <li><a href="#">3</a></li>*/
/*                             <li><a href="#">4</a></li>*/
/*                             <li><a href="#">5</a></li>*/
/*                             <li><a href="#">&raquo;<span class="sr-only">Siguiente</span></a></li>*/
/*                         </ul>*/
/*                     </div>  */
/*                 </nav>*/
/*             </section>*/
/*             <!--Seccion secundaria Barra lateral-->*/
/*             <aside class="col-md-3 hidden-xd hidden-sm">*/
/*                 <h4>Clase</h4>*/
/*                 <div class=="list-group">*/
/*                     <a href="#" class="list-group-item active">Fran</a>*/
/*                     <a href="#" class="list-group-item">Emilio</a>*/
/*                     <a href="#" class="list-group-item">Victor</a>*/
/*                     <a href="#" class="list-group-item">Raul cabron</a>*/
/*                     <a href="#" class="list-group-item">Josep maricon</a>*/
/*                 </div>*/
/*                 */
/*                 <h4>Articulos recientes</h4>*/
/*                 <a href="#" class="list-group-item">*/
/*                     <h4 class="list-group-item-heading">Titulo de ejemplo</h4>*/
/*                     <p class="list-group-item-text">como hacer un artiuclo de ejemplo</p>*/
/*                 </a>*/
/*                 <a href="#" class="list-group-item">*/
/*                     <h4 class="list-group-item-heading">Titulo de ejemplo 2</h4>*/
/*                     <p class="list-group-item-text">como hacer un artiuclo de ejemplo 2</p>*/
/*                 </a>*/
/*             </aside>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/*         */
/*         */
/* {% block javascripts %}{% endblock %}*/
