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
        $__internal_23b4311220efafab3070ae00e92512a5123c7f01b60deda93e3a39a44810f56e = $this->env->getExtension("native_profiler");
        $__internal_23b4311220efafab3070ae00e92512a5123c7f01b60deda93e3a39a44810f56e->enter($__internal_23b4311220efafab3070ae00e92512a5123c7f01b60deda93e3a39a44810f56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DawplantillaBundle:Default:evento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23b4311220efafab3070ae00e92512a5123c7f01b60deda93e3a39a44810f56e->leave($__internal_23b4311220efafab3070ae00e92512a5123c7f01b60deda93e3a39a44810f56e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b17742d84cd972c9a444856c5940311b35e116f56cfaefe3a106ac14941093a = $this->env->getExtension("native_profiler");
        $__internal_6b17742d84cd972c9a444856c5940311b35e116f56cfaefe3a106ac14941093a->enter($__internal_6b17742d84cd972c9a444856c5940311b35e116f56cfaefe3a106ac14941093a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pagina principal de DoInValencia";
        
        $__internal_6b17742d84cd972c9a444856c5940311b35e116f56cfaefe3a106ac14941093a->leave($__internal_6b17742d84cd972c9a444856c5940311b35e116f56cfaefe3a106ac14941093a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0bcab8d3167d00f28d03088debe626e14a573780d5e7e27b8f05f8c9113fc9bf = $this->env->getExtension("native_profiler");
        $__internal_0bcab8d3167d00f28d03088debe626e14a573780d5e7e27b8f05f8c9113fc9bf->enter($__internal_0bcab8d3167d00f28d03088debe626e14a573780d5e7e27b8f05f8c9113fc9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" />";
        
        $__internal_0bcab8d3167d00f28d03088debe626e14a573780d5e7e27b8f05f8c9113fc9bf->leave($__internal_0bcab8d3167d00f28d03088debe626e14a573780d5e7e27b8f05f8c9113fc9bf_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_44c1b3925cffd02729c5676f3f82527b2590a36c56c0cb39ce1928c1f279e6e3 = $this->env->getExtension("native_profiler");
        $__internal_44c1b3925cffd02729c5676f3f82527b2590a36c56c0cb39ce1928c1f279e6e3->enter($__internal_44c1b3925cffd02729c5676f3f82527b2590a36c56c0cb39ce1928c1f279e6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "   <section class=\"main container\">
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
        // line 21
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
        // line 40
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
        
        $__internal_44c1b3925cffd02729c5676f3f82527b2590a36c56c0cb39ce1928c1f279e6e3->leave($__internal_44c1b3925cffd02729c5676f3f82527b2590a36c56c0cb39ce1928c1f279e6e3_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30c660c7d8164d3d781c804f3cde634a83e0d3732da0a9447571236b73fc0756 = $this->env->getExtension("native_profiler");
        $__internal_30c660c7d8164d3d781c804f3cde634a83e0d3732da0a9447571236b73fc0756->enter($__internal_30c660c7d8164d3d781c804f3cde634a83e0d3732da0a9447571236b73fc0756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_30c660c7d8164d3d781c804f3cde634a83e0d3732da0a9447571236b73fc0756->leave($__internal_30c660c7d8164d3d781c804f3cde634a83e0d3732da0a9447571236b73fc0756_prof);

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
        return array (  169 => 97,  107 => 40,  85 => 21,  69 => 7,  63 => 6,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Pagina principal de DoInValencia{% endblock %}*/
/* {% block stylesheets %}<link rel="stylesheet" href="{{asset('bundles/dawplantilla/css/estilo.css')}}" type="text/css" />{% endblock %}*/
/* */
/* {% block body %}*/
/*    <section class="main container">*/
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
