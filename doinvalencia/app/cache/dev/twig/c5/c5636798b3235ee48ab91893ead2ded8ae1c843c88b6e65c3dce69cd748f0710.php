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
        $__internal_6593627ac83bd16715a0baf5578c8c6711388c02a0cfa637a2ae3eb5f22a28ce = $this->env->getExtension("native_profiler");
        $__internal_6593627ac83bd16715a0baf5578c8c6711388c02a0cfa637a2ae3eb5f22a28ce->enter($__internal_6593627ac83bd16715a0baf5578c8c6711388c02a0cfa637a2ae3eb5f22a28ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DawplantillaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6593627ac83bd16715a0baf5578c8c6711388c02a0cfa637a2ae3eb5f22a28ce->leave($__internal_6593627ac83bd16715a0baf5578c8c6711388c02a0cfa637a2ae3eb5f22a28ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1d203edd0cbb94b50b440d3b031b66611e8d391c5e93ec0df301b1dc0690938 = $this->env->getExtension("native_profiler");
        $__internal_e1d203edd0cbb94b50b440d3b031b66611e8d391c5e93ec0df301b1dc0690938->enter($__internal_e1d203edd0cbb94b50b440d3b031b66611e8d391c5e93ec0df301b1dc0690938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pagina principal de DoInValencia";
        
        $__internal_e1d203edd0cbb94b50b440d3b031b66611e8d391c5e93ec0df301b1dc0690938->leave($__internal_e1d203edd0cbb94b50b440d3b031b66611e8d391c5e93ec0df301b1dc0690938_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f22b5559f456e4e9a758596f7263cb8a229c5a6209e6286fbc4ccac23163960 = $this->env->getExtension("native_profiler");
        $__internal_7f22b5559f456e4e9a758596f7263cb8a229c5a6209e6286fbc4ccac23163960->enter($__internal_7f22b5559f456e4e9a758596f7263cb8a229c5a6209e6286fbc4ccac23163960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7f22b5559f456e4e9a758596f7263cb8a229c5a6209e6286fbc4ccac23163960->leave($__internal_7f22b5559f456e4e9a758596f7263cb8a229c5a6209e6286fbc4ccac23163960_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc3b955678ebf709c2a5fb3a90ab48f3bd2ce10b7ef9bca0d211d251f2591d34 = $this->env->getExtension("native_profiler");
        $__internal_cc3b955678ebf709c2a5fb3a90ab48f3bd2ce10b7ef9bca0d211d251f2591d34->enter($__internal_cc3b955678ebf709c2a5fb3a90ab48f3bd2ce10b7ef9bca0d211d251f2591d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    
    <!--Aqui se encuntra el contenido de ejemplo para la parte principal-->
    <section class=\"main container\">
        <div class=\"row\">
            <!--Seccion principal -->
            <section class=\"posts col-md-9\">
                <!-- //son referencias de ejemplo.. de donde nos encontramos en cada momento, pero en la principal no hace falta
                <div class=\"indice\">
                    <ol class=\"breadcrumb\">
                        <li class=\"active\">Inicio</li>
                    </ol>
                </div>
                -->
                <div class=\"neighborhood-guides\">
                <div class=\"container\">
                    <h2>Ejemplo Eventos Thumbnail</h2>
                    <p>Tenemos eventos para todas las edades y gustos, ordenados por categorias o localización.</p>
                    <div class=\"row\">
                      <div class=\"col-md-4\">
                          <div class=\"thumbnail\">
                            <a href=\"evento\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/prueba/mexico-city.png"), "html", null, true);
        echo "\" ></a>
                          </div>
                          <div class=\"thumbnail\">
                            <a href=\"evento\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/prueba/ny.png"), "html", null, true);
        echo "\" ></a>
                          </div>
                      </div>
                      <div class=\"col-md-4\">
                          <div class=\"thumbnail\">
                            <a href=\"evento\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/prueba/tokyo.png"), "html", null, true);
        echo "\" ></a>
                          </div>
                          <div class=\"thumbnail\">
                            <a href=\"evento\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/prueba/paris.png"), "html", null, true);
        echo "\" ></a>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
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
        
        $__internal_cc3b955678ebf709c2a5fb3a90ab48f3bd2ce10b7ef9bca0d211d251f2591d34->leave($__internal_cc3b955678ebf709c2a5fb3a90ab48f3bd2ce10b7ef9bca0d211d251f2591d34_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52c0c6302cd91d74274c0734ae829b0c5b085e19eec67099446b3e69fc979c15 = $this->env->getExtension("native_profiler");
        $__internal_52c0c6302cd91d74274c0734ae829b0c5b085e19eec67099446b3e69fc979c15->enter($__internal_52c0c6302cd91d74274c0734ae829b0c5b085e19eec67099446b3e69fc979c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_52c0c6302cd91d74274c0734ae829b0c5b085e19eec67099446b3e69fc979c15->leave($__internal_52c0c6302cd91d74274c0734ae829b0c5b085e19eec67099446b3e69fc979c15_prof);

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
        return array (  147 => 72,  109 => 39,  103 => 36,  95 => 31,  89 => 28,  66 => 7,  60 => 6,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Pagina principal de DoInValencia{% endblock %}*/
/* {% block stylesheets %}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     */
/*     <!--Aqui se encuntra el contenido de ejemplo para la parte principal-->*/
/*     <section class="main container">*/
/*         <div class="row">*/
/*             <!--Seccion principal -->*/
/*             <section class="posts col-md-9">*/
/*                 <!-- //son referencias de ejemplo.. de donde nos encontramos en cada momento, pero en la principal no hace falta*/
/*                 <div class="indice">*/
/*                     <ol class="breadcrumb">*/
/*                         <li class="active">Inicio</li>*/
/*                     </ol>*/
/*                 </div>*/
/*                 -->*/
/*                 <div class="neighborhood-guides">*/
/*                 <div class="container">*/
/*                     <h2>Ejemplo Eventos Thumbnail</h2>*/
/*                     <p>Tenemos eventos para todas las edades y gustos, ordenados por categorias o localización.</p>*/
/*                     <div class="row">*/
/*                       <div class="col-md-4">*/
/*                           <div class="thumbnail">*/
/*                             <a href="evento"><img src="{{asset('bundles/dawplantilla/images/prueba/mexico-city.png')}}" ></a>*/
/*                           </div>*/
/*                           <div class="thumbnail">*/
/*                             <a href="evento"><img src="{{asset('bundles/dawplantilla/images/prueba/ny.png')}}" ></a>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="col-md-4">*/
/*                           <div class="thumbnail">*/
/*                             <a href="evento"><img src="{{asset('bundles/dawplantilla/images/prueba/tokyo.png')}}" ></a>*/
/*                           </div>*/
/*                           <div class="thumbnail">*/
/*                             <a href="evento"><img src="{{asset('bundles/dawplantilla/images/prueba/paris.png')}}" ></a>*/
/*                           </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
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
