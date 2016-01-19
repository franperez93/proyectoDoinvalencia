<?php

/* DawplantillaBundle:Default:index.html.twig */
class __TwigTemplate_86cc6396635569795a638bed915f335151169964189c408d09fc3edd17cfaf7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DawplantillaBundle:Default:index.html.twig", 1);
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
        $__internal_e255086c85cb937367b4d9cdf4606df75d74c0c752eb0d032a74a3e3c1eed4e2 = $this->env->getExtension("native_profiler");
        $__internal_e255086c85cb937367b4d9cdf4606df75d74c0c752eb0d032a74a3e3c1eed4e2->enter($__internal_e255086c85cb937367b4d9cdf4606df75d74c0c752eb0d032a74a3e3c1eed4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DawplantillaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e255086c85cb937367b4d9cdf4606df75d74c0c752eb0d032a74a3e3c1eed4e2->leave($__internal_e255086c85cb937367b4d9cdf4606df75d74c0c752eb0d032a74a3e3c1eed4e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_43d8a779a73718dd92c3a6098f92c74ba2694620b939fdeae89a95c428d3aaee = $this->env->getExtension("native_profiler");
        $__internal_43d8a779a73718dd92c3a6098f92c74ba2694620b939fdeae89a95c428d3aaee->enter($__internal_43d8a779a73718dd92c3a6098f92c74ba2694620b939fdeae89a95c428d3aaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pagina principal del Pi!";
        
        $__internal_43d8a779a73718dd92c3a6098f92c74ba2694620b939fdeae89a95c428d3aaee->leave($__internal_43d8a779a73718dd92c3a6098f92c74ba2694620b939fdeae89a95c428d3aaee_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e04f4f9ec8b82b0c1c26de94d3299b993581607477d9553f513cb3a5267a9382 = $this->env->getExtension("native_profiler");
        $__internal_e04f4f9ec8b82b0c1c26de94d3299b993581607477d9553f513cb3a5267a9382->enter($__internal_e04f4f9ec8b82b0c1c26de94d3299b993581607477d9553f513cb3a5267a9382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" />";
        
        $__internal_e04f4f9ec8b82b0c1c26de94d3299b993581607477d9553f513cb3a5267a9382->leave($__internal_e04f4f9ec8b82b0c1c26de94d3299b993581607477d9553f513cb3a5267a9382_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ed86ff767191642f5cfc2fcbb27cf799315fbbf09481cf628f80fdf29378bcf = $this->env->getExtension("native_profiler");
        $__internal_3ed86ff767191642f5cfc2fcbb27cf799315fbbf09481cf628f80fdf29378bcf->enter($__internal_3ed86ff767191642f5cfc2fcbb27cf799315fbbf09481cf628f80fdf29378bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!--Aqui se encuntra el contenido de ejemplo para la parte principal-->
    <section class=\"main container\">
        <div class=\"row\">
            <!--Seccion principal-->
            <section class=\"posts col-md-9\">
                <div class=\"indice\">
                    <ol class=\"breadcrumb\">
                        <!--son referencias de ejemplo.. en este caso solo estaria inicio ya que estamos en la principal-->
                        <li><a href=\"#\">Inicio</a></li>
                        <li><a href=\"#\">Categorias</a></li>
                        <li class=\"active\">Diseño web</li>
                    </ol>
                </div>
                <!-- Articulo 1-->
                <article class=\"post clearfix\">
                    <a href=\"#\" class=\"thumb pull-left\">
                        <img class=\"img-thumbnail imagen\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/bootstrap.png"), "html", null, true);
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
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/html.png"), "html", null, true);
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
        
        $__internal_3ed86ff767191642f5cfc2fcbb27cf799315fbbf09481cf628f80fdf29378bcf->leave($__internal_3ed86ff767191642f5cfc2fcbb27cf799315fbbf09481cf628f80fdf29378bcf_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42dc71c282a32e43a16f0d4fbf2d2d183e8d79f303010e16100c57bd33830cc0 = $this->env->getExtension("native_profiler");
        $__internal_42dc71c282a32e43a16f0d4fbf2d2d183e8d79f303010e16100c57bd33830cc0->enter($__internal_42dc71c282a32e43a16f0d4fbf2d2d183e8d79f303010e16100c57bd33830cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_42dc71c282a32e43a16f0d4fbf2d2d183e8d79f303010e16100c57bd33830cc0->leave($__internal_42dc71c282a32e43a16f0d4fbf2d2d183e8d79f303010e16100c57bd33830cc0_prof);

    }

    public function getTemplateName()
    {
        return "DawplantillaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 99,  109 => 42,  87 => 23,  69 => 7,  63 => 6,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Pagina principal del Pi!{% endblock %}*/
/* {% block stylesheets %}<link rel="stylesheet" href="{{asset('bundles/dawplantilla/css/estilo.css')}}" type="text/css" />{% endblock %}*/
/* */
/* {% block body %}*/
/*     <!--Aqui se encuntra el contenido de ejemplo para la parte principal-->*/
/*     <section class="main container">*/
/*         <div class="row">*/
/*             <!--Seccion principal-->*/
/*             <section class="posts col-md-9">*/
/*                 <div class="indice">*/
/*                     <ol class="breadcrumb">*/
/*                         <!--son referencias de ejemplo.. en este caso solo estaria inicio ya que estamos en la principal-->*/
/*                         <li><a href="#">Inicio</a></li>*/
/*                         <li><a href="#">Categorias</a></li>*/
/*                         <li class="active">Diseño web</li>*/
/*                     </ol>*/
/*                 </div>*/
/*                 <!-- Articulo 1-->*/
/*                 <article class="post clearfix">*/
/*                     <a href="#" class="thumb pull-left">*/
/*                         <img class="img-thumbnail imagen" src="{{asset('bundles/dawplantilla/images/bootstrap.png')}}"></img>*/
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
/*                         <img class="img-thumbnail imagen" src="{{asset('bundles/dawplantilla/images/html.png')}}"></img>*/
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
